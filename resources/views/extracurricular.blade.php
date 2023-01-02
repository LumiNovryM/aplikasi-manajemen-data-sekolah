@extends('layouts.mainlayout')

@section('title', 'Extracurricular')
    
@section('content')
    
<h1>Ini Halaman Extracurricular</h1>
<h3>Extracurricular List</h3>

{{-- Table Start --}}
<table class="table">
    <thead>
        <tr>
            <td>#</td>
            <td>Name</td>
            <td>Member</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($eskullist as $data)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $data->name }}</td>
            <td>
                @foreach ($data->students as $item)
                    {{ $loop->iteration }}.){{ $item->name }}<br>
                @endforeach
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{-- Table End --}}

@endsection