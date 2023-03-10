@extends('layouts.app')
@section('title', $product->name)

@section('content')
    <div class="container pt">
        <div class="row">
            <div class="col-md-4">
                <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}" class="img-fluid">
            </div>
            <div class="col-md-8">
                <h1 class="mb-3">{{ $product->name }}</h1>
                <p>{{ $product->description }}</p>
                <p>{{ $product->price }} руб.</p>
                @if (auth()->check() && auth()->user()->is_admin)
                    <a class="btn btn-danger" href="{{ route('destroy', $product->id) }}">Удалить</a>
                    <a class="btn btn-primary text-white" href="{{ route('edit', $product->id) }}">Изменить</a>
                @endif
                @if (auth()->check())
                <a class="btn btn-primary text-center" href="{{ route('addToCart', $product->id) }}">В корзину</a>
                @endif
            </div>
        </div>
    </div>
@endsection
