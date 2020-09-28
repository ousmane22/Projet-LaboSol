<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
  <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="PIXINVENT">
  <title>Labo Sols-Eaux-Plantes</title>
  <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png">
  <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/logo/logo-success.png">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

  <!-- BEGIN: Vendor CSS-->
  <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/vendors.min.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/charts/apexcharts.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/extensions/tether-theme-arrows.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/extensions/tether.min.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/extensions/shepherd-theme-default.css">
  <!-- END: Vendor CSS-->

  <!-- BEGIN: Theme CSS-->
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap-extended.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/colors.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/components.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/dark-layout.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/semi-dark-layout.css">

  <!-- BEGIN: Page CSS-->
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/menu/menu-types/vertical-menu.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/colors/palette-gradient.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/dashboard-analytics.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/card-analytics.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/tour/tour.css">
  <!-- END: Page CSS-->

  <link rel="stylesheet" href="{{ ('css/app.css') }}">
  <!-- BEGIN: Custom CSS-->

  <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static   menu-collapsed" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

  <!-- BEGIN: Header
  <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-light navbar-shadow">
    <div class="navbar-wrapper">
  
        @auth
        <ul class="nav navbar-nav float-right">
          <li class=nav-item"><a class="nav-link" href="#" data-toggle="dropdown">
              <div class="user-nav d-sm-flex d-none">
                <h5 class="user-name text-bold-600"> Bonjour {{ Auth::user()->name }}</h5>
            </a>
            <div class="" aria-labelledby="navbarDropdown">
              <a class="" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                <h4 class="text-danger"> {{ __('Deconnexion') }}</h4>
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </div>
      </div>
      </li>
      </ul>
      @endauth
    </div>
    </div>
    </div>
  </nav> -->



  <body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static   menu-collapsed" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-light navbar-shadow">
      <div class="navbar-wrapper">
        <div class="navbar-container content">
          <div class="navbar-collapse" id="navbar-mobile">
            <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
              <ul class="nav navbar-nav">
                <li class="nav-item mobile-menu d-xl-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"></a></li>
              </ul>

              <ul class="nav navbar-nav">
                <li class="nav-item d-none d-lg-block"><a class="nav-link bookmark-star"></i></a>
                  <div class="bookmark-input search-input">
                    <input class="form-control input" type="text" placeholder="Explore Vuexy..." tabindex="0" data-search="template-list">
                    <ul class="search-list search-list-bookmark"></ul>
                  </div>
                  <!-- select.bookmark-select-->
                  <!--   option Chat-->
                  <!--   option email-->
                  <!--   option todo-->
                  <!--   option Calendar-->
                </li>
              </ul>
            </div>
            @auth
            <ul class="nav navbar-nav float-right">
              <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                  <div class="user-nav d-sm-flex d-none"><span class="user-name text-bold-600">
                      <h4>Bonjour [{{ ucfirst(trans(Auth::user()->name)) }}]</h4>
                    </span><span class="user-status text-success">disponible</span></div>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Deconnexion') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                  </form>
                </div>
          </div>
          </li>
          </ul>
          @endauth
        </div>
      </div>
      </div>
    </nav>

    <!-- END: Header-->






    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
          <li class="nav-item mr-auto"><a class="navbar-brand ml-0" href="/">
              <div class=""><img src="../../../app-assets/images/logo/logo-success.png" width="30px" margin-left:0;></div>
              <P class="brand-text text-success mb-0">Labo SEP</P>
            </a></li>
        </ul>
      </div>
      <div class="shadow-bottom"></div>
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

          </li>
          <li class=" nav-item"><a href=""><i class="feather icon-user"></i><span class="menu-title" data-i18n="User">Gestion Client</span></a>
            <ul class="menu-content">
              <li><a href="{{ route('client.add') }}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List">Ajouter Client</span></a>
              </li>
              <li><a href="{{ route('list.client') }}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="View">Liste Clients</span></a>
              </li>
          </li>
        </ul>
        </li>



        <li class=" nav-item"><a href="#"><i class="feather icon-file"></i><span class="menu-title" data-i18n="User">Fiche Demande</span></a>
          <ul class="menu-content">
            <li><a href="{{ route('add.fiche') }}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List">Ajouter Fiche</span></a>
            </li>
            <li><a href="{{ route('list.fiche') }}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="View">Liste Fiche</span></a>
            </li>
        </li>
        </ul>
        </li>


        <li class=" nav-item"><a href="#"><i class="feather icon-filter"></i><span class="menu-title" data-i18n="User">Gestion Echantillon</span></a>
          <ul class="menu-content">
            <li><a href="{{ route('add.echantillon') }}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List">Ajouter Echantillon</span></a>
            </li>
            <li><a href="{{ route('list.echantillon') }}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="View">Liste Echantillon</span></a>
            </li>
        </li>
        </ul>
        </li>

        <li class=" nav-item"><a href="#"><i class="feather icon-printer"></i><span class="menu-title" data-i18n="User">Gestion Facturation</span></a>
          <ul class="menu-content">
            <li><a href="{{ route('factures') }}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List">Générer une facture</span></a>
            </li>
        </li>
        </ul>
        </li>
        </ul>
      </div>
    </div>
    <!-- END: Main Menu-->

    <div class="container">
      @yield('content')
    </div>

    @include('flashy::message')




    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
      <p class="clearfix blue-grey lighten-2 mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; <script type="text/javascript">
            document.write(new Date().getFullYear());
          </script><a class="text-bold-800 grey darken-2 text-success" href="" target="_blank">Laboratoire central Eaux-Sols-Plantes de Bambey</a>All rights Reserved</span>

      </p>
    </footer>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="../../../app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->
    <script src="//code.jquery.com/jquery.js"></script>

    <!-- BEGIN: Page Vendor JS-->
    <script src="../../../app-assets/vendors/js/charts/apexcharts.min.js"></script>
    <script src="../../../app-assets/vendors/js/extensions/tether.min.js"></script>
    <script src="../../../app-assets/vendors/js/extensions/shepherd.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../../../app-assets/js/core/app-menu.js"></script>
    <script src="../../../app-assets/js/core/app.js"></script>
    <script src="../../../app-assets/js/scripts/components.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../../../app-assets/js/scripts/pages/dashboard-analytics.js"></script>
    <!-- END: Page JS-->


  </body>
  <!-- END: Body-->

</html>