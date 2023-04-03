@extends('layouts.html')

@section('title')
    Добро пожаловать!
@endsection

@section('main')
    <div class="position-relative overflow-hidden p-3 p-md-5 text-center bg-info border-top border-dark"
         id="background-sky">
        <div class="col-md-5 p-lg-5 mx-auto my-5 tracking-in-expand">
            <h1 class="display-4 fw-normal">Добро Пожаловать</h1>
            <p class="lead fw-normal">
                Не упустите ни одной важной записи - получайте уведомления на почту!
            </p>
        </div>
        <div class="product-device shadow-sm d-none d-md-block"></div>
        <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>

    <div class="px-4 py-5 my-5 text-center">
        <img class="d-block mx-auto mb-4 small-rotate" src="icon/logo.svg" alt="" width="72" height="57">

        <h1 class="display-5 fw-bold">Reminder</h1>
        <div class="col-lg-6 mx-auto mt-4">
            <p class="lead mb-4">
                Этот сайт идеально подходит для пользователей, которые хотят следить за новостями на определенном
                веб-сайте, но не хотят тратить свое время на постоянные обновления и проверки. Теперь пользователи могут
                оставаться в курсе последних событий, получая уведомления на свой электронный адрес через сайт об
                уведомлении записей на почту.
            </p>

            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <a class="btn btn-outline-info btn-lg px-4 gap-3" href="{{ route('reminders.index') }}">Перейти к напоминаниям</a>
            </div>
        </div>
    </div>

@endsection
