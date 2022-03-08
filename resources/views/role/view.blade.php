@extends('layouts.master')

@section('title', 'Edit Role')

@section('content')

<div class="container mt-3">
    <h2>Edit form</h2>
    <form action="/role/update" method="post">
        {{ csrf_field() }}

        <input type="hidden" name="id" value="{{ $role->role_id }}">

        <div class="mb-3 mt-3">
            <label for="name">Name:</label>
            <input type="text" value="{{ $role->name }}" class="form-control" id="name" placeholder="Enter name" name="name" required>
        </div>
        <div class="mb-3 mt-3">
            <label for="code">Code:</label>
            <input type="text" value="{{ $role->code }}" class="form-control" id="code" placeholder="Enter code" name="code" required>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>

        <a href="/role" class="btn btn-secondary"> Kembali</a>
    </form>
</div>

@endsection