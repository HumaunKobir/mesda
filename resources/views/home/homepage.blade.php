<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MESDA</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
     /* Custom CSS can be added here */
     .navbar {
      background-color: #343a40; /* Navbar background color */
    }
    .logo-img img{
      width:50px;
      height:auto;
      border-redius: 50%;
    }
    .navbar-brand {
      color: #fff; /* Navbar brand color */
    }
    .navbar-nav .nav-link {
      color: #fff; /* Navbar links color */
    }
    /* Custom CSS can be added here */
    .post {
      border: 1px solid #ddd;
      margin-bottom: 20px;
      padding: 15px;
      border-radius: 10px;
    }
    .post-header {
      display: flex;
      align-items: center;
      margin-bottom: 10px;
    }
    .post-picture img{
      width: 100%;
      height: auto;
      border-radius: 5px;
      margin-right: 10px;
    }
    .post-header img {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      margin-right: 10px;
    }
  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container">
    <a class="navbar-brand logo-img" href="#"><img src="{{url('front/image/logo_eng.png')}}" alt=""> MESDA</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
     
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('register') }}">Register</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container mt-5">
  <div class="row justify-content-center">
    @foreach($posts as $post)
    <div class="col-md-8">
      <!-- Post -->
      <div class="post">
        <div class="post-header">
          <img src="{{ asset('front/image/logo_eng.png') }}">
          <h5 class="mb-0">MESDA</h5>
          
        </div>
        <p>{{$post['post_title']}}</p>
        <div class="post-picture">
        <img src="{{ asset('Front/images/post_image/'.$post['post_image']) }}">
        </div>
        <p>{{$post['post_summary']}}</p>
        <hr>
        <div class="d-flex justify-content-between">
          @if(Auth::check())
          <a href="{{url('user-pay')}}"><button class="btn btn-primary">PAY NOW</button></a>
          @else
          <a href="{{url('event-register')}}"><button class="btn btn-info">PAY NOW</button></a>
          @endif
          <button class="btn btn-danger">Share</button>
        </div>
      </div>
      <!-- End Post -->
    </div>
    @endforeach
  </div>
</div>

</body>
</html>
