@extends('layout/main')

@section('title','Praktikum Web')

@section('judul','Manage')

@section('post')
<form action="/user/update/{{$user->id}}" method="post"
enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{$user->id}}"></br>
    <div class="form-group">
        <label for="name">Nama</label>
        <input type="text" class="form-control" required="required" name="name" placeholder="judul" name="name"
            value="{{$user->name}}"><br>
    </div>
    <div class="form-group">
        <label for="email">email</label>
        <input type="text" class="form-control" required="required" name="email" placeholder="email" name="email"
            value="{{$user->email}}"><br>
    </div>
    <div class="form-group">
        <label for="password">password</label>
        <input type="password" class="form-control" required="required" name="password" placeholder="password"
            name="password" value="{{$user->password}}"><br>
    </div>

    <div class="form-group">
        <label for="roles">Roles</label>
        <select id="roles" name="roles" class="form-control">
            <option value="User">User</option>
            <option value="Administrator">Administrator</option>
        </select>
    </div>

    <div class="form-group">
        <label for="image">image</label>
        <input type="file" class="form-control" required="required" name="image" placeholder="image" name="image"
            value="{{$user->image}}"><br>
        <img width="150px" src="{{asset('storage/'.$user->image) }}">
    </div>
    <button type="submit" name="add" class="btn btn-primary float-right">Ubah Data</button>
    <br><br>
</form>
@endsection
