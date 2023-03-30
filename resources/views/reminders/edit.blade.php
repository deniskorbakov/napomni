@extends('layouts.html')

@section('title')
    Редактирование записи - {{$recorder->name}}
@endsection

@section('main')
    <div class="container text-center mt-5">
        <h3>Редактирование записи - {{$recorder->name}}</h3>
    </div>

    <div class="text-start container mt-5">
        <a href="{{route('reminders.show', $recorder->id)}}" class="btn btn-outline-info">
            <i class="fa-solid fa-arrow-left"></i>
            Выйти
        </a>
    </div>

    <div class="container text-center mt-4">
        <form action="{{route('reminders.update', $recorder->id)}}" method="POST">
            @csrf
            @method('patch')
            <div class="input-group">
                <input class="form-control" type="text" name="name" placeholder="Введите название напоминания" value="{{$recorder->name}}">
            </div>

            @error('name')
            <div class="alert alert-danger mt-3" role="alert">
                {{$message}}
            </div>
            @enderror

            <div class="input-group mt-4">
                <textarea class="form-control" type="text" name="content" placeholder="Введите текст напоминания">{{$recorder->content}}</textarea>
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
                <input class="form-control" type="time" id="time" name="time" value="{{$recorder->time}}">
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
                    @if($recorder->value == 1)
                        <option value="1">1 час</option>
                        <option value="2">2 часа</option>
                        <option value="3">3 часа</option>
                    @elseif($recorder->value == 2)
                        <option value="2">2 часа</option>
                        <option value="1">1 час</option>
                        <option value="3">3 часа</option>
                    @elseif($recorder->value == 3)
                        <option value="3">3 часа</option>
                        <option value="1">1 час</option>
                        <option value="2">2 часа</option>
                    @endif
                </select>
            </div>

            <div class="mt-4">
                <p class="text-start">
                    Уведомлять по:
                </p>

                <select id="inputState" class="form-select" name="date">
                    <option value="{{$recorder->date}}">{{$recorder->date}}</option>
                    <option value="Monday">Monday</option>
                    <option value="Tuesday">Tuesday</option>
                    <option value="Wednesday">Wednesday</option>
                    <option value="Thursday">Thursday</option>
                    <option value="Friday">Friday</option>
                    <option value="Saturday">Saturday</option>
                    <option value="Sunday">Sunday</option>
                </select>
            </div>

            <div class="mt-5">
                <button class="btn btn-outline-info" type="submit">обновить</button>
            </div>
        </form>
    </div>
@endsection
