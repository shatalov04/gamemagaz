var gulp = require('gulp'),
    sass = require('gulp-sass'),
    browserSync = require('browser-sync'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglifyjs'),
    cssnano = require('gulp-cssnano'),
    rename = require('gulp-rename'),
    imagemin = require('gulp-imagemin'),
    filesize = require('gulp-size'),
    image = require('gulp-image'),
    cache = require('gulp-cache'),
    pngquant = require('imagemin-pngquant'),
    del = require('del'),
    cssconcat = require('gulp-concat-css'),
    autoprefixer = require('gulp-autoprefixer'),
    jade = require('gulp-jade');


// gulp jade
//gulp.task('jade', function() {
//    gulp.src('app/jade/*.jade')
//        .pipe(jade({
//            pretty: true
//        }))
//        .on('error', console.log) // Если есть ошибки, выводим и продолжаем
//        .pipe(gulp.dest('app/')); // Записываем собранные файлы
//});

/*	sass => css, добавление префиксов, вывод в css */
gulp.task('sass', function () {
    return gulp.src('resources/assets/sass/*.+(sass|scss)')
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer(['last 15 versions', '> 1%', 'ie 8', 'ie 7'], {cascade: true}))
        .pipe(gulp.dest('public/css'))
        .pipe(browserSync.reload({stream: true}))
});

/*  сборка CSS библиотек и минификация    */
gulp.task('css-libs', function () {
    return gulp.src(
        'resources/assets/css/vendor/*.css'
    ) // Выбираем файл для сборки
        .pipe(cssconcat('./libs.min.css'))
        .pipe(filesize({
            title: 'CSS->',
            showFiles: true
        }))
        .pipe(gulp.dest('public/css')); // Выгружаем в папку app/css
});

/*  сборка, сжатие и минификация скриптов   */
gulp.task('scripts', function () {
    return gulp.src([ // Берем все необходимые библиотеки

    ])
        .pipe(concat('libs.min.js'))
        .pipe(uglify())
        .pipe(filesize({
            title: 'JS-libs.min ->',
            showFiles: true
        }))
        .pipe(gulp.dest('public/js'));
});

/*	Оптимизация изображений	*/
gulp.task('img', function () {
    gulp.src('resources/assets/img/**/*')
        .pipe(cache(image({
            pngquant: true,
            optipng: false,
            zopflipng: true,
            advpng: true,
            jpegRecompress: false,
            jpegoptim: true,
            mozjpeg: true,
            gifsicle: true,
            svgo: true
        })))
        .pipe(gulp.dest('public/img'));
});

/*  Синхронизация   */
gulp.task('watch', ['css-libs', 'scripts', 'sass', 'img', 'build'], function () {
    gulp.watch('resources/assets/sass/**/*.+(sass|scss)', ['sass']);
    gulp.watch('resources/assets/css/**/*.css');
    gulp.watch('resources/assets/css/libs/*.sass', ['css-libs']);
});

/*	Сборка проекта	*/
gulp.task('build', function () {

    // Переносим библиотеки в продакшен
    var buildCss = gulp.src([
        'app/css/main.css',
        'app/css/media.css',
        'app/css/libs.min.css'
    ])
        .pipe(cssnano()) // Минификация
        .pipe(filesize({
            showFiles: true
        })) // Размер файла
        .pipe(gulp.dest('public/css'));

    // Переносим шрифты в продакшен
    var buildFonts = gulp.src('resources/assets/fonts/**/*')
        .pipe(gulp.dest('public/fonts'));

    // Переносим стандарт библиотеки
    var buildLibsJs = gulp.src('resources/assets/libs/**/*')
        .pipe(gulp.dest('public/libs'));
    // Переносим скрипты в продакшен
    var buildJs = gulp.src('resources/assets/js/**/*')
        .pipe(gulp.dest('public/js'));

});


gulp.task('default', ['watch']);