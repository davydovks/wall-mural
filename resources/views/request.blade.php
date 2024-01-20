@extends('layouts.app')

@section('content')
<div class="bg-black home">
    <div class="home__img"></div>
    <h1 class="request__header">Визуализация<br>почти готова!</h1>
    <p class="home__text">Прикрепи фото стены (комнаты, где будут фотообои), напиши номер
        телефона и жми «Получить визуализацию», мы примерим получившуюся
        подборку на твою стену и отправим результат на WhatsApp или Viber.
    </p>
    <form action="/request" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="text" name="firstname" class="form__input" placeholder="Введите имя" value="{{ old('firstname') }}"><br>
        @error('firstname')
            <div class="alert-danger">{{ $message }}</div>
        @enderror
        <input type="text" name="phone" class="form__input" placeholder="Номер телефона" value="{{ old('phone') }}"><br>
        @error('phone')
            <div class="alert-danger">{{ $message }}</div>
        @enderror
        <input type="hidden" name="MAX_FILE_SIZE" value="20000000" />
        <label class="form__file">
            <input type="file" name="file" accept="image/*">
            <span>Выберите файл</span>
        </label><br>
        @error('file')
            <div class="alert-danger">{{ $message }}</div>
        @enderror
        <input type="submit" value="Получить визуализацию" class="form__button">
    </form>
</div>
@endsection
