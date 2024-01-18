@extends('layouts.quiz')

@section('question', 'В какую комнату планируете фотообои?')
@section('progress', '25')
@section('next', '/quiz4')

@section('quiz_container')
    <div class="cards text-center">
        <div class="row row-cols-4">
            <div class="col quiz__card">
                <img src="{{ Vite::asset('/resources/images/rooms/room1.png') }}" class="rounded mx-auto d-block quiz__card-image" alt="img">
                <span class="quiz__caption">Гостиная</span>
            </div>
            <div class="col quiz__card">
                <img src="{{ Vite::asset('/resources/images/rooms/room2.jpg') }}" class="rounded mx-auto d-block quiz__card-image" alt="img">
                <span class="quiz__caption">Спальня</span>
            </div>
            <div class="col quiz__card">
                <img src="{{ Vite::asset('/resources/images/rooms/room3.jpg') }}" class="rounded mx-auto d-block quiz__card-image" alt="img">
                <span class="quiz__caption">Коридор</span>
            </div>
            <div class="col quiz__card">
                <img src="{{ Vite::asset('/resources/images/rooms/room4.jpg') }}" class="rounded mx-auto d-block quiz__card-image" alt="img">
                <span class="quiz__caption">Кухня</span>
            </div>
            <div class="col quiz__card">
                <img src="{{ Vite::asset('/resources/images/rooms/room5.jpg') }}" class="rounded mx-auto d-block quiz__card-image" alt="img">
                <span class="quiz__caption">Детская девочки</span>
            </div>
            <div class="col quiz__card">
                <img src="{{ Vite::asset('/resources/images/rooms/room6.jpg') }}" class="rounded mx-auto d-block quiz__card-image" alt="img">
                <span class="quiz__caption">Детская мальчика</span>
            </div>
            <div class="col quiz__card">
                <img src="{{ Vite::asset('/resources/images/rooms/room7.jpg') }}" class="rounded mx-auto d-block quiz__card-image" alt="img">
                <span class="quiz__caption">Комната подростка</span>
            </div>
            <div class="col quiz__card">
                <img src="{{ Vite::asset('/resources/images/rooms/room8.png') }}" class="rounded mx-auto d-block quiz__card-image" alt="img">
                <span class="quiz__caption">Санузел</span>
            </div>
        </div>
    </div>
@endsection
