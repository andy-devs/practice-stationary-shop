@extends('layouts.app')
@section('title', 'Контакты')

@section('content')

<section class="about-company mb-5">
    <h2 class="title pt-5">Почта</h2>
    <div class="d-flex flex-column align-items-center gap-2 gap-lg-5">
        <h3>example@mail.ru</h3>
    </div>
</section>
<section class="about-company mb-5">
  <h2 class="title pt-5">Адрес</h2>
  <div class="d-flex flex-column align-items-center gap-2 gap-lg-5">
      <h3>Пример Адреса</h3>
  </div>
</section>
<section class="about-company mb-5">
  <h2 class="title pt-5">Телефон</h2>
  <div class="d-flex flex-column align-items-center gap-2 gap-lg-5">
      <h3>8 (999) 999-99-99</h3>
  </div>
</section>
@endsection

