@extends('layouts.quiz')

@section('question', 'В какую комнату планируете фотообои?')
@section('progress', '25')
@section('next', '/quiz4')
@section('cardsPerRow', '4')

@php
    $cards = [
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
