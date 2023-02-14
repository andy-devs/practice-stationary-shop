@extends('layouts.app')
@section('title', 'Главная')

@section('content')

<section class="about-company mb-5">
    <h2 class="title pt-5">О компании</h2>
    <div class="d-flex flex-column flex-lg-row align-items-center gap-2 gap-lg-5">
        <img class="img-fluid" src="{{ asset('images/logo.jpg') }}" alt="">
        <p class="text-start fs-4">Наша канцелярская компания предоставляет лучше канцелярские услуги и самый широкий выбор канцелярских товаров на любой вкус. Здесь вы всегда найдете многообразие товаров, будь то краски, картины по номерам, ручки и карандаши.
        </p>
    </div>
</section>
<section class="types-of-shoes">
    <h2 class="title">Виды канцелярских товаров</h2>
    <div class="d-flex justify-content-center">
        <div class="type-of-shoes-item">
            <img class="img-fluid" src="{{ asset('images/items.jpg') }}" alt="">
        </div>
    </div>
</section>
<section class="clients mb-5">
    <h2 class="title pt-5">Наши клиенты</h2>
    <div class="d-flex justify-content-evenly flex-wrap gap-5 pt-5">
        <img class="img-fluid" style="width:150px" src="{{ asset('images/company-logo-1.jpg') }}" alt="">
        <img class="img-fluid" style="width:150px" src="{{ asset('images/company-logo-2.jpg') }}" alt="">
        <img class="img-fluid" style="width:150px" src="{{ asset('images/company-logo-3.png') }}" alt="">
    </div>
</section>
@endsection

