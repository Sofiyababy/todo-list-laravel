@extends('layout')

@section('content')
<div class="container mt-5">
    <h2>Name : {{ $crud_app_db->name }}</h2>
    <p>Age : {{ $crud_app_db->age }}</p>
    <p>Email : {{ $crud_app_db->email }}</p>
    <a href="{{ route('crud_app_db.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
