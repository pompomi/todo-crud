@extends('layouts.app')

@section('title', 'Edit')

@section('content')
    <div class="row">
        <h1 class="mb-4">Edit</h1>
        <form class="col-md-6" action="{{ route('todos.update', $todo) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input name="title" type="text" class="form-control" id="title" value="{{ $todo->title }}">
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                <input name="body" type="text" class="form-control" id="body" value="{{ $todo->body }}">
            </div>
            <button type="submit" class="btn btn-primary mt-3">Edit</button>
        </form>
    </div>
@endsection
