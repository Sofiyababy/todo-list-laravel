@extends('layout')

@section('content')
<div class="container mt-5">
    <h2>Add Details</h2>
    <form action="{{ route('crud_app_db.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group mt-3">
            <label for="age">age</label>
            <input type="text" name="age" class="form-control" required>
        </div>
        <div class="form-group mt-3">
            <label for="email">Email</label>
            <input type="text" name="email" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success mt-3">Save</button>
    </form>
</div>
@endsection
