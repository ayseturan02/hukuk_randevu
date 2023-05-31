@extends('layouts.app')

@section("content")


<body style="background-color: #e3e3e3;">
<form class="form" method="POST" action="{{ route('register') }}">
        
        @csrf
        <p class="heading">Kayıt Ol</p>

        <input class="input form-control @error('name') is-invalid @enderror" placeholder="İsim" type="text" name="name" value="{{ old('name') }}" required>
        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <input class="input form-control @error('surname') is-invalid @enderror" placeholder="Soyisim" type="text" name="surname" value="{{ old('surname') }}" required>
        @error('surname')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <input class="input form-control @error('email') is-invalid @enderror" placeholder="E-posta" type="email" name="email" value="{{ old('email') }}" required>
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <input class="input form-control @error('number') is-invalid @enderror" placeholder="Telefon" type="tel" name="number" value="{{ old('number') }}" required>
        @error('number')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <input class="input form-control @error('address') is-invalid @enderror" placeholder="Adres" type="text" name="address" value="{{ old('address') }}" required>
        @error('address')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <!-- Şifre onay alanını ekleyin -->

        <input class="input form-control @error('password') is-invalid @enderror" placeholder="Şifre" type="password" name="password" required>
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <!-- Şifre onay alanını ekleyin -->
        <input class="input form-control" placeholder="Şifre Onayı" type="password" name="password_confirmation" required>


        <input class="input form-control @error('birthdate') is-invalid @enderror" placeholder="Doğum Yılı" type="text" name="birthdate" value="{{ old('birthdate') }}" required>
        @error('birthdate')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <button class="btn" type="submit">Kayıt Ol</button>
    </form>
</body>



    <div class="hr"></div>
    <div class="hr" style="bottom: 0;"></div>
    <h1> MAS HUKUK BÜROSU</h1>
</body>
</html>


@endsection
