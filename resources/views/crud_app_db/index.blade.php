@extends('layout')

@section('content')
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Registration details</h2>
        <a href="{{ route('crud_app_db.create') }}" class="btn btn-primary">Add Info</a>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">{{ $message }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($crud_app_db as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->name }}</td>
                    <td>
                        <a href="{{ route('crud_app_db.show', $post) }}" class="btn btn-info">View</a>
                        <a href="{{ route('crud_app_db.edit', $post) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('crud_app_db.destroy', $post) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
