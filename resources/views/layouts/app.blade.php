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
                        <li><a class="dropdown-item" href="{{ route('about-company') }}">О компании</a></li>
                        <li><a class="dropdown-item" href="{{ asset('company-standarts') }}">Стандарты качества</a></li>
                        <li><a class="dropdown-item" href="{{ asset('clients-and-partners') }}">Клиентам и партнерам</a></li>
                        <li><a class="dropdown-item" href="{{ asset('work-in-company') }}">Работа в компании</a></li>
                        <li><a class="dropdown-item" href="{{ asset('contacts') }}">Контакты</a></li>
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
    <main style="min-height: 100vh;">
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
  <!-- Footer -->
<footer class="text-center text-lg-start bg-white text-muted">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-2">
    <!-- Left -->
   
    <!-- Right --> 
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3 text-secondary"></i>Канцелярские товары
          </h6>
          <p>
            Наша канцелярская компания предоставляет лучше канцелярские услуги и самый широкий выбор канцелярских товаров на любой вкус. Здесь вы всегда найдете многообразие товаров, будь то краски, картины по номерам, ручки и карандаши.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Разделы
          </h6>
          <p>
            <a class="text-reset" href="{{ asset('catalog') }}">Продукция и услуги</a>
          </p>
          <p>
            <a class="text-reset" href="{{ route('about-company') }}">О компании</a>
          </p>
          <p>
            <a class="text-reset" href="{{ asset('company-standarts') }}">Стандарты качества</a>
          </p>
          <p>
            <a class="text-reset" href="{{ asset('clients-and-partners') }}">Клиентам и партнерам</a>
          </p>
          <p>
            <a class="text-reset" href="{{ asset('work-in-company') }}">Работа в компании</a>
          </p>
          <p>
            <a class="text-reset" href="{{ asset('contacts') }}">Контакты</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Мы в социальных сетях
          </h6>
          <p>
            <a class="text-reset" href="">В Контакте</a>
          </p>
          <p>
            <a class="text-reset" href="">Facebook</a>
          </p>
          <p>
            <a class="text-reset" href="">Одноклассники</a>
          </p>
          <p>
            <a class="text-reset" href="">What's Upp</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Юридическая информация</h6>
          <p><i class="fas fa-home me-3 text-secondary"></i>Булвар Архитекторов, 35</p>
          <p>
            <i class="fas fa-envelope me-3 text-secondary"></i>
            info@example.com
          </p>
          <p><i class="fas fa-phone me-3 text-secondary"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print me-3 text-secondary"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

</footer>
    <script src="{{ asset('js/jquery-3.6.3.min.js') }}"></script>
</body>
</html>
