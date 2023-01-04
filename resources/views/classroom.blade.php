@extends('layouts.mainlayout')

@section('title', "Class")

@section('content')
    <h1>Ini Halaman Class</h1>
    <h3>Class List</h3>

    {{-- Button Create Data Start --}}
    <div class="my-5">
        <a href="" class="btn btn-primary">Create Data</a>
    </div>
    {{-- Button Create Data End --}}

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
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{-- Table End --}}

@endsection