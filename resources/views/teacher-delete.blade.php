@extends('layouts.mainlayout')

@section('title', "Teachers")

@section('content')

    {{-- Form Confirmation Start --}}
    <form action="/teacher-destroy/{{ $teacher->id }}" method="post">
        @csrf
        @method('delete')
        <div class="card mt-5 " >
            <div class="card-body">
                <div class="card">
                    <h5 class="card-header">Are You Sure Want To Delete This Data?</h5>
                    <div class="card-body">
                    <h5 class="card-title">{{ $teacher->name }}</h5>
                        <p class="card-text"> Teacher Name : {{ $teacher->name }}</p>
                        <button type="submit" class="btn btn-primary">Yes, Pretty Sure</button>
                        <button class="btn btn-danger">Nope, Come Back</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    {{-- Form Confirmation End --}}

@endsection