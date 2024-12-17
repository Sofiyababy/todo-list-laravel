@extends('layout')

@section('content')
<div class="container mt-5">
    <h2>{{ $crud_app_db->name }}</h2>
    <p>{{ $crud_app_db->age }}</p>
    <p>{{ $crud_app_db->email }}</p>
    <a href="{{ route('crud_app_db.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
