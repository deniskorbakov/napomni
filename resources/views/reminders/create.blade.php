@extends('layouts.html')

@section('title')
    Создать запись
@endsection

@section('main')
    <div class="container text-center mt-5">
        <h3>Создание Записи</h3>
    </div>

    <div class="text-start container mt-5">
        <a href="{{route('reminders.index')}}" class="btn btn-outline-info">
            <i class="fa-solid fa-arrow-left"></i>
            Выйти
        </a>
    </div>

    <div class="container text-center mt-4">
        <form action="{{route('reminders.store')}}" method="POST">
            @csrf
            <div class="input-group">
                <input class="form-control" type="text" name="name" placeholder="Введите название напоминания">
            </div>

            @error('name')
                <div class="alert alert-danger mt-3" role="alert">
                    {{$message}}
                </div>
            @enderror

            <div class="input-group mt-4">
                <textarea class="form-control" type="text" name="content" placeholder="Введите текст напоминания"></textarea>
            </div>

            @error('content')
            <div class="alert alert-danger mt-3" role="alert">
                {{$message}}
            </div>
            @enderror

            <div class="mt-4">
                <p class="text-start">
                    Время уведомления:
                </p>
                <input class="form-control" type="time" id="time" name="time">
            </div>

            @error('time')
            <div class="alert alert-danger mt-3" role="alert">
                {{$message}}
            </div>
            @enderror

            <div class="mt-4">
                <p class="text-start">
                    Уведомлять за:
                </p>

                <select id="inputState" class="form-select" name="value">
                    <option value="1">1 час</option>
                    <option value="2">2 часа</option>
                    <option value="3">3 часа</option>
                </select>
            </div>

            <div class="mt-4">
                <p class="text-start">
                    Уведомлять по:
                </p>

                <select id="inputState" class="form-select" name="date">
                    <option value="Monday">Понедельниками</option>
                    <option value="Tuesday">Вторникам</option>
                    <option value="Wednesday">Средам</option>
                    <option value="Thursday">Четвергам</option>
                    <option value="Friday">Пятницам</option>
                    <option value="Saturday">Субботам</option>
                    <option value="Sunday">Воскресеньям</option>
                </select>
            </div>

            <div class="mt-5">
                <button class="btn btn-outline-info" type="submit">Создать Запись</button>
            </div>
        </form>
    </div>
@endsection
