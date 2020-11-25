@extends('layout/main')

@section('title','Praktikum Web')

@section('judul','Manage')

@section('post')
<form action="/user/create" method="post"
enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name">Nama</label>
        <input type="text" class="form-control" required="required" placeholder="judul" name="name"><br>
    </div>
    <div class="form-group">
        <label for="image">Nama</label>
        <input type="file" class="form-control" required="required"  placeholder="image" name="image"><br>
    </div>
    <div class="form-group">
        <label for="email">email</label>
        <input type="text" class="form-control" required="required"  placeholder="email"name="email"><br>
    </div>
    <div class="form-group">
        <label for="password">password</label>
        <input type="password" class="form-control" required="required" name="password" placeholder="password"
            name="password"><br>
    </div>
    <div class="form-group">
        <label for="roles">roles</label>
        <input type="text" class="form-control" required="required" placeholder="roles"name="roles"><br>
    </div>
    <button type="submit" name="add" class="btn btn-primary float-right">Tambah Data</button>
    <br><br>
</form>
@endsection
