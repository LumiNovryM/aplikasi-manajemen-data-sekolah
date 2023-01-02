@extends('layouts.mainlayout')

@section('title', "Class")

@section('content')
    <h1>Ini Halaman Class</h1>
    <h3>Class List</h3>

    {{-- Table Star --}}
    <table class="table">
        <thead>
            <tr>
                <td>#</td>
                <td>Class</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($classlist as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->name }}</td>
                    <td>
                        <a href="/class/{{ $data->id }}" class="btn btn-info">Detail</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{-- Table End --}}

@endsection