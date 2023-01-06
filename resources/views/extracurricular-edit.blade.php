@extends('layouts.mainlayout')

@section('title', "Extracurriculars")

@section('content')
    
    <div class="mt-5 col-8 m-auto">
        {{-- Form Data Start --}}
        <form action="/extracurricular-update/{{ $eskul->id }}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name">Extracurriculars Name</label>
                <input type="text" name="name" value="{{ $eskul->name }}" class="form-control" autocomplete="off" id="name" required>
            </div>
            <button class="btn btn-success" type="submit">
                Save
            </button>
        </form>
        {{-- Form Data End --}}
    </div>

@endsection