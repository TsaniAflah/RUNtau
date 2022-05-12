<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->

  <link rel="stylesheet" href="/css/template.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>RUNtau Official!</title>
  <title>@yield('title')</title>

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>
<!-- navigation bar -->

<body>
  <nav class="navbar navbar sticky-top navbar-expand-lg navbar-dark shadow" style="background-color: #3FA796; align-items:center; width:100%;">
    <div class=" container-fluid" ;>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto" style="font-size:20px">
          <li class="nav-item" style="padding-left:165px" ;>
            <b>
              <a class="nav-link active" href="/tampildata">ACTIVITY</a>
            </b>
          </li>
          <li class="nav-item" style="padding-right: 25px; padding-left:80px" ;>
            <b>
              <a class="nav-link active" href="/news"> NEWS</a>
            </b>
          </li>
          <a class="navbar-brand active" aria-current="page" href="/" style="padding-bottom:0px; align-items:center">
            <img src="/img/Logo.png" alt="" height="45">
          </a>
          <li class="nav-item" style="padding-right: 80px; padding-left:25px" ;>
            <b>
              <a class="nav-link active" href="/help"> HELP</a>
            </b>
          </li>
          <li class="nav-item">
            <b>
              <a class="nav-link active" href="/about"> ABOUT</a>
            </b>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto ">
          @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{auth()->user()->firstname}} {{auth()->user()->lastname}}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/home"><i class="bi bi-house-door"></i>Home</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li>
                <form action="/logout" method="post">
                  @csrf
                  <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-in-left"></i>Logout</button>
                </form>
              </li>
            </ul>
          </li>

          @else
          <br>
          <li class="nav-item">
            <a href="/register" style="color:black" class="nav-link active"></i>SignUp</a>
          </li>
          <li class="nav-item">
            <a href="/login" style="color:black" class="nav-link active"></i>Login</a>
          </li>
          @endauth

        </ul>
      </div>
    </div>
  </nav>
</body>

<h3>@yield('judul')</h3>
@yield('konten')

</html>