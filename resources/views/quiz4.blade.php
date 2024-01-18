@extends('layouts.quiz')

@section('question', 'Как планируете расположить фотообои на стене?')
@section('progress', '100')
@section('next', '/request')

@section('quiz_container')
    <div class="cards text-center">
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
@endsection
