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
                <p class="text-dark mt-2">Во сколько присылать уведомления - {{$recorder->notify_for}}</p>
                <p class="text-dark mt-2">По каким дням присылать уведомление - {{$weekRu}}</p>
                <em>Дата создания записи: {{$recorder->created_at}}</em><br>
                <em>Дата изменения записи: {{$recorder->updated_at}}</em><br>
                <a class="btn btn-info mt-4" href="{{route('reminders.edit', $recorder->id)}}">Изменить</a>
                <form action="{{route('reminders.delete', $recorder->id)}}" method="POST" class="mt-2">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Удалить Запись" class="btn btn-danger">
                </form>
            </div>
        </article>
    </div>
@endsection
