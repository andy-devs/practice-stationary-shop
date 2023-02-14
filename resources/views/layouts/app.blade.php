<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="favicon" href="{{ asset('favicon.ico') }}">
    <title>@yield('title')</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="{{ route('home') }}"><img class="nav_logo" src="{{ asset('images/logo.jpg') }}" alt=""></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" href="{{ route('home') }}">Главная</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Разделы сайта
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ asset('catalog') }}">Продукция и услуги</a></li>
                        @auth
                        <li><a class="dropdown-item" href="{{ route('cartPage') }}">Корзина</a></li>
                        @endauth
                    </ul>
                  </li>
                  @if(auth()->check() && auth()->user()->is_admin)
                  <li class="nav-item"><a class="nav-link" href="{{ route('admin') }}">Админ-панель</a></li>
                  @endif
                </ul>
                @guest()
                <div class="me-3 mb-2 mb-lg-0">
                    <a class="btn btn-primary" href="{{ route('loginShow') }}">Войти</a>
                    <a class="btn btn-outline-primary" href="{{ route('registerShow') }}">Создать аккаунт</a>
                </div>
                @endguest
                @auth
                <a class="btn btn-primary me-3" href="{{ route('logout') }}">Выйти</a>
                @endauth
                <form class="d-flex" method="get" action="{{route('search')}}">
                    <input class="form-control me-2 @error('search') is-invalid @enderror" type="search" name="search" id="">
                  <button class="btn btn-outline-success" type="submit">Поиск</button>
                </form>
              </div>
            </div>
          </nav>
    </header>
    <main>
        <div class="container">
            @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
            @endif
            @yield('content')
        </div>
    </main>
    <footer>
    </footer>
    <script src="{{ asset('js/jquery-3.6.3.min.js') }}"></script>
</body>
</html>
