@extends('layout/main')

@section('title','Praktikum Web')

@section('slide')
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 " src="https://alterrasoft.com/wp-content/uploads/2019/05/backend-for-article-2.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://blog.templatetoaster.com/wp-content/uploads/2018/09/Best-PHP-Frameworks-Facebook.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://fiverr-res.cloudinary.com/images/q_auto,f_auto/gigs/105047260/original/47565781566a245b138e5b77ad9aee6785f3d23f/be-your-web-developer-in-php-wordpress-html-or-javascript.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
@endsection

@section('post')
<!-- Blog Post -->
@foreach($articles as $ar)
<div class="card mb-4">
          <img class="card-img-top ukuran" src="{{$ar->imageurl}}" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title"><b>{{$ar->title}}</b></h2>
            <p class="card-text">{{$ar->content}}</p>
            <a href="/article/{{$ar->id}}" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
          {{$ar->created_at}}
            <a href="#">{{$ar->author}}</a>
          </div>
        </div>
@endforeach
@endsection

@section('tes')
<ul class="pagination justify-content-center mb-4">
          {{$articles->links()}}
        </ul>

@endsection
<!-- {{$articles->links()}} -->