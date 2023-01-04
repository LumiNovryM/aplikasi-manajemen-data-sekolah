@extends('layouts.mainlayout')

@section('title', "Teachers")

@section('content')

    <h2>
        Anda Sedang Melihat Data Detail Dari Guru "{{ $teacher->name }}"
    </h2>

    <div class="mt-5">
        <h3>Class : 
            @if ($teacher->class)
                {{ $teacher->class->name }}
            @else
                -
            @endif
        </h3>
    </div>

    <div class="mt-5">
        <h4>List Student</h4>
        <ol>
            @if ($teacher->class)
                @foreach ($teacher->class->student as $item)
                    <li>{{ $item->name}}</li>
                @endforeach
            @else
                -
            @endif
        </ol>
    </div>

@endsection