@extends('layouts.app')

@section('content')
<div class="bg-black quiz1">
    <img src="{{ Vite::asset('/resources/images/background.jpg') }}" alt="img" class="quiz1__img">
    <h1 class="quiz1__h2 h2">Ответьте на 4 вопроса</h1>
    <p class="quiz1__text">
        И мы сделаем <b>визуализацию с индивидуальным подбором</b> изображений<br>по вашему запросу
    </p>
    <div class="quiz1__container">
        <div class="progress" role="progressbar" aria-label="Progress bar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 10px">
            <div class="progress-bar w-25"></div>
        </div>
        <div class="quiz1__inner">
            <h3 class="quiz1__question">В какую комнату планируете фотообои?</h3>
            <div class="container text-center">
                <div class="row row-cols-4">
                    <div class="col quiz1__card">
                        <div class="quiz1__imgbox">
                            <img src="{{ Vite::asset('/resources/images/rooms/room1.png') }}" class="rounded mx-auto d-block quiz1__card-image" alt="img">
                        </div>
                        <span class="quiz1__caption">Гостиная</span>
                    </div>
                    <div class="col quiz1__card">
                        <img src="{{ Vite::asset('/resources/images/rooms/room2.jpg') }}" class="rounded mx-auto d-block quiz1__card-image" alt="img">
                        <span class="quiz1__caption">Спальня</span>
                    </div>
                    <div class="col quiz1__card">
                        <img src="{{ Vite::asset('/resources/images/rooms/room3.jpg') }}" class="rounded mx-auto d-block quiz1__card-image" alt="img">
                        <span class="quiz1__caption">Коридор</span>
                    </div>
                    <div class="col quiz1__card">
                        <img src="{{ Vite::asset('/resources/images/rooms/room4.jpg') }}" class="rounded mx-auto d-block quiz1__card-image" alt="img">
                        <span class="quiz1__caption">Кухня</span>
                    </div>
                    <div class="col quiz1__card">
                        <img src="{{ Vite::asset('/resources/images/rooms/room5.jpg') }}" class="rounded mx-auto d-block quiz1__card-image" alt="img">
                        <span class="quiz1__caption">Детская девочки</span>
                    </div>
                    <div class="col quiz1__card">
                        <img src="{{ Vite::asset('/resources/images/rooms/room6.jpg') }}" class="rounded mx-auto d-block quiz1__card-image" alt="img">
                        <span class="quiz1__caption">Детская мальчика</span>
                    </div>
                    <div class="col quiz1__card">
                        <img src="{{ Vite::asset('/resources/images/rooms/room7.jpg') }}" class="rounded mx-auto d-block quiz1__card-image" alt="img">
                        <span class="quiz1__caption">Комната подростка</span>
                    </div>
                    <div class="col quiz1__card">
                        <img src="{{ Vite::asset('/resources/images/rooms/room8.png') }}" class="rounded mx-auto d-block quiz1__card-image" alt="img">
                        <span class="quiz1__caption">Санузел</span>
                    </div>
                  </div>
            </div>
            <a href="/quiz4" class="quiz1__link">
                <div class="quiz1__button">Далее</div>
            </a>
        </div>
    </div>

</div>
@endsection
