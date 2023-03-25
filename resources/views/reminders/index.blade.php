@extends('layouts.html')

@section('title')
    Список записей
@endsection

@section('main')
    <div class="text-center mt-5">
        <h3>Список записей</h3>
        <a href="{{route('reminders.create')}}" class="mt-4 btn btn-outline-info">Создать запись</a>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <table class="table table-info table-striped table-hover mt-2">
                    <thead class="thead">
                        <th scope="col">Название Записи</th>
                        <th scope="col">Содержание записи</th>
                        <th scope="col">Время записи</th>
                        <th scope="col">За сколько присылать уведомление</th>
                        <th scope="col">По каким дням присылать уведомление</th>
                        <th scope="col">Дата создания записи</th>
                    </thead>

                    <tbody>
                    @foreach($recorders as $record)
                        <tr>
                            <td>{{ $record->name }}</td>
                            <td>{{ $record->content }}</td>
                            <td>{{ $record->time }}</td>
                            <td>{{ $record->value}}</td>
                            <td>{{ $record->date }}</td>
                            <td>{{ $record->created_at }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
