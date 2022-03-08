@extends('layouts.master')

@section('title', 'Add User')

@section('content')

<div class="container mt-3">
    <h2>Input form</h2>
    <form action="/user/store" method="post">
        {{ csrf_field() }}
        <div class="mb-3 mt-3">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
        </div>
        <div class="mb-3 mt-3">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>

        <a href="/user" class="btn btn-secondary"> Kembali</a>
    </form>
</div>

@endsection