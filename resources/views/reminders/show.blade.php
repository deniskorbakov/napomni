@extends('layouts.html')

@section('title')
    Запись {{$recorder->name}}
@endsection

@section('main')
    <div class="container mt-2">
        <h1 class="text-center">Запись - {{$recorder->name}}</h1>

        <article class="alert alert-dark mt-3" role="alert">
            <div class="container">
                <p class="text-dark mt-2">Название - {{$recorder->name}}</p>
                <p class="text-dark mt-2">Текст Записи - {{$recorder->content}}</p>
                <p class="text-dark mt-2">Время записи - {{$recorder->time}}</p>
                <p class="text-dark mt-2">За сколько присылать уведомление - {{$recorder->value}}</p>
                <p class="text-dark mt-2">По каким дням присылать уведомление - {{$recorder->date}}</p>
                <em>Дата создания записи: {{$recorder->created_at}}</em><br>
                <em>Дата изменения записи: {{$recorder->created_at}}</em><br>
                <a class="btn btn-dark mt-4" href="{{ route('reminders.index') }}">Выйти из поста</a>
{{--                <a class="btn btn-dark mt-4  ms-2" href="{{ route('reminders.edit', $recorder->id) }}">Изменить</a>--}}
            </div>
        </article>
@endsection
