@extends('layouts.mainlayout')

@section('title', "Students")

@section('content')
    <div class="mt-5 col-8 m-auto">
        {{-- Form Data Start --}}
        <form action="/students-update/{{ $students->id }}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name">Name</label>
                <input type="text" name="name" value="{{ $students->name }}" autocomplete="off" class="form-control" id="name" required>
            </div>
            <div class="mb-3">
                <label for="gender">Gender</label>
                <select name="gender" id="gender" class="form-control" required>
                    <option selected >{{ $students->gender }}</option>
                    <option value="P">Perempuan</option>
                    <option value="L">Laki-Laki</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="nis">NIS</label>
                <input type="number" name="nis" value="{{ $students->nis }}" autocomplete="off" class="form-control" id="nis" required>
            </div>
            <div class="mb-3">
                <label for="class">Class</label>
                <select name="class_id" id="class" class="form-control" required>
                    @foreach ($class as $item)
                        <option value="{{ $item->id }}" {{ ($item->id === $students->class_id) ? 'selected' : '' }}>{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
            <button class="btn btn-success" type="submit">
                Save
            </button>
        </form>
        {{-- Form Data End --}}
    </div>

@endsection