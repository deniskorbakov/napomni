@extends('layouts.html')

@section('title')
    Создать запись
@endsection

@section('main')
    <div class="container text-center mt-5">
        <h3>Создание Записи</h3>
    </div>

    <div class="container text-center mt-5">
        <form action="" method="POST">
            @csrf
            <div class="input-group">
                <input class="form-control" type="text" name="name" placeholder="Введите название напоминания">
            </div>

            <div class="input-group mt-4">
                <textarea class="form-control" type="text" name="content" placeholder="Введите текст напоминания"></textarea>
            </div>

            <div class="mt-4">
                <select id="inputState" class="form-select">
                    <option selected>Уведомлять за:</option>
                    <option value="1">1 час</option>
                    <option value="2">2 часа</option>
                    <option value="3">3 часа</option>
                </select>
            </div>

            <div class="mt-5">
                <button class="btn btn-outline-info">Создать Запись</button>
            </div>
        </form>
    </div>
@endsection
