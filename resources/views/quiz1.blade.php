@extends('layouts.quiz')

@section('question', 'В какую комнату планируете фотообои?')
@section('progress', '25')
@section('next', '/quiz4')

@php
    $rooms = [
        [
            'name' => 'Гостиная',
            'link' => '/resources/images/rooms/room1.png'
        ],
        [
            'name' => 'Спальня',
            'link' => '/resources/images/rooms/room2.jpg'
        ],
        [
            'name' => 'Коридор',
            'link' => '/resources/images/rooms/room3.jpg'
        ],
        [
            'name' => 'Кухня',
            'link' => '/resources/images/rooms/room4.jpg'
        ],
        [
            'name' => 'Детская девочки',
            'link' => '/resources/images/rooms/room5.jpg'
        ],
        [
            'name' => 'Детская мальчика',
            'link' => '/resources/images/rooms/room6.jpg'
        ],
        [
            'name' => 'Комната подростка',
            'link' => '/resources/images/rooms/room7.jpg'
        ],
        [
            'name' => 'Санузел',
            'link' => '/resources/images/rooms/room8.jpg'
        ],
    ];
@endphp

@section('quiz_container')
    <div class="cards cards-row-4">
        @foreach ($rooms as $room)
            <div class="card">
                <div class="card__top">
                    <img src="{{ Vite::asset($room['link']) }}" alt="{{ $room['name'] }}" class="card__image">
                </div>
                <div class="card__circle"></div>
                <div class="card__bottom">
                    <div class="card__title">{{ $room['name'] }}</div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
