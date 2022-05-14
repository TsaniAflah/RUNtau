@extends('template')
@section('title', 'Home')
@section('judul','')

@section('konten')

<body background="./img/Landing.png" width="100%";>
  <!--Tagline-->
  <h1 style="text-align:center; font-family:arial; font-size:25px; color:#533E85">"𝕐𝕆𝕌ℝ 𝔽𝕀ℝ𝕊𝕋 ℂ𝕆𝕃𝕃𝔼𝔾𝔼 𝔽ℝ𝕀𝔼ℕ𝔻"</h1>
  <!--Membuat carousel-->
  <style>
    .carousel-item {
      height: 25rem;
      background: black;
      position: relative;
    }

    .container {
      position: absolute;
      bottom: 5;
      left: 5;
      right: 5;
      padding-bottom: 40px;
    }

    .overlay-image {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      top: 0;
      background-position: center;
      background-size: cover;
      opacity: 0.97;
    }
  </style>

  <div id="myCarousel" class="carousel padding py-5 slide col-lg-8 offset-lg-2" data-bs-ride="carousel">
    <ol class="carousel-indicators">
      <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
      <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
      <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="overlay-image" style="background-image:url(./img/c1.png);"></div>
        <div class="container">
        </div>
      </div>
      <div class="carousel-item" style="color:white">
        <div class="overlay-image" style="background-image:url(./img/c2.png); "></div>
        <div class="container">
        </div>
      </div>
      <div class="carousel-item" style="color:white">
        <div class="overlay-image" style="background-image:url(./img/c3.png); "></div>
        <div class="container">
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <!-- end of carousel -->
  <p>
  <p>
    @guest
  <div style="background-image:url(./img/Landing2.png); height:400px; width:100%">
    <img src="/img/Person1.png" style="float:left; padding-left:110px" ; height="400" ;>
    <p style="padding-top: 250px;">
      <a href="/register" style="padding:7px; text-align:center;" ;>
        <button style="background-color: white; color:black; padding:5px 15px 5px 15px;"><b>SignUp</b></button>
      </a>
      <a href="/login" style="padding-left: 10 px; text-align:center;">
        <button style="background-color: white; color:black; padding:5px 15px 5px 15px;"><b>Login</b></button>
      </a>
    </p>
  </div>
  @else
  <img src="/img/Registered.png" width="100%">
  @endguest
  </p>
  </p>
</body>
@endsection