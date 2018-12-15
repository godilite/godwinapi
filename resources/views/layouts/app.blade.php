<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <script src='https://api.mapbox.com/mapbox-gl-js/v0.51.0/mapbox-gl.js'></script>   
<link href='https://api.mapbox.com/mapbox-gl-js/v0.51.0/mapbox-gl.css' rel='stylesheet' />

    <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="{{ asset('css/style.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="{{ asset('../assets/css/material-dashboard.css?v=2.1.0') }}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
</head>
<body class="">
            <div class="wrapper ">
              <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
                <!--
                  Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"
          
                  Tip 2: you can also add an image using data-image tag
              -->@guest
                @else
                <div class="logo">
                  <a href="/" class="simple-text logo-normal">
                    Field Survey
                  </a>
                </div>
                
                <div class="sidebar-wrapper">
                  <ul class="nav">
                        @if (request()->route()->getName()=='dashboard')
                        <li class="nav-item active">
                                <a class="nav-link active" href="{{ route('dashboard') }}">
                                  <i class="material-icons">dashboard</i>
                                  <p>Dashboard</p>
                                </a>
                            </li>     
                        @else
                        <li class="nav-item">
                                <a class="nav-link" href="{{ route('dashboard') }}">
                                  <i class="material-icons">dashboard</i>
                                  <p>Dashboard</p>
                                </a>
                              </li>
                        
                        @endif
                        
                    @if (request()->route()->getName()=='report.add')    
                    <li class="nav-item active">
                     <a class="nav-link" href="{{ route('report.add') }}">
                       <i class="material-icons">library_books</i>
                       <p>Create Report</p>
                     </a>
                   </li>
                   @else
                   <li class="nav-item ">
                           <a class="nav-link" href="{{ route('report.add') }}">
                             <i class="material-icons">library_books</i>
                             <p>Create Report</p>
                           </a>
                         </li>
                   @endif
                       
                    @if (request()->route()->getName()=='report.show')    
                     <li class="nav-item active">
                      <a class="nav-link" href="{{ route('report.show') }}">
                        <i class="material-icons">content_paste</i>
                        <p>Reports</p>
                      </a>
                    </li>
                    @else
                    <li class="nav-item ">
                            <a class="nav-link" href="{{ route('report.show') }}">
                              <i class="material-icons">content_paste</i>
                              <p>Reports</p>
                            </a>
                          </li>
                    @endif
                 <!--  
                    @if (request()->route()->getName()=='profile')    
                     <li class="nav-item active">
                      <a class="nav-link" href="">
                        <i class="material-icons">person</i>
                        <p>Reports</p>
                      </a>
                    </li>
                    @else
                    <li class="nav-item ">
                            <a class="nav-link" href="">
                              <i class="material-icons">person</i>
                              <p>Profile</p>
                            </a>
                          </li>
                    @endif
                    <li class="nav-item ">
                      <a class="nav-link" href="">
                        <i class="material-icons">location_ons</i>
                        <p>Site Locations</p>
                      </a>
                    </li>
                -->
                <!--
                    <li class="nav-item active-pro ">
                          <a class="nav-link" href="./upgrade.html">
                              <i class="material-icons">unarchive</i>
                              <p>Download</p>
                          </a>
                      </li>
                    -->
                  </ul>
                </div>
             @endguest </div>
              <div class="main-panel">
                <!-- Navbar -->
                <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
                  <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="navbar-toggler-icon icon-bar"></span>
                      <span class="navbar-toggler-icon icon-bar"></span>
                      <span class="navbar-toggler-icon icon-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end">
                      <form class="navbar-form">
                        <div class="input-group no-border">
                          <input type="text" value="" class="form-control" placeholder="Search...">
                          <button type="submit" class="btn btn-white btn-round btn-just-icon">
                            <i class="material-icons">search</i>
                            <div class="ripple-container"></div>
                          </button>
                        </div>
                      </form>
                      <ul class="navbar-nav">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                      </ul>
                    </div>
                  </div>
                </nav>
       
            <br/>
            @yield('content')
</body>
</html>
