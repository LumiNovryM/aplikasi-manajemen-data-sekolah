@extends('layouts.mainlayout')

@section('title', "Teacher")

@section('content')
    
    <div class="mt-5 col-8 m-auto">
        {{-- Form Data Start --}}
        <form action="/teacher-save" method="post">
            @csrf
            <div class="mb-3">
                <label for="name">Teacher Name</label>
                <input type="text" name="name" class="form-control" autocomplete="off" id="name" required>
            </div>
            <button class="btn btn-success" type="submit">
                Save
            </button>
        </form>
        {{-- Form Data End --}}
    </div>

@endsection