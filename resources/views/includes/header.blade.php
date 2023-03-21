<nav class="navbar navbar-expand-lg bg-info">
    <div class="container-fluid">
        <img src="icon/logo.svg" alt="" width="50" height="20">
        <a class="navbar-brand" href="#">Reminder</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Главная</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Создать напонимание</a>
                </li>
            </ul>

            <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    @if (Route::has('login'))
                        @auth
                            <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ url('/home') }}">Кабинет пользователя</a></li>
                        @else
                            <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ route('login') }}">Авторизоваться</a></li>

                            @if (Route::has('register'))
                                <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ route('register') }}">Регистрация</a></li>
                            @endif
                        @endauth
                    @endif
                </ul>
            </div>
        </div>
    </div>
</nav>

