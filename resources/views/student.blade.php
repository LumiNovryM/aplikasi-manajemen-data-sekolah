@extends('layouts.mainlayout')

@section('title', "Students")

@section('content')
    <h1>Ini Halaman Student</h1>
    <h3>Student List</h3>
    <ol>
        @foreach ($studentlist as $data)
            <li>
                {{ $data->name }} || {{ $data->gender }} || {{ $data->nis }}
            </li>
        @endforeach
    </ol>
@endsection