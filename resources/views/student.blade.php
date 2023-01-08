@extends('layouts.mainlayout')

@section('title', "Students")

@section('content')
    <h1>Ini Halaman Student</h1>
    <h3>Student List</h3>

    {{-- Button Create Data Start --}}
    <div class="my-5">
        <a href="/students-add" class="btn btn-primary">Create Data</a>
    </div>
    {{-- Button Create Data End --}}

    {{-- Session Flash Message Start --}}
    @if(Session::has('success-store'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('message') }}
        </div>
    @elseif (Session::has('error-store'))
        <div class="alert alert-danger" role="alert">
            {{ Session::get('message') }}
        </div>
    @elseif (Session::has('success-update')) 
        <div class="alert alert-success" role="alert">
            {{ Session::get('message') }}
        </div>
    @elseif (Session::has('error-update')) 
        <div class="alert alert-danger" role="alert">
            {{ Session::get('message') }}
        </div>
    @endif
    {{-- Session Flash Message End --}}

    {{-- Table Start --}}
    <table class="table">
        <thead>
            <tr>
                <td>#</td>
                <td>Name</td>
                <td>Gender</td>
                <td>NIS</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach($studentlist as $data)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data->name }}</td>
                <td>{{ $data->gender }}</td>
                <td>{{ $data->nis }}</td>
                <td>
                    <a href="/students-detail/{{ $data->id }}" class="btn btn-success">Detail</a>
                    <a href="/students-edit/{{ $data->id }}" class="btn btn-warning">Update</a>
                    <a href="/student-delete/{{ $data->id }}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{-- Table End --}}

@endsection