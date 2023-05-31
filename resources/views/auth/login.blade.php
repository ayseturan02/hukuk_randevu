@extends('layouts.app')

@section('content')
    <form class="form" method="POST" action="{{ route('login') }}">
        @csrf
        <p class="heading">Giriş Yap</p>
        <input class="input form-control @error('email') is-invalid @enderror" placeholder="E-posta" type="email" name="email" value="{{ old('email') }}" required>
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <input class="input form-control @error('password') is-invalid @enderror" placeholder="Şifre" type="password" name="password" required>
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <button class="btn" type="submit">Kayıt Ol</button>
        <button class="btn" type="submit">Giriş Yap</button>
        </form>
@endsection

