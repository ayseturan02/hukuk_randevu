@extends('layouts.app_login')

@section("content")

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="container-fluid">{{ __('Giriş Yap') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('E-posta') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="text" class="form-control @error('E-posta') is-invalid @enderror" name="E-posta" value="{{ old('E-posta') }}" required autocomplete="name" autofocus>

                                    @error('E-posta')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="soyisim" class="col-md-4 col-form-label text-md-right">{{ __('Parola') }}</label>

                                <div class="col-md-6">
                                    <input id="Şifre" type="text" class="form-control @error('Şifre') is-invalid @enderror" name="Şifre" value="{{ old('Şifre') }}" required autocomplete="soyisim" autofocus>

                                    @error('Şifre')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

</form>
</div>
</div>
</div>
</div>
</div>

@endsection


