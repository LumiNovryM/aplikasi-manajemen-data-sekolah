@extends('layouts.mainlayout')

@section('title', "Extracurriculars")

@section('content')
    
    <div class="mt-5 col-8 m-auto">
        {{-- Form Data Start --}}
        <form action="/extracurricular-save" method="post">
            @csrf
            <div class="mb-3">
                <label for="name">Extracurriculars Name</label>
                <input type="text" name="name" class="form-control" autocomplete="off" id="name" required>
            </div>
            <button class="btn btn-success" type="submit">
                Save
            </button>
        </form>
        {{-- Form Data End --}}
    </div>

@endsection