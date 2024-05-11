@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="d-flex flex-row-reverse">
        <div>
            <button class="btn btn-primary">
                <a href="{{ route('todos.create') }}" class="link-light link-underline link-underline-opacity-0">Add</a>
            </button>
        </div>
    </div>

    <div class="row">
        @foreach ($data as $todo)
            <div class="col-4">
                <div class="card mt-5" style="width: 18rem;">
                    <div class="card-body">
                        <h6 class="card-title">{{ $todo->title }}</h6>
                        <small class="card-subtitle mb-2 text-body-secondary">{{ $todo->updated_at }}</small>
                        <h5 class="card-text mt-3">
                            {{ $todo->body }}
                        </h5>
                        <div class="mt-3">
                            <button class="btn btn-warning btn-sm">
                                <a href="{{ route('todos.edit', $todo) }}" class="link-light link-underline link-underline-opacity-0">Edit</a>
                            </button>
                            <form action="{{ route('todos.destroy', $todo) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Apakah Anda Yakin Menghapus Data?');" class="btn btn-danger mt-2 btn-sm">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
