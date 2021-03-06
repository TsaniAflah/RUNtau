@extends('template')
@section('title', 'Help')

@section('konten')

<body style="background:linear-gradient(20deg, #33CCFF, #9966FF)" ;>
    <div class="container" style="padding-left: 50px; padding-top:50px; padding-bottom:50px">
        <div class="row" ;>
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="/img/1.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">𝐅𝐨𝐨𝐝</h5>
                        <p class="card-text"> Curious to see tempting regional food?</p>
                        <a href="/runtaufood" class="btn btn-primary" style="background-color: #3FA796;">Open</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="/img/2.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">𝐌𝐨𝐧𝐞𝐲 𝐂𝐡𝐚𝐧𝐠𝐞𝐫</h5>
                        <p class="card-text">
                            Convert your money to Rupiah so it can be used!</p>
                        <a href="/runtaumoney" class="btn btn-primary" style="background-color: #3FA796;">Open</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="/img/3.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">𝐋𝐨𝐜𝐚𝐭𝐢𝐨𝐧</h5>
                        <p class="card-text">
                            You need to take a rest? check out some vacation spots.</p>
                        <a href="/runtauplace" class="btn btn-primary" style="background-color: #3FA796;">Open</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<body style="background:linear-gradient(20deg, #33CCFF, #9966FF)" ;>
    <div class="container" style="padding-left: 220px; padding-top:0px; padding-bottom:50px">
        <div class="row" ;>
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="/img/4.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">𝐇𝐞𝐚𝐥𝐭𝐡</h5>
                        <p class="card-text">
                            Health is number 1, look where are the health services?</p>
                        <a href="/runtauhealth" class="btn btn-primary" style="background-color: #3FA796;">Open</a>
                    </div>
                </div>
            </div>
            <div class="col-4" style="padding-left: 80px;">
                <div class="card" style="width: 18rem;">
                    <img src="/img/5.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">𝐆𝐫𝐨𝐜𝐞𝐫𝐲 𝐒𝐭𝐨𝐫𝐞</h5>
                        <p class="card-text">Shirt? food? out of stock? calm down we can help.</p>
                        <a href="/runtaustore" class="btn btn-primary" style="background-color: #3FA796;">Open</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
@endsection