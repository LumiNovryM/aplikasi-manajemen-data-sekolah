@extends('layouts.mainlayout')

@section('title', "Teacher")

@section('content')
    <h1>Ini Halaman Teacher</h1>
    <h3>Teacher List</h3>

    {{-- Table Start --}}
    <table class="table">
        <thead>
            <tr>
                <td>#</td>
                <td>Name</td>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->name }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{-- Table End --}}

@endsection