@extends('template')
@section('title', 'Register')
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
        <br><br>
        <div class="modal-dialog" role="document">
            <div class="modal-content rounded-5 shadow">

                <div class="modal-body p-5 pt-0">
                    <main class="form-registration">
                        <h1 class="h3 mb-3 fw-normal text-center">Registration</h1>
                        <form action="/register" method="post">
                            @csrf
                            <div class="form-floating">
                                <input type="text" name="firstname" class="form-control @error('firstname') is-invalid @enderror" id="firstname" placeholder="First name" required value="{{old('firstname')}}">
                                <label for="firstname">First Name</label>
                                @error('firstname')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="form-floating">
                                <input type="text" name="lastname" class="form-control @error('lastname') is-invalid @enderror" id="lastname" placeholder="Last name" required value="{{old('lastname')}}">
                                <label for="lastname">Last Name</label>
                                @error('lastname')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="form-floating">
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{old('email')}}">
                                <label for="email">Email address</label>
                                @error('email')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="form-floating">
                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password">
                                <label for="password">Password</label>
                                @error('password')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror

                                <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Register</button>
                        </form>
                        <small class="d-block text-center">Already registered? <a href="/login"> Login</a></small>
                    </main>
                </div>
            </div>
        </div>

        <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</body>

</html>

@endsection