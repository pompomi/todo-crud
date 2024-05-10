@extends('layouts.app')

@section('title', 'Home')
    
@section('content')
    <div>
        <h1>{{ Auth::user()->name }}</h1>
    </div>
@endsection