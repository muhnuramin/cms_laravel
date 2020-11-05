@extends('layout/main')

@section('title','Praktikum Web')

@section('judul','Manage')

@section('post')
<form action="/user/update/{{$user->id}}" method="post">
    {{csrf_field()}}
    <input type="hidden" name="id" value="{{$user->id}}"></br>
    <div class="form-group">
        <label for="name">Nama</label>
        <input type="text" class="form-control" required="required" name="name" placeholder="judul" name="name"
        value="{{$user->name}}"><br>
    </div>
    <div class="form-group">
        <label for="email">email</label>
        <input type="text" class="form-control" required="required" name="email" placeholder="email"name="email"
        value="{{$user->email}}"><br>
    </div>
    <div class="form-group">
        <label for="password">password</label>
        <input type="password" class="form-control" required="required" name="password" placeholder="password"name="password"
        value="{{$user->password}}"><br>
    </div>
    <div class="form-group">
        <label for="roles">roles</label>
        <input type="text" class="form-control" required="required" name="roles" placeholder="roles"name="roles"
        value="{{$user->roles}}"><br>
    </div>
    <button type="submit" name="add" class="btn btn-primary float-right">Ubah Data</button>
    <br><br>
</form>
@endsection
