@extends('layouts.quiz')

@section('quiz_container')
    <div class="progress" role="progressbar" aria-label="Progress bar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 10px">
        <div class="progress-bar w-100"></div>
    </div>
    <div class="quiz4__inner">
        <h3 class="quiz__question">Как планируете расположить фотообои на стене?</h3>
        <div class="container text-center">
            <div class="row row-cols-2">
                <div class="col quiz__card">
                    <img src="{{ Vite::asset('/resources/images/positions/position1.jpg') }}" class="rounded mx-auto d-block quiz__card-image" alt="img">
                    <span class="quiz__caption">На всю стену</span>
                </div>
                <div class="col quiz__card">
                    <img src="{{ Vite::asset('/resources/images/positions/position2.jpg') }}" class="rounded mx-auto d-block quiz__card-image" alt="img">
                    <span class="quiz__caption">На часть стены</span>
                </div>
                <div class="col quiz__card">
                    <img src="{{ Vite::asset('/resources/images/positions/position3.jpg') }}" class="rounded mx-auto d-block quiz__card-image" alt="img">
                    <span class="quiz__caption">На несколько стен</span>
                </div>
                <div class="col quiz__card">
                    <img src="{{ Vite::asset('/resources/images/positions/position4.png') }}" class="rounded mx-auto d-block quiz__card-image" alt="img">
                    <span class="quiz__caption">Пока не определился</span>
                </div>
            </div>
        </div>
        <a href="/quiz4" class="quiz__link">
            <div class="quiz__button">Далее</div>
        </a>
    </div>
@endsection
