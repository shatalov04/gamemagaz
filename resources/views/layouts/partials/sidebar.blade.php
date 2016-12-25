<div class="sidebar">
    <div class="sidebar-item">
        <div class="sidebar-item__title">Категории</div>
        <div class="sidebar-item__content">
            <ul class="sidebar-category">
                @foreach($data['categories'] as $category)
                    <li class="sidebar-category__item"><a href="{{route('categories.show',$category->id)}}" class="sidebar-category__item__link">{{$category->name}}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="sidebar-item">
        <div class="sidebar-item__title">Последние новости</div>
        <div class="sidebar-item__content">
            <div class="sidebar-news">
                @foreach($data['articles'] as $article)
                    <div class="sidebar-news__item">
                        <div class="sidebar-news__item__preview-news"><img src="{{$article->photo}}" alt="image-new" class="sidebar-new__item__preview-new__image"></div>
                        <div class="sidebar-news__item__title-news"><a href="{{route('article',$article->id)}}" class="sidebar-news__item__title-news__link">{{$article->name}}</a></div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>