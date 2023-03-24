@extends('layouts.html')

@section('title')
    Список записей
@endsection

@section('main')
<div class="text-center mt-5">
    <h3>Список записей</h3>
    <a href="{{route('reminders.create')}}" class="mt-4 btn btn-outline-info">Создать запись</a>
</div>

    @foreach($recorders as $record)
        <div class="container mt-2 text-center">
            <p>{{$record->name}}</p>
            <p>{{$record->content}}</p>
            <p>{{$record->value}}</p>
            <p>{{$record->date}}</p>
        </div>
    @endforeach
@endsection
