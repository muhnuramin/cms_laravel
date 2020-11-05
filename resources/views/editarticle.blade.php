@extends('layout/main')

@section('title','Praktikum Web')

@section('judul','Manage')

@section('post')
<form action="/article/update/{{$article->id}}" method="post">
    {{csrf_field()}}
    <input type="hidden" name="id" value="{{$article->id}}"></br>
    <div class="form-group">
        <label for="title">Judul</label>
        <input type="text" class="form-control" required="required" name="title" placeholder="judul"
            value="{{$article->title}}"><br>
    </div>
    <div class="form-group">
        <label for="author">Author</label>
        <input type="text" class="form-control" required="required" name="author" placeholder="author"
            value="{{$article->author}}"><br>
    </div>
    <div class="form-group">
        <label for="imageurl">Feature Image</label>
        <input type="text" class="form-control" required="required" name="imageurl" placeholder="imageurl"
            value="{{$article->imageurl}}"><br>
    </div>
    <div class="form-group">
        <label for="content">Content</label>
        <textarea class="form-control" cols="79" rows="30" required="required" name="content" placeholder="content"
            name="content">{{$article->content}}</textarea>
    </div>

    <button type="submit" name="add" class="btn btn-primary float-right">Ubah Data</button>
</form>
</form>
@endsection
