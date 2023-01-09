@extends('layouts.mainlayout')

@section("title", "Students")

@section('content')
    
    <h1 class="mt-3">
        List Data Deleted
    </h1>

    {{-- List Data Deleted Start --}}
    <div class="mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>NIS</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($student as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->gender }}</td>
                    <td>{{ $item->nis }}</td>
                    <td>
                        <a href="/student/{{ $item->id }}/restore" class="btn btn-success">Restore</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{-- List Data Deleted End --}}

@endsection