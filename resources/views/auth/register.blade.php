@extends('layouts.app')
@section('title','Регистрация')

@section('content')
<h2 class="text-center">Регистрация</h2>
<section class="registerForm">
    <div class="d-flex justify-content-center">
        <div class="col-lg-4">
            <form method="POST" action="{{ route('register_process') }}">
                @csrf
                <div class="mb-3">
                  <label for="email" class="form-label">Электронная почта</label>
                  <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="example@mail.ru" required>
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Пароль</label>
                  <input type="password" name="password" class="form-control" id="password" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Подтвердите пароль</label>
                    <input type="password" name="password_confirmation" class="form-control" id="password" required>
                  </div>
                  <div class="mb-3 form-check d-flex flex-row align-items-center gap-1">
                    <input required type="checkbox" name="is_legal_entity" class="form-check-input" id="check">
                    <label class="form-check-label" for="check">Юридическое лицо</label>
                  </div>
                <div class="mb-3 form-check d-flex flex-row align-items-center gap-1">
                  <input required type="checkbox" name="rules" class="form-check-input" id="check">
                  <label class="form-check-label" for="check">Согласие на обработку персональных данных</label>
                </div>
                <div class="d-flex flex-row align-items-center gap-2 flex-wrap">
                <button type="submit" class="btn btn-success">Зарегистрироваться</button>
                <a class="btn btn-primary text-white" href="#">Уже зарегистрированы?</a>
              </div>
            </form>
        </div>
    </div>
</section>

@endsection
