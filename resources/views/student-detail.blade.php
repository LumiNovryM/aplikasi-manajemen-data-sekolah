@extends('layouts.mainlayout')

@section('title', "Students")

@section('content')

    <h2>Anda Sedang Melihat Data Siswa "{{ $student->name }}"</h2>

   <div class="mt-5 mb-5">
    {{-- Table Start --}}
    <table class="table table-bordered ">
        <tr>
            <th>NIS</th>
            <th>Gender</th>
            <th>Class</th>
            <th>Homeroom Teacher</th>
        </tr>
        <tr>
            <td>{{ $student->nis }}</td>
            <td>
                @if ($student->gender == 'P')
                    Perempuan
                @else 
                    Laki-Laki
                @endif
            </td>
            <td>{{ $student->class->name }}</td>
            <td>{{ $student->class->teacher->name }}</td>
        </tr>
    </table>
    {{-- Table End --}}
   </div>

   <div>
        <h3>Extracurriculars</h3>
        <ol>
        @foreach ($student->extracurriculars as $item)
            <li>{{ $item->name }}</li>
        @endforeach
        </ol>
   </div>

   <style>
    th{
        width: 25%;
    }
   </style>

@endsection