@extends('layouts.app')

@section('content')
<div class="bg-black home">
    <img src="{{ Vite::asset('/resources/images/background.jpg') }}" alt="img" class="home__img">
    <h1 class="home__h1 h1">Примерь фотообои<br>на свою стену</h1>
    <p class="home__text">Ответь на несколько вопросов и получи бесплатную визуализацию
        фотообоев в своем интерьере. Прикрепи фото стены и мы сделаем тебе
        подборку подходящих сюжетов.
    </p>
    <a href="#" class="home__link">
        <div class="home__button">Получить визуализацию</div>
    </a>
    <div class="home__ad">
        <img src="{{ Vite::asset('/resources/images/pc.svg') }}" alt="img" class="home__pc">
        <p class="home__ad-text">
            Бесплатная коррекция цвета и элементов и отрисовка по вашим пожеланиям
        </p>
    </div>
</div>
@endsection
