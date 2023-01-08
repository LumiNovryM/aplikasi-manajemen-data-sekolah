@extends('layouts.mainlayout')

@section('title', "Teacher")

@section('content')
    <h1>Ini Halaman Teacher</h1>
    <h3>Teacher List</h3>

    {{-- Button Create Data Start --}}
    <div class="my-5">
        <a href="/teacher-create" class="btn btn-primary">Create Data</a>
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
                    <a href="/teacher-edit/{{ $item->id }}" class="btn btn-warning">Update</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{-- Table End --}}

@endsection