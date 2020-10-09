<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Labo Login</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('logins/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('logins/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('logins/css/iofrm-style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('logins/css/iofrm-theme8.css') }}">
</head>

<body>
    <div class="form-body" class="container-fluid">
        <div class="website-logo">
            <a href="index.html">
               
            </a>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <h3 class="px-2 text-success ">Laboratoire Sols-Eaux-Plantes ISRA.</h3>
                    <img src="{{ asset('logins/img/plantes-eau-calcaire.png') }}" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <div class="website-logo-inside">
                            <a href="index.html">
    
                            </a>
                        </div>
                        <div class="page-links">
                            <a class="active">Login</a>
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <input class="form-control" type="email" name="email" placeholder="E-mail Address" required>
                                @error('email')
                                <span class="text-danger">
                                    <strong class="text-danger">{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input class="form-control" type="password" name="password" placeholder="Password" required>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong class="text-danger">{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Se connecter</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="{{ asset('logins/js/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('logins/js/popper.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('logins/js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('logins/js/main.js') }}"></script>
</body>

</html> -->


<!doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Labo Login</title>

    <style>
        body {
            background-color: #F0F2F5;
        }

        .form {
            margin-top: 100px;
        }

        .card {
            margin-top: 50px;
        }

        .btn {
            padding: 10px;
        }
    </style>
</head>

<body>
    <div class="row container form">
        <div class="col-md-7">
            <h2 class="text-success text-center">Laboratoire</h2>
            <h5 class="text-success text-center">Sols-Eaux-Plantes</h5>
            <h5 class="text-success text-center">ISRA</h5>
        </div>
        <div class="card col-md-5 p-3">
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <input type="email" class="form-control p-4" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control p-4" id="exampleInputPassword1">
                    </div>

                    <button type="submit" class="btn btn-success  btn-block p-3.5">Connexion</button>
                </form>
            </div>
        </div>

    </div>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>