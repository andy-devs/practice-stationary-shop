@extends('layouts.app')
@section('title', 'Каталог')
@section('content')
    @if ($categories->count())
        <div class="d-flex gap-2 flex-wrap justify-content-evenly">
            @foreach ($categories as $c)
                <div class="">
                    <a href="{{ route('products', $c->slug) }}">
                        <div class="card slug-card">
                            <div class="card-body text-black">
                                {{ $c->name }}
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>

    @endif
@endsection
