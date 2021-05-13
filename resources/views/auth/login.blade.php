@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 text-center">
            <img src="/images/logo.png" class="img-fluid col-4" alt="logo">
        </div>
        <div class="col-md-7 mt-2">
            <div class="card auth-card">
                <div class="card-body pt-4">
                    <div class="col-12 text-center mb-3 auth-form-title">
                        Влезте в своя профил
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="auth-form-text col-12 col-form-label text-left">Имейл или потребителско име</label>
                            <div class="col-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="auth-form-text col-12 col-form-label text-left">Парола</label>

                            <div class="col-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-0 mt-4">
                            <div class="col-12">
                                <button type="submit" class="btn btn-block btn-primary btn-login">
                                    Вход
                                </button>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <div class="text-center new-user-question">Нов потребител?</div>
                            <div class="text-center">
                                <a href="/register" class="auth-link">Създайте своя профил</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
