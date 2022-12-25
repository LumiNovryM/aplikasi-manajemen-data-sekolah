@extends('layouts.mainlayout')

@section('title', "Home")

@section('content')    
    {{-- Container Start --}}
    <div class="container ">
        <h1>Ini Halaman Home</h1>
        <h2>Selamat Datang, {{ $name }}. Anda adalah {{ $role }}</h2>

        {{-- Table Start --}}
        <table class="table">
            <tr>
                <td>No.</td>
                <td>Nama Buah</td>
            </tr>
            @foreach ($buah as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item }}</td>
            </tr>
            @endforeach
        </table>
        {{-- Table End --}}
    </div>
    {{-- Container End --}}
@endsection
