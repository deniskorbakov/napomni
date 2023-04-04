@extends('layouts.html')

@section('title')
    Список записей
@endsection

@section('main')
    <div class="text-center mt-5">
        <h3>Список записей</h3>
        <a href="{{route('reminders.create')}}" class="mt-4 btn btn-outline-info">Создать запись</a>
    </div>

    <div class="album py-5">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach($recorders as $record)
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="{{asset('icon/default.svg')}}" class="img-thumbnail">
                            <div class="card-body">
                                <p class="card-text">Название: {{ $record->name }}</p>
                                <p class="card-text">Текст Записи: {{ $record->content }}</p>
                                <p class="card-text">Время Записи: {{ $record->time}}</p>
                                <div class="d-flex justify-content-between align-items-center">

                                    <a href="{{route('reminders.show', $record->id)}}" class="btn btn-info"><i
                                            class="fa-solid fa-arrow-right"></i></a>

                                    <small class="text-body-secondary">{{ $record->created_at }}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
