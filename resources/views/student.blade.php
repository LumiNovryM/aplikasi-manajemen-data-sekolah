@extends('layouts.mainlayout')

@section('title', "Students")

@section('content')
    <h1>Ini Halaman Student</h1>
    <h3>Student List</h3>

    {{-- Table Start --}}
    <table class="table">
        <thead>
            <tr>
                <td>#</td>
                <td>Name</td>
                <td>Gender</td>
                <td>NIS</td>
                <td>Class ID</td>
                <td>Class Name</td>
            </tr>
        </thead>
        <tbody>
            @foreach($studentlist as $data)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data->name }}</td>
                <td>{{ $data->gender }}</td>
                <td>{{ $data->nis }}</td>
                <td>{{ $data->class_id }}</td>
                <td>{{ $data->class->name }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{-- Table End --}}

@endsection