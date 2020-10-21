@extends('layout/main')

@section('title','Praktikum Web')

@section('judul','Manage')

@section('post')
<div class="tambah mb-2">
<a href="/add"class="btn btn-primary">Tambah Artikel</a>
</div>

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
            <a href="article/delete/{{ $a->id }}" class="badge badge-danger">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection