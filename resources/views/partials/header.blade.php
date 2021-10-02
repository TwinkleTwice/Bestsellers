<header class="header" >
    <div class="container">
        <div class="nav">
            <img src="{{ asset('i/logo.png') }}" class="logo" alt="">
            <a href="#">Каталог</a>
            <a href="#">Мои материалы</a>
            <a href="#">Блог</a>
            <a href="#">Контакты</a>
            <a href="#" class="btn">30 дней бесплатно</a>
            <div class="search">
                <form action="">
                    @csrf
                    <label for="" class="search-item">
                        <input type="text" class="search-input" autocomplete="off" placeholder="Материалы или автор">
                        <span class="search-submit"></span>
                    </label>
                </form>
            </div>
            <div class="auth">
                <div class="login"></div>
                <a href="#">Войти</a>
            </div>
        </div>
    </div>
</header>
