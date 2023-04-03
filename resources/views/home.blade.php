@extends('layouts.html')

@section('title')
    Кабинет пользователя
@endsection

@section('main')
    <div class="container mt-5">

        <div class="d-flex">

            <!-- Element on the left -->
            <div class="px-4">
                <img src="https://ui-avatars.com/api/name={{ Auth::user()->name }}?background=0dcaf0&color=fff"
                     class="rounded-circle" style="width: 150px;"
                     alt="Avatar">

            </div>

            <!-- Vertical divider -->
            <div class="vr" style="height: 250px;"></div>

            <!-- Element on the left -->
            <div class="px-4">
                <h4 class="mt-2 text-gray">Имя пользователя: {{ Auth::user()->name }}</h4>
                <h4 class="mt-2 text-gray">Почта: {{ Auth::user()->email }}</h4>
                <h4 class="mt-2 text-gray">Дата создания аккаунта: {{ Auth::user()->created_at }}</h4>
            </div>

        </div>
    </div>
@endsection
