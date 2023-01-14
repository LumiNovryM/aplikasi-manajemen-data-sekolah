@extends('layouts.mainlayout')

@section('title', "Home")

@section('content')    
    {{-- Container Start --}}
    <div class="container ">
        {{-- {{ Auth::user()->role }} --}}
        <div class="card mt-5">
            <h5 class="card-header">Info Account</h5>
            <div class="card-body">
                <p class="card-text">Name : {{ Auth::user()->name }}</p>
                <p class="card-text">E-Mail : {{ Auth::user()->email }}</p>
                @if (Auth::user()->email === null)
                <p class="card-text">Email Verified : Verified</p>
                <p class="card-text">Email Verified : {{ Auth::user()->email_verified_at }}</p>
                @else
                <p class="card-text">Email Verified : Not Verified</p>
                <p class="card-text">Email Verified : None</p>
                @endif
                <p class="card-text">Role Status : {{ Auth::user()->role->name }}</p>
            </div>
          </div>
    </div>
    {{-- Container End --}}
@endsection
