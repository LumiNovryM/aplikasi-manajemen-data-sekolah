@extends('layouts.mainlayout')

@section('title', "Class")

@section('content')

    <h2>
        Anda Sedang Melihat Data Detail Dari Class {{ $class->name }}
    </h2>

    <div class="mt-5">
        <h4>
            <strong>Homeroom Teacher : {{ $class->teacher->name }}</strong>
        </h4>
    </div>

    <div class="mt-5">
        <h4>List Student</h4>
        <ol>
            @foreach ($class->student as $item)
                <li>{{ $item->name }}</li>
            @endforeach
        </ol>
    </div>


@endsection