<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>RUNtau Official!</title>
  <title>@yield('title')</title>
</head>
<!-- navigation bar -->

<body>
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #3FA796; align-items:center " ;>
    <div class=" container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto" style="font-size:20px">
          <li class="nav-item">
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
              <a class="nav-link active" href="#"> ABOUT</a>
            </b>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</body>

<h3>@yield('judul')</h3>
@yield('konten')

</html>