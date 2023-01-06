@extends('layouts.mainlayout')

@section('title', "Teacher")

@section('content')
    
    <div class="mt-5 col-8 m-auto">
        {{-- Form Data Start --}}
        <form action="/teacher-update/{{ $teacher->id }}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name">Teacher Name</label>
                <input type="text" name="name" class="form-control" value="{{ $teacher->name }}" autocomplete="off" id="name" required>
            </div>
            <button class="btn btn-success" type="submit">
                Save
            </button>
        </form>
        {{-- Form Data End --}}
    </div>

@endsection