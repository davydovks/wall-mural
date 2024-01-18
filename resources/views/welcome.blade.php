@extends('layouts.app')

@section('content')
<div class="bg-black home">
    <div class="home__img"></div>
    <h1 class="home__h1 h1">Примерь фотообои<br>на свою стену</h1>
    <p class="home__text">Ответь на несколько вопросов и получи бесплатную визуализацию
        фотообоев в своем интерьере. Прикрепи фото стены и мы сделаем тебе
        подборку подходящих сюжетов.
    </p>
    <button class="form__button" onclick="location.href='/quiz1'">Получить визуализацию</button>
    <div class="home__ad">
        <img src="{{ Vite::asset('/resources/images/pc.svg') }}" alt="img" class="home__pc">
        <p class="home__ad-text">
            Бесплатная коррекция цвета и элементов и отрисовка по вашим пожеланиям
        </p>
    </div>
</div>
@endsection
