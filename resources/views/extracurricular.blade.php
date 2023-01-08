@extends('layouts.mainlayout')

@section('title', 'Extracurricular')
    
@section('content')
    
<h1>Ini Halaman Extracurricular</h1>
<h3>Extracurricular List</h3>

    {{-- Button Create Data Start --}}
    <div class="my-5">
        <a href="/extracurricular-create" class="btn btn-primary">Create Data</a>
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
        @foreach($eskullist as $data)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $data->name }}</td>
            <td>
                <a href="/extracurricular-detail/{{ $data->id }}" class="btn btn-success">Detail</a>
                <a href="/extracurricular-edit/{{ $data->id }}" class="btn btn-warning">Update</a>
                <a href="/extracurricular-delete/{{ $data->id }}" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{-- Table End --}}

@endsection