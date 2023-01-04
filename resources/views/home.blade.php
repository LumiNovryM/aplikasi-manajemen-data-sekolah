@extends('layouts.mainlayout')

@section('title', "Home")

@section('content')    
    {{-- Container Start --}}
    <div class="container ">
        <h1>Ini Halaman Home</h1>
        <h2>Selamat Datang, {{ $name }}. Anda adalah {{ $role }}</h2>

    </div>
    {{-- Container End --}}
@endsection
