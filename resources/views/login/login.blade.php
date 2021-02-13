<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type= "text/css" href="{{ asset('css/style.css') }}">
    
    <title>Login</title>
</head>

<body class="mt-2">
    <div class="container-fluid ml-0">
        <div class="row">
            <div class="col-md-10">
                <img src="{{ asset('img/loka.svg') }}" alt="" class="img-fluid ml-2" width="40%">
            </div>
        </div>
        <div class="row mt-2 mb-n2">
            <div class="col text-center">
                <h3 class="tulisansistem">Sistem Informasi Kelautan dan Perikanan</h3>
            </div>
        </div>
        <div class="row mt-0">
            <div class="col-md-8 col-sm-8">
                <img src="img/drone.jpg" alt="SIKP" class="img-fluid ml-0" width="80%">
            </div>

            <div class="col-md-4 col-sm-4 mt-5">
                <h3 class="label1 mt-5 mb-n3 ml-3">Selamat Datang</h3>
                <form action="/Dashboards" method="POST" class="col-auto mt-4 mr-2">
                    @csrf
                    <div class="form-group">
                        <label for="Username" class="label1">USERNAME</label>
                        <input type="text" name="Username" id="Username" class="form-control rounded-pill" placeholder="Masukan Username" aria-describedby="Username">
                        <small id="MasukanUsername" class="text-muted">Masukan Username</small>
                    </div>
                    <div class="form-group form-fluid">
                        <label for="password" class="label1">Password</label>
                        <input type="password" name="password" id="password" class="form-control rounded-pill" placeholder="Masukan Password" aria-describedby="MasukanPassword">
                        <small id="MasukanPassword" class="text-muted">Masukan Password</small>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>
        <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>