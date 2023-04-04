<nav class="navbar navbar-expand-lg bg-info">
    <div class="container-fluid">
        <img src="{{asset('icon/logo.svg')}}" alt="" width="50" height="20">
        <a class="navbar-brand" href="#">Reminder</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('welcome')}}">Главная</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('reminders.index')}}">Создать напонимание</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('feedbacks.index')}}">Обратная связь</a>
                </li>

                @can('view', auth()->user())
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.reminders.index')}}">Админ панель</a>
                    </li>
                @endcan
            </ul>


                <ul class="navbar-nav ms-auto">
                    @guest

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Авторизоваться</a>
                            </li>



                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">Регистрация</a>
                            </li>

                    @else

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">Личный кабинет</a>
                        </li>

                        <li class="nav-item">

                            <a class="nav-link" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Выйти из аккаунта
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>


                    @endguest
                </ul>

        </div>
    </div>
</nav>

