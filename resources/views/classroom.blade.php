@extends('layouts.mainlayout')

@section('title', "Students")

@section('content')
    <h1>Ini Halaman Class</h1>
    <h3>Class List</h3>

    {{-- Table Star --}}
    <table class="table">
        <thead>
            <tr>
                <td>#</td>
                <td>Class</td>
                <td>Students</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($classlist as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->name }}</td>
                    <td>
                        @foreach ($data->student as $val)
                            {{ $loop->iteration }}.){{ $val->name }} <br>
                        @endforeach
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{-- Table End --}}

@endsection