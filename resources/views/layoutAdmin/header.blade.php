<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Centre de Formation</title>
      <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('assets/vendors/feather/feather.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendors/ti-icons/css/themify-icons.css')}}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{asset('assets/vendors/ti-icons/css/themify-icons.css')}}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('assets/css/vertical-layout-light/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendors/mdi/css/materialdesignicons.min.css')}}">
</head>
<body>

          <div class="container-scroller">
            <!-- partial:partials/_navbar.html -->
            <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
              <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo mr-5" href="index.html"><img src="images/logoo.png" class="mr-2" alt="logo"/></a>
                <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logoo.webp"  /></a>
              </div>
              <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                  <span class="icon-menu"></span>
                </button>
                <ul class="navbar-nav navbar-nav-right">
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                  <span class="icon-menu"></span>
                </button>
              </div>
            </nav>
            <!-- partial -->
            <div class="container-fluid page-body-wrapper">
              <!-- partial:partials/_settings-panel.html -->
              <div class="theme-setting-wrapper">
                <div id="settings-trigger"><i class="ti-settings"></i></div>
                <div id="theme-settings" class="settings-panel">
                  <i class="settings-close ti-close"></i>
                  <p class="settings-heading">SIDEBAR SKINS</p>
                  <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
                  <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
                  <p class="settings-heading mt-2">HEADER SKINS</p>
                  <div class="color-tiles mx-0 px-4">
                    <div class="tiles success"></div>
                    <div class="tiles warning"></div>
                    <div class="tiles danger"></div>
                    <div class="tiles info"></div>
                    <div class="tiles dark"></div>
                    <div class="tiles default"></div>
                  </div>
                </div>
     
              </div>
              <!-- partial -->
              <!-- partial:partials/_sidebar.html -->
              <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('home')}}">
                      <i class="icon-grid menu-icon"></i>
                      <span class="menu-title">Admin Dashboard</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                      <i class="icon-grid menu-icon"></i>
                      <span class="menu-title"> Gestion des  Clients  </span>
                      <i class="menu-arrow ml-3"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                      <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a   href="{{route('client.add')}}" class="nav-link">Ajouter Client</a></li>
                        <li class="nav-item"> <a class="nav-link"  href="{{route('client.list')}}">List des Clients</a></li>
    
                      </ul>
                      
                    </div>
                  </li>
    
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
                      <i class="icon-grid menu-icon"></i>
                      <span class="menu-title">Gestion des Programmes</span>
                      <i class="menu-arrow ml-3"></i>
                    </a>
                    <div class="collapse" id="tables">
                      <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link"  href="{{route('programme.listP')}}">Programmes</a></li>
    
                      </ul>
                    </div>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
                      <i class="icon-grid menu-icon"></i>
                      <span class="menu-title">Gestion des Formations</span>
                      <i class="menu-arrow ml-3"></i>
                    </a>
                    <div class="collapse" id="form-elements">
                      <ul class="nav flex-column sub-menu">
                        <li class="nav-item"><a class="nav-link" href="{{route('formation.add')}}" >Ajouter Formation</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('formation.listF')}}">Formations</a></li>
                      </ul>
                    </div>
                  </li>
    
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#groupe" aria-expanded="false" aria-controls="groupe">
                      <i class="icon-grid menu-icon"></i>
                      <span class="menu-title">Gestion des Groupes</span>
                      <i class="menu-arrow ml-3"></i>
                    </a>
                    <div class="collapse" id="groupe">
                      <ul class="nav flex-column sub-menu">
                        <li class="nav-item"><a class="nav-link" href="{{route('groupe.add')}}" >Ajouter Groupe</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('groupe.listGF')}}" >Groupes</a></li>
                      </ul>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('login')}}">
                      <i class="icon-grid menu-icon"></i>
                      <span class="menu-title">{{Auth::user()->name}}</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                     
                     <i class="icon-grid menu-icon"></i>
                     <span class="menu-title">Logout</span>
                 </a>

                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                     @csrf
                 </form>
                  </li>
                 
                  
              </ul>
              </nav>
       
          <!-- partial -->
          <div class="main-panel">
            <div class="content-wrapper">
    
          
          

