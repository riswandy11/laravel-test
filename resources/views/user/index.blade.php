@extends('layouts.master')

@section('title', 'User')

@section('content')

<div class="container mt-3">
    <a href="/user/add" class="btn btn-primary mb-2"> Tambah User</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>                
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <a href="/user/view/{{ $user->user_id }}">Edit</a>
                    |
                    <a href="/user/delete/{{ $user->user_id }}">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection