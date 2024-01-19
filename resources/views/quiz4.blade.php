@extends('layouts.quiz')

@section('question', 'Как планируете расположить фотообои на стене?')
@section('progress', '100')
@section('cardsPerRow', '2')
@section('action', '/quiz4')
@section('name', 'position')

@php
    $cards = [
        [
            'name' => 'На всю стену',
            'link' => '/resources/images/positions/position1.jpg'
        ],
        [
            'name' => 'На часть стены',
            'link' => '/resources/images/positions/position2.jpg'
        ],
        [
            'name' => 'На несколько стен',
            'link' => '/resources/images/positions/position3.jpg'
        ],
        [
            'name' => 'Пока не определился',
            'link' => '/resources/images/positions/position4.png'
        ],
    ];
@endphp
