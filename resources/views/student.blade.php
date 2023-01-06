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
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{-- Table End --}}

@endsection