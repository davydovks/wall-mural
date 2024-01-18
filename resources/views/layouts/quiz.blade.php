@extends('layouts.app')

@section('content')
<div class="bg-black quiz">
    <img src="{{ Vite::asset('/resources/images/background.jpg') }}" alt="img" class="quiz__img">
    <h2 class="quiz__header">Ответьте на 4 вопроса</h1>
    <p class="quiz__text">
        И мы сделаем <b>визуализацию с индивидуальным подбором</b> изображений<br>по вашему запросу
    </p>
    <div class="quiz__container">
        <div class="progress" role="progressbar" aria-label="Progress bar" aria-valuenow="@yield('progress')" aria-valuemin="0" aria-valuemax="100" style="height: 10px">
            <div class="progress-bar w-@yield('progress')"></div>
        </div>
        <div class="quiz1__inner">
            <h3 class="quiz__question">@yield('question')</h3>
            <div class="cards cards-row-@yield('cardsPerRow')">
                @foreach ($cards as $card)
                    <div class="card">
                        <div class="card__top">
                            <img src="{{ Vite::asset($card['link']) }}" alt="{{ $card['name'] }}" class="card__image">
                        </div>
                        <div class="card__circle"></div>
                        <div class="card__bottom">
                            <div class="card__title">{{ $card['name'] }}</div>
                        </div>
                    </div>
                @endforeach
            </div>
            <a href="@yield('next')" class="quiz__link">
                <div class="quiz__button">Далее</div>
            </a>
        </div>
    </div>
</div>
@endsection
