@extends('layout/main')
@section('title','Praktikum Web')
<div class="menuManage">
    <tr>
        <td><a href="/manage">Manage Artikel</a></td>
        <td><a href="/manage/user">Manage User</a></td>
        <td><a href="/printuser" target="_blank">Cetak PDF</a></td>
    </tr>    
</div>
@section('judul','Manage User')
@section('post')

<div class="tambah mb-2">
    <a href="/user/add" class="btn btn-primary">Tambah User</a>
</div>
    @if(session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
    @endif
<table class="table table-bordered table-striped ">
    <thead class="thead-dark">
        <tr>
            <th>No</th>
            <th>Profil</th>
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
            <td><img width="50px" width="50px"src="{{asset('storage/'.$u->image) }}" alt=""></td>
            <td>{{$u->name}}</td>
            <td>{{$u->email}}</td>
            <td>{{$u->updated_at}}</td>
            <td><a href="/user/edit/{{$u->id}}" class="badge badge-warning">Edit</a>
                <a href="/user/delete/{{$u->id}}" class="badge badge-danger" onclick="return confirm('Yakin ingin menghapus User')">Delete</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
