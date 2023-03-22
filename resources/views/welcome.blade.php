@extends('layouts.html')

@section('title')
    Добро пожаловать!
@endsection

@section('main')
    <div class="position-relative overflow-hidden p-3 p-md-5 text-center bg-info border-top border-dark" id="background-sky">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1 class="display-4 fw-normal">Punny headline</h1>
            <p class="lead fw-normal">And an even wittier subheading to boot. Jumpstart your marketing efforts with this example based on Apple’s marketing pages.</p>
        </div>
        <div class="product-device shadow-sm d-none d-md-block"></div>
        <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>

    <div class="px-4 py-5 my-5 text-center">
        <img class="d-block mx-auto mb-4" src="icon/logo.svg" alt="" width="72" height="57">

        <h1 class="display-5 fw-bold">Reminder</h1>
        <div class="col-lg-6 mx-auto mt-4">
            <p class="lead mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquid amet dicta doloremque eos explicabo fugit harum illo maiores minima nobis odio odit officia perferendis quam quibusdam quisquam repudiandae, sunt. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, cupiditate, dolores excepturi fugiat impedit iure labore magni minus nisi nulla pariatur perferendis rem voluptatum. Architecto at dolor doloremque tempora voluptatum.</p>
            <p class="lead mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquid amet dicta doloremque eos explicabo fugit harum illo maiores minima nobis odio odit officia perferendis quam quibusdam quisquam repudiandae, sunt. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, cupiditate, dolores excepturi fugiat impedit iure labore magni minus nisi nulla pariatur perferendis rem voluptatum. Architecto at dolor doloremque tempora voluptatum.</p>

            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <a class="btn btn-outline-info btn-lg px-4 gap-3">Перейти к напоминаниям</a>
            </div>
        </div>
    </div>

@endsection
