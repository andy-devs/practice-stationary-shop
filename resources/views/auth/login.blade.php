@extends('layouts.app')
@section('title','Авторизация')

@section('content')
<h2 class="text-center">Авторизация</h2>
<div class="d-flex justify-content-center">
    <div class="col-lg-4">
        <form method="POST" action="{{ route('login_process') }}">
            @csrf
            <div class="mb-3">
              <label for="email" class="form-label">Электронная почта</label>
              <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="example@mail.ru" required>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Пароль</label>
              <input type="password" name="password" class="form-control" id="password" required>
            </div>
            <button type="submit" class="btn me-3 btn-success">Войти</button>
        </form>
    </div>
</div>
@endsection
