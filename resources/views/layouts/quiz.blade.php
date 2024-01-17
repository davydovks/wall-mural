@extends('layouts.app')

@section('content')
<div class="bg-black quiz">
    <img src="{{ Vite::asset('/resources/images/background.jpg') }}" alt="img" class="quiz__img">
    <h2 class="quiz__header">Ответьте на 4 вопроса</h1>
    <p class="quiz__text">
        И мы сделаем <b>визуализацию с индивидуальным подбором</b> изображений<br>по вашему запросу
    </p>
    <div class="quiz__container">
        @yield('quiz_container')
    </div>
</div>
@endsection
