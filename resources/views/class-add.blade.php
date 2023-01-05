@extends('layouts.mainlayout')

@section('title', "Class")

@section('content')
    
    <div class="mt-5 col-8 m-auto">
        {{-- Form Data Start --}}
        <form action="/class-save" method="post">
            @csrf
            <div class="mb-3">
                <label for="name">Class Name</label>
                <input type="text" name="name" class="form-control" autocomplete="off" id="name" required>
            </div>
            <div class="mb-3">
                <label for="gender">Homeroom Teacher</label>
                <select name="teacher_id" id="gender" class="form-control" required>
                    <option selected >Select Homeroom Teacher</option>
                    @foreach ($teacher as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
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