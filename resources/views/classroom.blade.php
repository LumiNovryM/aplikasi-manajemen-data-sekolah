@extends('layouts.mainlayout')

@section('title', "Students")

@section('content')
    <h1>Ini Halaman Class</h1>
    <h3>Class List</h3>

    {{-- Table Star --}}
    <table class="table">
        <thead>
            <tr>No.</tr>
            <tr>Name</tr>
        </thead>
        <tbody>
            @foreach ($classlist as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{-- Table End --}}

@endsection