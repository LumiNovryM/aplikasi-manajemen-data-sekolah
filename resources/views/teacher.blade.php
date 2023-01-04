@extends('layouts.mainlayout')

@section('title', "Teacher")

@section('content')
    <h1>Ini Halaman Teacher</h1>
    <h3>Teacher List</h3>

    {{-- Button Create Data Start --}}
    <div class="my-5">
        <a href="" class="btn btn-primary">Create Data</a>
    </div>
    {{-- Button Create Data End --}}

    {{-- Table Start --}}
    <table class="table">
        <thead>
            <tr>
                <td>#</td>
                <td>Name</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->name }}</td>
                <td>
                    <a href="/teacher-detail/{{ $item->id }}" class="btn btn-success">Detail</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{-- Table End --}}

@endsection