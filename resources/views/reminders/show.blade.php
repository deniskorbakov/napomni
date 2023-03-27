@extends('layouts.html')

@section('title')
    Запись {{$recorder->name}}
@endsection

@section('main')
    <div class="container mt-2">
        <h1 class="text-center">Запись - {{$recorder->name}}</h1>


            <a href="{{route('reminders.index')}}" class="btn btn-outline-info">
                <i class="fa-solid fa-arrow-left"></i>
                Выйти
            </a>


        <article class="alert alert-info mt-3" role="alert">
            <div class="container">
                <p class="text-dark mt-2">Название - {{$recorder->name}}</p>
                <p class="text-dark mt-2">Текст Записи - {{$recorder->content}}</p>
                <p class="text-dark mt-2">Время записи - {{$recorder->time}}</p>
                <p class="text-dark mt-2">За сколько присылать уведомление - {{$recorder->value}}</p>
                <p class="text-dark mt-2">По каким дням присылать уведомление - {{$recorder->date}}</p>
                <em>Дата создания записи: {{$recorder->created_at}}</em><br>
                <em>Дата изменения записи: {{$recorder->created_at}}</em><br>
                <a class="btn btn-info mt-4" href="{{route('reminders.edit', $recorder->id)}}">Изменить</a>
            </div>
        </article>
@endsection
