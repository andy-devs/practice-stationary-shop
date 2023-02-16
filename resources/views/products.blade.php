@extends('layouts.app')
@section('title', 'Каталог')
@section('content')
    <section class="catalog pt-5">
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <h2 class="title mx-auto text-center">Каталог</h2>
        <div class="catalog-items d-flex flex-wrap gap-4 justify-content-evenly pt-5">
            @forelse ($products as $p)
            <div class="card" style="max-width: 250px">
                <img class="img-fluid" src="{{ asset('images/' . $p->image) }}" alt="{{ $p->name }}" style="max-width:100%" />
                <div class="card-body">
                  <h5 class="card-title">{{ $p->name }}</h5>
                  <p class="card-text">{{ $p->price }} руб.</p>
                  <div class="d-flex align-items-center flex-wrap gap-2">
                  <a href="{{ route('detail', $p->id) }}" class="btn btn-primary">Посмотреть</a>
                  @if (auth()->check())
                  <a href="{{ route('addToCart', $p->id) }}" class="btn btn-primary">В корзину</a>
                  @endif
                </div>
                </div>
              </div>
            @empty
                <div class="alert alert-danger text-center">Товары отсутствуют</div>
            @endforelse
        </div>
    </section>
@endsection
