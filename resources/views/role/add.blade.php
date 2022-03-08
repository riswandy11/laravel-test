@extends('layouts.master')

@section('title', 'Add Role')

@section('content')

<div class="container mt-3">
    <h2>Input form</h2>
    <form action="/role/store" method="post">
        {{ csrf_field() }}
        <div class="mb-3 mt-3">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
        </div>
        <div class="mb-3 mt-3">
            <label for="code">Code:</label>
            <input type="text" class="form-control" id="code" placeholder="Enter code" name="code" required>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>

        <a href="/role" class="btn btn-secondary"> Kembali</a>
    </form>
</div>

@endsection