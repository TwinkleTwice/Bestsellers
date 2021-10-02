@extends('layouts.main')

@section('header')
    @include('partials.header')
@endsection

@section('content')
<section id="hero">
    <div class="container">
        <div class="wrap">
            <div class="hero-content">
                <span class="hero-title">Bestsellers.kz - бесконечный <br> доступ к знаниям!</span>
                <p class="text">Мы собрали книги, вебинары, подкасты, обучающие видео и многое <br> другое в одном месте для Вашего удобства.</p>
            </div>
            <div class="buttons">
                <div class="store-buttons">
                    <a href="https://play.google.com/store?hl=ru&gl=US" target="_blank" class="store-btn">
                        <img src="{{ asset('i/icons/google-play-i.png') }}" alt="">
                        <span><span>Скачать из</span>Google Play</span>
                    </a>
                    <a href="https://www.apple.com/ru/app-store/" target="_blank" class="store-btn">
                        <img src="{{ asset('i/icons/app-store-i.png') }}" alt="">
                        <span><span>Скачать из</span>App Store</span>
                    </a>
                </div>
                <a href="#" class="btn">30 дней бесплатно</a>
            </div>
            <div class="stats">
                <div class="stats-item">
                    <h3 class="count">38</h3>
                    <p class="text">Партнеров</p>
                </div>
                <div class="line"></div>
                <div class="stats-item">
                    <h3 class="count">150<span>тыс</span></h3>
                    <p class="text">Пользователей</p>
                </div>
                <div class="line"></div>
                <div class="stats-item">
                    <h3 class="count">65</h3>
                    <p class="text">Баз данных</p>
                </div>
                <div class="line"></div>
                <div class="stats-item">
                    <h3 class="count">100<span>тыс+</span></h3>
                    <p class="text">Книг</p>
                </div>
            </div>
            <img src="{{ asset('i/phone.png') }}" alt="" class="phone-img">
        </div>
    </div>
</section>
<section id="catalog">
    <div class="container">
        <div class="wrap">
            <h1 class="title">Обучайтесь как вам удобно</h1>
            <div class="catalog-list">
                <a href="#" class="catalog-item-1">
                    <span class="name">Книги</span>
                    <div class="img"></div>
                </a>
                <a href="#" class="catalog-item-2">
                    <span class="name">Аудиокниги</span>
                    <div class="img"></div>
                </a>
                <a href="#" class="catalog-item-3">
                    <span class="name">Курсы</span>
                    <div class="img"></div>
                </a>
                <a href="#" class="catalog-item-4">
                    <span class="name">Конспекты книг</span>
                    <div class="img"></div>
                </a>
                <a href="#" class="catalog-item-5">
                    <span class="name">Подкасты</span>
                    <div class="img"></div>
                </a>
                <a href="#" class="catalog-item-6">
                    <span class="name">Интервью</span>
                    <div class="img"></div>
                </a>
            </div>
        </div>
    </div>-1
</section>
<section id="materials">
    <div class="container">
        <div class="wrap">
            <h1 class="title">Интересные материалы</h1>
            <div class="materials-slider">
                <div class="materials-item">
                    <img src="{{ asset('i/book-sapiens.png') }}" alt="">
                    <p class="text">Sapienns Краткая история человечества</p>
                    <span class="name">Юваль Ной Харари</span>
                    <div class="raiting">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                    </div>
                </div>
                <div class="materials-item">
                    <img src="{{ asset('i/book-rich-dad.png') }}" alt="">
                    <p class="text">Богатый папа, бедный папа</p>
                    <span class="name">Роберт Кийосаки</span>
                    <div class="raiting">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                    </div>
                </div>
                <div class="materials-item">
                    <img src="{{ asset('i/book-i-want.png') }}" alt="">
                    <p class="text">Хочу и буду</p>
                    <span class="name">Михаил Лабковский</span>
                    <div class="raiting">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                    </div>
                </div>
                <div class="materials-item">
                    <img src="{{ asset('i/book-sapiens.png') }}" alt="">
                    <p class="text">Sapienns Краткая история человечества</p>
                    <span class="name">Юваль Ной Харари</span>
                    <div class="raiting">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                    </div>
                </div>
                <div class="materials-item">
                    <img src="{{ asset('i/book-rich-dad.png') }}" alt="">
                    <p class="text">Богатый папа, бедный папа</p>
                    <span class="name">Роберт Кийосаки</span>
                    <div class="raiting">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="about">
    <img src="/i/woman.png" alt="">
    <div class="container">
        <div class="wrap">
            <div class="about-content">
                <h1 class="title">Пара слов о нас</h1>
                <p class="text">
                    Вы находитесь в книжном портале самых настоящих авторов <br>
                    книг, а также читателей, где две эти категории любителей книг <br>
                    могут коммуницировать между собой, а также имеют <br>
                    возможность читать электронные книги абсолютно бесплатно!
                </p>
            </div>
        </div>
    </div>
</section>
<section id="facts">
    <div class="container">
        <div class="wrap">
            <h1 class="title">Несколько фактов о нас</h1>
            <div class="facts-list">
                <div href="#" class="facts-item">
                    <img src="{{ asset('i/icons/book-i.png') }}" alt="">
                    <span class="name">Библиотека</span>
                    <p class="text">
                        Наша библиотека начитывает более 1000 <br> бесплатных книг!
                    </p>
                </div>
                <div href="#" class="facts-item">
                    <img src="{{ asset('i/icons/author-i.png') }}" alt="">
                    <span class="name">Компетентные авторы</span>
                    <p class="text">
                        У нас публикуется более 100 современных <br> авторов в жанре нон-фикшн!
                    </p>
                </div>
                <div href="#" class="facts-item">
                    <img src="{{ asset('i/icons/social-i.png') }}" alt="">
                    <span class="name">Социальная сеть</span>
                    <p class="text">
                        Мы единственная на сегодняшний день <br>
                        сеть, которая знакомит читателя и автора, <br>
                        посредством коммуникаций!
                    </p>
                </div>
            </div>
            <a href="#" class="btn">30 дней бесплатно</a>
        </div>
    </div>
</section>
<section id="new-products">
    <div class="container">
        <div class="wrap">
            <h1 class="title">Новинки</h1>
            <div class="new-products-slider">
                <div class="new-products-item">
                    <img src="{{ asset('i/book-sapiens.png') }}" alt="">
                    <p class="text">Sapienns Краткая история человечества</p>
                    <span class="name">Юваль Ной Харари</span>
                    <div class="raiting">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                    </div>
                </div>
                <div class="new-products-item">
                    <img src="{{ asset('i/book-rich-dad.png') }}" alt="">
                    <p class="text">Богатый папа, бедный папа</p>
                    <span class="name">Роберт Кийосаки</span>
                    <div class="raiting">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                    </div>
                </div>
                <div class="new-products-item">
                    <img src="{{ asset('i/book-i-want.png') }}" alt="">
                    <p class="text">Хочу и буду</p>
                    <span class="name">Михаил Лабковский</span>
                    <div class="raiting">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                    </div>
                </div>
                <div class="new-products-item">
                    <img src="{{ asset('i/book-sapiens.png') }}" alt="">
                    <p class="text">Sapienns Краткая история человечества</p>
                    <span class="name">Юваль Ной Харари</span>
                    <div class="raiting">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                    </div>
                </div>
                <div class="new-products-item">
                    <img src="{{ asset('i/book-rich-dad.png') }}" alt="">
                    <p class="text">Богатый папа, бедный папа</p>
                    <span class="name">Роберт Кийосаки</span>
                    <div class="raiting">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="partners">
    <div class="container">
        <div class="partners-slider">
            <div class="partners-item">
                <img src="{{ asset('/i/young-guard.png') }}" alt="">
            </div>
            <div class="partners-item">
                <img src="{{ asset('/i/publishing-house.png') }}" alt="">
            </div>
            <div class="partners-item">
                <img src="{{ asset('/i/exmo.png') }}" alt="">
            </div>
            <div class="partners-item">
                <img src="{{ asset('/i/bombora.png') }}" alt="">
            </div>
            <div class="partners-item">
                <img src="{{ asset('/i/alpina.png') }}" alt="">
            </div>
            <div class="partners-item">
                <img src="{{ asset('/i/young-guard.png') }}" alt="">
            </div>
            <div class="partners-item">
                <img src="{{ asset('/i/publishing-house.png') }}" alt="">
            </div>
            <div class="partners-item">
                <img src="{{ asset('/i/exmo.png') }}" alt="">
            </div>
        </div>
    </div>
</section>
<section id="contact">
    <div class="container">
        <div class="wrap">
            <h1 class="title">Связаться с нами</h1>
            <a href="#"><img src="{{ asset('i/icons/contact-arrow-i.png') }}" alt=""></a>
        </div>
    </div>
</section>
@endsection

@section('footer')
    @include('partials.footer')
@endsection
