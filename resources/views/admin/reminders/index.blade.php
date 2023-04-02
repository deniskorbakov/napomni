@extends('layouts.html')

@section('title')
    Админ Панель
@endsection

@section('main')
    <div class="text-center mt-5">
        <h3>Список пользователй</h3>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12 table-responsive">
                        <table class="table table-info table-striped table-hover mt-2">
                            <thead class="thead">
                            <th scope="col">Id</th>
                            <th scope="col">Имя пользователя</th>
                            <th scope="col">Почта</th>
                            <th scope="col">Верификация Аккаунта</th>
                            <th scope="col">Пароль</th>
                            <th scope="col">Роль</th>
                            <th scope="col">Дата создания</th>
                            </thead>

                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email}}</td>
                                    <td>{{ $user->email_verified_at}}</td>
                                    <td>{{ $user->password }}</td>
                                    <td>{{ $user->role }}</td>
                                    <td>{{ $user->created_at }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12 table-responsive">
                        <table class="table table-info table-striped table-hover mt-2">
                            <thead class="thead">
                            <th scope="col">Id</th>
                            <th scope="col">Название Записи</th>
                            <th scope="col">Текст Записи</th>
                            <th scope="col">Уведомлять за</th>
                            <th scope="col">День недели</th>
                            <th scope="col">Время самой записи</th>
                            <th scope="col">Id пользователя</th>
                            <th scope="col">Почта</th>
                            </thead>

                            <tbody>
                            @foreach($recorders as $recorder)
                                <tr>
                                    <td>{{ $recorder->id }}</td>
                                    <td>{{ $recorder->name }}</td>
                                    <td>{{ $recorder->content}}</td>
                                    <td>{{ $recorder->notify_for}}</td>
                                    <td>{{ $recorder->date}}</td>
                                    <td>{{ $recorder->time}}</td>
                                    <td>{{ $recorder->user_id }}</td>
                                    <td>{{ $recorder->user_email}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
