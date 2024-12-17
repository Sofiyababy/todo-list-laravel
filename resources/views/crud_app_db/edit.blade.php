@extends('layout')

@section('content')
<div class="container mt-5">
    <h2>Edit Post</h2>
    <form method="POST" action="{{ route('crud_app_db.update', $crud_app_db->id) }}">
        @csrf
        @method('PUT') <!-- Required for PUT requests -->
        
        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ $crud_app_db->name }}" required>
        
        <label for="age">Age:</label>
        <input type="number" name="age" value="{{ $crud_app_db->age }}" required>
        
        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ $crud_app_db->email }}" required>
        
        <button type="submit">Update</button>
    </form>
</div>
@endsection
