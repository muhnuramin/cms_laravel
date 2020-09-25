@extends('layout/main')

@section('title','Praktikum Web')

@section('judul','Home')

@section('post')
<!-- Blog Post -->
@foreach($articles as $ar)
<div class="card mb-4">
          <img class="card-img-top" src="{{$ar->imageurl}}" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">{{$ar->title}}</h2>
            <p class="card-text">{{$ar->content}}</p>
            <a href="#" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
          {{$ar->created_at}}
            <a href="#">Muhammad Nur Amin</a>
          </div>
        </div>
@endforeach
@endsection

@section('tes')
<ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <a class="page-link" href="#">&larr; Older</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="#">Newer &rarr;</a>
          </li>
        </ul>

@endsection