<!DOCTYPE html>
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
                                <div class="logo">
                                    <img class="logo-size" src="images/logo-light.svg" alt="">
                                </div>
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

</html>