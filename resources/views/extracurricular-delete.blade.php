@extends('layouts.mainlayout')

@section('title', "Extracurricular")

@section('content')

    {{-- Form Confirmation Start --}}
    <form action="/extracurricular-destroy/{{ $eskul->id }}" method="post">
        @csrf
        @method('delete')
        <div class="card mt-5 " >
            <div class="card-body">
                <div class="card">
                    <h5 class="card-header">Are You Sure Want To Delete This Data?</h5>
                    <div class="card-body">
                    <h5 class="card-title">{{ $eskul->name }}</h5>
                        <p class="card-text"> Class Name : {{ $eskul->name }}</p>
                        <button type="submit" class="btn btn-primary">Yes, Pretty Sure</button>
                        <button class="btn btn-danger">Nope, Come Back</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    {{-- Form Confirmation End --}}

@endsection