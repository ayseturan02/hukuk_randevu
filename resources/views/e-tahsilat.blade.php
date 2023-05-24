@extends('layouts.app')

@section('content')

<nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">MAS HUKUK BÜROSU</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="d-inline-flex focus-ring py-1 px-2 text-decoration-none border rounded-2" aria-current="page" style="--bs-focus-ring-color: rgba(var(--bs-success-rgb), .25)" 
                    href="/home">ANASAYFA</a>
                </li>
                <li class="nav-item">
                    <a class="d-inline-flex focus-ring py-1 px-2 text-decoration-none border rounded-2" aria-current="page" style="--bs-focus-ring-color: rgba(var(--bs-success-rgb), .25)" 
                    href="/hakkimizda">HAKKIMIZDA</a>
                </li>
                
                <li class="nav-item">
                    <a class="d-inline-flex focus-ring py-1 px-2 text-decoration-none border rounded-2" aria-current="page" style="--bs-focus-ring-color: rgba(var(--bs-success-rgb), .25)" 
                    href="/alanlarimiz">ÇALIŞMA ALANLARIMIZ</a>
                </li>
                <li class="nav-item">
                    <a class="d-inline-flex focus-ring py-1 px-2 text-decoration-none border rounded-2" aria-current="page" style="--bs-focus-ring-color: rgba(var(--bs-success-rgb), .25)" 
                    href="/e-tahsilat">E-TAHSİLAT</a>
                </li>
                <li class="nav-item">
                    <a class="d-inline-flex focus-ring py-1 px-2 text-decoration-none border rounded-2" aria-current="page" style="--bs-focus-ring-color: rgba(var(--bs-success-rgb), .25)" 
                    href="/blog">BLOG</a>
                </li>
                <li class="nav-item">
                    <a class="d-inline-flex focus-ring py-1 px-2 text-decoration-none border rounded-2" aria-current="page" style="--bs-focus-ring-color: rgba(var(--bs-success-rgb), .25)" 
                    href="/randevu">RANDEVU ALIN</a>
                </li>
                <li class="nav-item">
                    <a class="d-inline-flex focus-ring py-1 px-2 text-decoration-none border rounded-2" aria-current="page" style="--bs-focus-ring-color: rgba(var(--bs-success-rgb), .25)" 
                    href="/kvkk">KVKK</a>
                </li>
                <li class="nav-item">
                    <a class="d-inline-flex focus-ring py-1 px-2 text-decoration-none border rounded-2" aria-current="page" style="--bs-focus-ring-color: rgba(var(--bs-success-rgb), .25)" 
                    href="/iletişim">İLETİŞİM</a>
                </li>
            </ul>

            @auth
            <!-- Çıkış Yap Formu -->
            <form action="{{ route('logout') }}" method="POST" class="d-flex">
                @csrf
                <button type="submit" class="btn btn-outline-success">Çıkış Yap</button>
            </form>
            @else
            <form class="d-flex" role="search" onsubmit="submitForm(event)">
                <input class="form-control me-2 text-white" type="search" placeholder="Search" aria-label="Search" id="register">
                <button class="btn btn-outline-success" type="submit">ARAMA</button>
            </form>
            @endauth
        </div>
    </div>
</nav>


@endsection
