@extends('layouts.app_register')

@section("content")

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="container-fluid">{{ __('KAYIT OL') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="İsim" class="col-md-4 col-form-label text-md-right">{{ __('İsim') }}</label>

                                <div class="col-md-6">
                                    <input id="İsim" type="text" class="form-control @error('İsim') is-invalid @enderror" name="İsim" value="{{ old('İsim') }}" required autocomplete="İsim" autofocus>

                                    @error('İsim')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="Soyisim" class="col-md-4 col-form-label text-md-right">{{ __('Soyisim') }}</label>

                                <div class="col-md-6">
                                    <input id="Soyisim" type="text" class="form-control @error('Soyisim') is-invalid @enderror" name="Soyisim" value="{{ old('Soyisim') }}" required autocomplete="Soyisim" autofocus>

                                    @error('Soyisim')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="E-posta" class="col-md-4 col-form-label text-md-right">{{ __('E-posta Adresi') }}</label>

                                <div class="col-md-6">
                                    <input id="E-posta" type="E-posta" class="form-control @error('E-posta') is-invalid @enderror" name="E-posta" value="{{ old('E-posta') }}" required autocomplete="E-posta">

                                    @error('E-posta')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="Adres" class="col-md-4 col-form-label text-md-right">{{ __('Adres') }}</label>

                                <div class="col-md-6">
                                    <input id="Adres" type="text" class="form-control @error('Adres') is-invalid @enderror" name="Adres" value="{{ old('Adres') }}" required autocomplete="Adres" autofocus>

                                    @error('Adres')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="Telefon" class="col-md-4 col-form-label text-md-right">{{ __('Telefon') }}</label>

                                <div class="col-md-6">
                                    <input id="Telefon" type="text" class="form-control @error('Telefon') is-invalid @enderror" name="Telefon" value="{{ old('Telefon') }}" required autocomplete="Telefon" autofocus>

@error('Telefon')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
</div>
</div>

<div class="form-group row">
                                <label for="Dogum_tarihi" class="col-md-4 col-form-label text-md-right">{{ __('Dogum_tarihi') }}</label>

                                <div class="col-md-6">
                                    <input id="Dogum_tarihi" type="text" class="form-control @error('Dogum_tarihi') is-invalid @enderror" name="Dogum_tarihi" value="{{ old('Dogum_tarihi') }}" required autocomplete="Dogum_tarihi" autofocus>

@error('Dogum_tarihi')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
</div>
</div>



<div class="form-group row">
<label for="Şifre" class="col-md-4 col-form-label text-md-right">{{ __('Şifre') }}</label>

<div class="col-md-6">
<input id="Şifre" type="password" class="form-control @error('Şifre') is-invalid @enderror" name="Şifre" required autocomplete="Şifre">

@error('Şifre')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
</div>
</div>

<div class="form-group row">
<label for="Şifreyi Onayla" class="col-md-4 col-form-label text-md-right">{{ __('Şifreyi Onayla') }}</label>

<div class="col-md-6">
<input id="Şifreyi Onayla" type="Şifreyi Onayla" class="form-control" name="Şifreyi Onayla" required autocomplete="Şifreyi Onayla">
</div>
</div>

<div class="form-group row mb-0">
<div class="col-md-6 offset-md-4">
<button type="submit" class="btn btn-primary">
    {{ __('KAYIT OL') }}
</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>

@endsection


