@extends('layouts.mainlayout')

@section('title', "Students")

@section('content')

    <h1>Ini Halaman Student</h1>
    <h3>Student List</h3>

    {{-- Search Start --}}
    <div class="my-3 mb-3 col-12 col-sm-8 col-md-4">
        <form action="" method="GET">
            <div class="input-group mb-3 col-12 col-sm-8 col-md-6">
                <input type="text" class="form-control" autocomplete="off" name="keyword" id="floatingInputGroup1" placeholder="Username">
                <button class="input-group-text btn btn-primary btn-sm">Search</button>
            </div>
        </form>
    </div>
    {{-- Search End --}}

    {{-- Button Create Data Start --}}
    <div class="my-5 d-flex justify-content-between">
        <a href="/students-add" class="btn btn-primary btn-sm">Create Data</a>
    <a href="/student-deleted" class="btn btn-dark btn-sm">Show Deleted Data</a>
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
    @elseif (Session::has('success-destroy')) 
        <div class="alert alert-success" role="alert">
            {{ Session::get('message') }}
        </div>
    @elseif (Session::has('error-destroy')) 
        <div class="alert alert-danger" role="alert">
            {{ Session::get('message') }}
        </div>
    @elseif (Session::has('success-restore')) 
        <div class="alert alert-success" role="alert">
            {{ Session::get('message') }}
        </div>
    @elseif (Session::has('error-restore')) 
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
                <td>Class</td>
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
                <td>{{ $data->class->name }}</td>
                <td>
                    <a href="/students-detail/{{ $data->id }}" class="btn btn-success btn-sm">Detail</a>
                    <a href="/students-edit/{{ $data->id }}" class="btn btn-warning btn-sm">Update</a>
                    <a href="/student-delete/{{ $data->id }}" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{-- Table End --}}

    <div class="my-5">
        {{-- Paginate Start --}}
            {{ $studentlist->withQueryString()->links() }}
        {{-- Paginate End --}}
    </div>

@endsection