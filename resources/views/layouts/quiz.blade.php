@extends('layouts.app')

@section('content')
<div class="bg-black quiz">
    <div class="quiz__img"></div>
    <h2 class="quiz__header">Ответьте на 4 вопроса</h1>
    <p class="quiz__text">
        И мы сделаем <b>визуализацию с индивидуальным подбором</b> изображений<br>по вашему запросу
    </p>
    <div class="quiz__container">
        <div class="progress" role="progressbar" aria-label="Progress bar" aria-valuenow="@yield('progress')" aria-valuemin="0" aria-valuemax="100" style="height: 10px">
            <div class="progress-bar w-@yield('progress')"></div>
        </div>
        <form action="@yield('action')" method="post" class="quiz1__inner">
            {{ csrf_field() }}
            <h3 class="quiz__question">@yield('question')</h3>
            <div class="cards cards-row-@yield('cardsPerRow')">
                @foreach ($cards as $card)
                    <label>
                        <input type="radio" name="@yield('name')" value="{{ $loop->iteration }}" class="card__radio">
                        <div class="card">
                            <div class="card__top">
                                <img src="{{ Vite::asset($card['link']) }}" alt="{{ $card['name'] }}" class="card__image">
                            </div>
                            <div class="card__circle"></div>
                            <div class="card__title">{{ $card['name'] }}</div>
                        </div>
                    </label>
                @endforeach
            </div>
            <input type="submit" value="Далее" class="quiz__button" disabled>
        </form>
    </div>
</div>
@endsection
