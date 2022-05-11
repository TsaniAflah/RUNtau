@extends('template')
@section('title', 'Login')
<!--Membuat isi input data user-->
@section('konten')
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.88.1">
  <title>Modals · Bootstrap v5.1</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/modals/">



  <!-- Bootstrap core CSS -->
  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    .rounded-5 {
      border-radius: .75rem;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="template.css" rel="stylesheet">
</head>

<body>

  <body background="https://wallpaperset.com/w/full/1/b/9/7685.jpg" ;>
    <br><br><br><br><br>
    <div class="modal-dialog" role="document">
      @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{session('success')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
      @if(session()->has('invalidlogin'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{session('invalidlogin')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
      <div class="modal-content rounded-5 shadow">
        <div class="modal-body p-5 pt-0">
          <main class="form-signin">
            <br>
            <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1></br>
            <form action="/login" method="post">
              @csrf
              <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{old('email')}}" autofocus required>
                <label for="email">Email address</label>
                @error('email')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required value="{{old('password')}}" autofocus required>
                <label for="password">Password</label>
                @error('password')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
                @enderror
              </div>

              <div class="checkbox mb-3">
                
                  <input class="form-check-input me-2" type="checkbox" name="remember" value="remember" id="remember ">
                  <label class="form-chel-label text-gray-600" for="flexCheckDefault">Remember me</label> 
                
              </div>

              <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
            </form>
          </main>
          <small class="d-block text-center">Not registered? <a href="/register"> Register Now!</a></small>
        </div>
      </div>
    </div>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

  </body>
  </body>
</html>



@endsection