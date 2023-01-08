@extends('layouts.mainlayout')

@section('title', "Class")

@section('content')
    <h1>Ini Halaman Class</h1>
    <h3>Class List</h3>

    {{-- Button Create Data Start --}}
    <div class="my-5">
        <a href="/class-create" class="btn btn-primary">Create Data</a>
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
    {{-- Session Flash Message Start --}}

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
                        <a href="/class-detail/{{ $data->id }}" class="btn btn-success">Detail</a>
                        <a href="/class-edit/{{ $data->id }}" class="btn btn-warning">Update</a>
                        <a href="/class-delete/{{ $data->id }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{-- Table End --}}

@endsection