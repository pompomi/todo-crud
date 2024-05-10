@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <div class="row">
        <form class="col-md-6" action="{{ route('login.login') }}" method="POST">
            @if (session('register-success'))
                <div class="alert alert-success" role="alert">
                    {{ session('register-success') }}
                </div>
            @endif
            @if (session('login-failed'))
                <div class="alert alert-warning" role="alert">
                    {{ session('login-failed') }}
                </div>
            @endif
            @csrf
            <div class="mb-3">
                <label for="emial" class="form-label">Email</label>
                <input name="email" type="email" class="form-control" id="email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input name="password" type="password" class="form-control" id="password">
            </div>
            <small>Belum memiliki akun? <a href="{{ route('register.index') }}">Register</a></small>
            <br>
            <button type="submit" class="btn btn-primary mt-3">Login</button>
        </form>
    </div>
@endsection
