@extends('layouts.html')

@section('title')
    Обратная Связь
@endsection

@section('main')
    <div class="container mt-5">
        <form action="{{route('feedbacks.store')}}" method="POST">
            @csrf
            <h3 class="text-center">Форма обратной связи</h3>

            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <strong>{{ $message }}</strong>
                </div>
            @endif

            <div class="mt-4">
                <input name="title" type="text" placeholder="Введите название обращения" class="form-control">
            </div>

            @error('title')
            <div class="alert alert-danger mt-3" role="alert">
                {{$message}}
            </div>
            @enderror

            <div class="mt-4">
                <textarea class="form-control" type="text" name="content"
                          placeholder="Введите текст обращения"></textarea>
            </div>

            @error('content')
            <div class="alert alert-danger mt-3" role="alert">
                {{$message}}
            </div>
            @enderror

            <div class="mt-5 text-center">
                <button class="btn btn-info">Отправить</button>
            </div>
        </form>
    </div>
@endsection
