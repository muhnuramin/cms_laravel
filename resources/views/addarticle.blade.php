@extends('layout/main')

@section('title','Praktikum Web')

@section('judul','Manage')

@section('post')
<form action="/add/create" method="post"
enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="title">Judul</label>
        <input type="text" class="form-control" required="required" name="title" placeholder="judul"><br>
    </div>
    <div class="form-group">
        <label for="author">Author</label>
        <input type="text" class="form-control" required="required" name="author" placeholder="author"
        ><br>
    </div>
    <div class="form-group">
        <label for="imageurl">Feature Image</label>
        <input type="file" class="form-control" required="required" placeholder="imageurl"
        name="imageurl"><br>
    </div>
    <div class="form-group">
        <label for="content">Content</label>
        <textarea class="form-control" cols="79" rows="30" required="required" name="content" placeholder="content"
        ></textarea>
    </div>

    <button type="submit" name="add" class="btn btn-primary float-right">Tambah Data</button>
    <br><br>
</form>
@endsection
