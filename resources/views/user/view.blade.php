@extends('layouts.master')

@section('title', 'Edit User')

@section('content')

<div class="container mt-3">
    <h2>Edit form</h2>
    <form action="/user/update" method="post">
        {{ csrf_field() }}

        <input type="hidden" name="id" value="{{ $user->user_id }}">

        <div class="mb-3 mt-3">
            <label for="name">Name:</label>
            <input type="text" value="{{ $user->name }}" class="form-control" id="name" placeholder="Enter name" name="name" required>
        </div>
        <div class="mb-3 mt-3">
            <label for="email">Email:</label>
            <input type="email" value="{{ $user->email }}" class="form-control" id="email" placeholder="Enter email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="password">Password:</label>
            <input type="password" value="{{ $user->password }}" class="form-control" id="password" placeholder="Enter password" name="password" required>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>

        <a href="/user" class="btn btn-secondary"> Kembali</a>
    </form>
</div>

@endsection