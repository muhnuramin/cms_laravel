@extends('layout/main')

@section('title','Praktikum Web')
<div class="menuManage">
    <tr>
        <td><a href="/">Home</a></td>
        <td><a href="/manage">Manage Artikel</a></td>
        <td><a href="/manage/user">Manage User</a></td>
        <td><a href="/pages" target="_blank">Cetak PDF</a></td>
    </tr>
</div>

@section('judul','Manage Artikel')

@section('post')

    <div class="tambah mb-2">
        <a href="/add" class="btn btn-primary">Tambah Artikel</a>
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
            <th>judul</th>
            <th>Tanggal</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($article as $a)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$a->title}}</td>
            <td>{{$a->created_at}}</td>
            <td><a href="/edit/{{ $a->id }}" class="badge badge-warning">Edit</a>
                <a href="article/delete/{{ $a->id }}" class="badge badge-danger" onclick="return confirm('Yakin Ingin menghapus Artikel???')">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
