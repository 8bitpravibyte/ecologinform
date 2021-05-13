@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 text-center">
            <img src="/images/logo.png" class="img-fluid col-3" alt="logo">
        </div>
        <div class="col-md-7 mt-2">
            <div class="card auth-card">

                <div class="card-body pt-4">
                    <div class="col-12 text-center mb-3 auth-form-title">
                        Регистрирай свой профил
                    </div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="auth-form-text col-12 col-form-label text-md-left">Имейл</label>

                            <div class="col-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="auth-form-text col-12 col-form-label text-md-left">Потребителско име</label>

                            <div class="col-12">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="password" class="auth-form-text col-12 col-form-label text-md-left">Парола</label>

                            <div class="col-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="auth-form-text col-12 col-form-label text-md-left">Потвърдете паролата</label>

                            <div class="col-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="checkbox" required="required"> <span class="policies">Прочетох, разбрах и се съгласявам с</span>  <a href="/privacy-policy" class="auth-link">Политиката за поверителност на личните данни</a>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" required="required"> <span class="policies">Прочетох, разбрах и се съгласявам с </span> <a href="/terms-of-use" class="auth-link">Условията за ползване</a>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" required="required"> <span class="policies">Потвърждавам, че имам навършени 16 години </span>
                        </div>

                        <div class="form-group row mt-3">
                            <div class="col-12">
                                <button type="submit" class="btn btn-block btn-primary btn-login">
                                    Регистрация
                                </button>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <div class="text-center new-user-question">Вече сте регистрирани?</div>
                            <div class="text-center">
                                <a href="/login" class="auth-link">Вход</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
