@extends('layout/main')
@section('title','Praktikum Web')
<div class="menuManage">
    <a href="/manage">Manage Artikel</a>
    <a href="/manage/user">Manage User</a>
</div>
@section('judul','Manage User')
@section('post')

<div class="tambah mb-2">
    <a href="/user/add" class="btn btn-primary">Tambah User</a>
</div>

<table class="table table-bordered table-striped ">
    <thead class="thead-dark">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>email</th>
            <th>Tanggal</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($User as $u)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$u->name}}</td>
            <td>{{$u->email}}</td>
            <td>{{$u->updated_at}}</td>
            <td><a href="/user/edit/{{$u->id}}" class="badge badge-warning">Edit</a>
                <a href="/user/delete/{{$u->id}}" class="badge badge-danger">Delete</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
