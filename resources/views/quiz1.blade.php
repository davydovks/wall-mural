@extends('layouts.quiz')

@section('quiz_container')
    <div class="progress" role="progressbar" aria-label="Progress bar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 10px">
        <div class="progress-bar w-25"></div>
    </div>
    <div class="quiz1__inner">
        <h3 class="quiz__question">В какую комнату планируете фотообои?</h3>
        <div class="container text-center">
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
        <a href="/quiz4" class="quiz__link">
            <div class="quiz__button">Далее</div>
        </a>
    </div>
@endsection
