@extends('layouts.app')

@section('content')
<div class="bg-black home">
    <div class="home__img"></div>
    <h1 class="home__header">Примерь фотообои<br>на свою стену</h1>
    <p class="home__text">Ответь на несколько вопросов и получи бесплатную визуализацию
        фотообоев в своем интерьере. Прикрепи фото стены и мы сделаем тебе
        подборку подходящих сюжетов.
    </p>
    <button class="form__button" onclick="location.href='/quiz1'">Получить визуализацию</button>
    <div class="adv">
        <img src="{{ Vite::asset('/resources/images/pc.svg') }}" alt="img" class="adv__image">
        <p class="adv__text">
            Бесплатная коррекция цвета и элементов и отрисовка по вашим пожеланиям
        </p>
    </div>
</div>
@if (session()->has('modal'))
    <div class="modal__overlay">
        <div class="modal">
            <div class="modal__container">
                <div class="modal__text">
                    Мы обработаем вашу заявку<br>
                    в ближайшее время и пришлём подборку<br>
                    визуализаций по вашим пожеланиям<br>
                    в WhatsApp или Viber
                </div>
                <button class="modal__button">Буду ждать</button>
            </div>
        </div>
    </div>
@endif
@endsection
