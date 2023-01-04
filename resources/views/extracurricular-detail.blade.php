@extends('layouts.mainlayout')

@section('title', "Extracurricular")

@section('content')

    <h2>
        Anda Sedang Melihat Data Detail Dari Extracurricular "{{ $eskul->name }}"
    </h2>

    <div class="mt-5">
        <h3>List Peserta</h3>

        <ol>
            @foreach ($eskul->students as $item)
            <li>
                {{ $item->name }}
            </li>
            @endforeach
        </ol>

    </div>

@endsection