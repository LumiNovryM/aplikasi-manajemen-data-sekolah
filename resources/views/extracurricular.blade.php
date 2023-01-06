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
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{-- Table End --}}

@endsection