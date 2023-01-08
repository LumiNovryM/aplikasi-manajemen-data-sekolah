@extends('layouts.mainlayout')

@section('title', "Students")

@section('content')

    {{-- Form Confirmation Start --}}
    <form action="/student-destroy/{{ $student->id }}" method="post">
        @csrf
        @method('delete')
        <div class="card mt-5 " >
            <div class="card-body">
                <div class="card">
                    <h5 class="card-header">Are You Sure Want To Delete This Data?</h5>
                    <div class="card-body">
                    <h5 class="card-title">{{ $student->name }}</h5>
                        <p class="card-text"> Student Name : {{ $student->name }}</p>
                        @if ($student->gender === 'L')
                        <p class="card-text"> Jenis Kelamin : Laki-Laki</p>
                        @else
                        <p class="card-text"> Jenis Kelamin : Perempuan</p>
                        @endif
                        <p class="card-text"> NIS : {{ $student->nis }}</p>
                        <p class="card-text"> Class : {{ $student->class->name }}</p>
                        <button type="submit" class="btn btn-primary">Yes, Pretty Sure</button>
                        <button class="btn btn-danger">Nope, Come Back</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    {{-- Form Confirmation End --}}

@endsection