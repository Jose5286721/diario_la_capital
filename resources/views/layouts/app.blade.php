<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/adminlte.min.js') }}" defer></script>
    <script src="{{ asset('js/summernote-bs4.min.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="//unpkg.com/leaflet/dist/leaflet.css" />
    <link rel="stylesheet" href="{{asset('css/summernote.css')}}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/adminlte.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/icheck-bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @guest
        @else                            
                        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                            <!-- Left navbar links -->
                            <ul class="navbar-nav">
                              <li class="nav-item">
                                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                              </li>
                              <li class="nav-item d-none d-sm-inline-block">
                                <a href="index3.html" class="nav-link">Home</a>
                              </li>
                              <li class="nav-item d-none d-sm-inline-block">
                                <a href="#" class="nav-link">Contact</a>
                              </li>
                            </ul>
                        
                            <!-- SEARCH FORM -->
                            <form class="form-inline ml-3">
                              <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                                <div class="input-group-append">
                                  <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                  </button>
                                </div>
                              </div>
                            </form>
                        
                            <!-- Right navbar links -->
                            <ul class="navbar-nav ml-auto">
                              <!-- Messages Dropdown Menu -->
                              <li class="nav-item dropdown">
                                <a class="nav-link" data-toggle="dropdown" href="#">
                                  <i class="far fa-comments"></i>
                                  <span class="badge badge-danger navbar-badge">3</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                                  <a href="#" class="dropdown-item">
                                    <!-- Message Start -->
                                    <div class="media">
                                      <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                                      <div class="media-body">
                                        <h3 class="dropdown-item-title">
                                          Brad Diesel
                                          <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                        </h3>
                                        <p class="text-sm">Call me whenever you can...</p>
                                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                      </div>
                                    </div>
                                    <!-- Message End -->
                                  </a>
                                  <div class="dropdown-divider"></div>
                                  <a href="#" class="dropdown-item">
                                    <!-- Message Start -->
                                    <div class="media">
                                      <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                      <div class="media-body">
                                        <h3 class="dropdown-item-title">
                                          John Pierce
                                          <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                        </h3>
                                        <p class="text-sm">I got your message bro</p>
                                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                      </div>
                                    </div>
                                    <!-- Message End -->
                                  </a>
                                  <div class="dropdown-divider"></div>
                                  <a href="#" class="dropdown-item">
                                    <!-- Message Start -->
                                    <div class="media">
                                      <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                      <div class="media-body">
                                        <h3 class="dropdown-item-title">
                                          Nora Silvester
                                          <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                        </h3>
                                        <p class="text-sm">The subject goes here</p>
                                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                      </div>
                                    </div>
                                    <!-- Message End -->
                                  </a>
                                  <div class="dropdown-divider"></div>
                                  <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                                </div>
                              </li>
                              <!-- Notifications Dropdown Menu -->
                              <li class="nav-item dropdown">
                                <a class="nav-link" data-toggle="dropdown" href="#">
                                  <i class="far fa-bell"></i>
                                  <span class="badge badge-warning navbar-badge">15</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                                  <span class="dropdown-header">15 Notifications</span>
                                  <div class="dropdown-divider"></div>
                                  <a href="#" class="dropdown-item">
                                    <i class="fas fa-envelope mr-2"></i> 4 new messages
                                    <span class="float-right text-muted text-sm">3 mins</span>
                                  </a>
                                  <div class="dropdown-divider"></div>
                                  <a href="#" class="dropdown-item">
                                    <i class="fas fa-users mr-2"></i> 8 friend requests
                                    <span class="float-right text-muted text-sm">12 hours</span>
                                  </a>
                                  <div class="dropdown-divider"></div>
                                  <a href="#" class="dropdown-item">
                                    <i class="fas fa-file mr-2"></i> 3 new reports
                                    <span class="float-right text-muted text-sm">2 days</span>
                                  </a>
                                  <div class="dropdown-divider"></div>
                                  <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                                </div>
                              </li>
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
                            </ul>
                          </nav>
                          <!-- /.navbar -->
                        
                          <!-- Main Sidebar Container -->
                          <aside class="main-sidebar sidebar-dark-primary elevation-4">
                            <!-- Brand Logo -->
                            <a href="index3.html" class="brand-link">
                              <img src="{{asset('storage/img/admin.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                                   style="opacity: .8">
                              <span class="brand-text font-weight-light">Admin</span>
                            </a>
                        
                            <!-- Sidebar -->
                            <div class="sidebar">
                              <!-- Sidebar user panel (optional) -->
                              <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                                <div class="image">
                                  <img src="{{asset('storage/img/user1.jpg')}}" class="img-circle elevation-2" alt="User Image">
                                </div>
                                <div class="info">
                                  <a href="#" class="d-block">Jose Ascurra</a>
                                </div>
                              </div>
                        
                              <!-- Sidebar Menu -->
                              <nav class="mt-2">
                                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                                  <!-- Add icons to the links using the .nav-icon class
                                       with font-awesome or any other icon font library -->
                                  <li class="nav-item ">
                                    <a href="#" class="nav-link active">
                                      <i class="nav-icon fas fa-tachometer-alt"></i>
                                      <p>
                                        Dashboard
                                      </p>
                                    </a>
                                  </li>
                                  <li class="nav-item">
                                    <a href="#" class="nav-link">
                                      <i class="nav-icon fas fa-th"></i>
                                      <p>
                                        Simple Link
                                      </p>
                                    </a>
                                  </li>
                                </ul>
                              </nav>
                              <!-- /.sidebar-menu -->
                            </div>
                            <!-- /.sidebar -->
                          </aside>
                        
        @endguest

        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>
