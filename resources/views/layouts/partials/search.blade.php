<div class="content-head__search-block">
    <div class="search-container">
        <form action="{{route('products.search')}}" class="search-container__form" method="post">
           {{csrf_field()}}
            <input type="text" class="search-container__form__input" name="search">
            <input type="submit" class="search-container__form__btn" Value="search">
        </form>
    </div>
</div>