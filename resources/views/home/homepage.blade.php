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
    .Post-picture img{
      width: 500px;
      height: auto;
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
    <a class="navbar-brand" href="#">Your Logo</a>
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
        @if (Route::has('login'))
        <li class="nav-item">
          
          @auth
              <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
          @else
          <a href="{{ route('login') }}" class="nav-link">Log in</a>
          </li>
          <li class="nav-item">
          @if (Route::has('register'))
              <a href="{{ route('register') }}" class="nav-link">Register</a>
          @endif
          @endauth
        </li>
        @endif
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
          <img src="{{ asset('Front/images/post_image/'.$post['post_image']) }}">
          <h5 class="mb-0">{{ Auth::guard('admin')->user()->name}}</h5>
          
        </div>
        <p>{{$post['post_title']}}</p>
        <div class="Post-picture">
        <img src="{{ asset('Front/images/post_image/'.$post['post_image']) }}">
        </div>
        <p>{{$post['post_summary']}}</p>
        <hr>
        <div class="d-flex justify-content-between">
          <button class="btn btn-primary">Like</button>
          <button class="btn btn-secondary">Comment</button>
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
