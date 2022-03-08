@extends('layouts.master')

@section('title', 'Role')

@section('content')

<div class="container mt-3">
    <a href="/role/add" class="btn btn-primary mb-2"> Tambah Role</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>                
                <th>Code</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($roles as $role)
            <tr>
                <td>{{ $role->name }}</td>
                <td>{{ $role->code }}</td>
                <td>
                    <a href="/role/view/{{ $role->role_id }}">Edit</a>
                    |
                    <a href="/role/delete/{{ $role->role_id }}">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection