@extends('layouts.admin.app')

@section('title', 'Dashboard')

@section('content')
@if (Auth::check())
<h1>Welcome</h1>
<a href="/user/logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

<form id="logout-form" action="/user/logout" method="POST" style="display: none;">
    @csrf
</form>
@else
<h1>Welcome, Guest</h1>
<a href="/user/login">Login</a>
<a href="/user/register">Register</a>
@endif

<!-- Card Section -->
<div class="row mt-4">
    @foreach($cards as $card)
    <div class="col-md-4 mb-4">
        <div class="card">
            <img src="{{ $card['image'] }}" class="card-img-top" alt="Card image">
            <div class="card-body">
                <h5 class="card-title">{{ $card['title'] }}</h5>
                <p class="card-text">{{ $card['description'] }}</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection