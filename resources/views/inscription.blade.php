<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Centre de Formation</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/owl-carousel.css')}}">

    <link rel="stylesheet" href="{{asset('assets/animated.css')}}"/>
    

  <style>
.card-registration .select-input.form-control[readonly]:not([disabled]) {
  font-size: 1rem;
  line-height: 2.15;
  padding-left: .75em;
  padding-right: .75em;
}
.card-registration .select-arrow {
  top: 13px;
}

.gradient-custom-2 {
  /* fallback for old browsers */
  background: #f9f9f9;
}

.bg-indigo {
  background-color: #11468F;
}
@media (min-width: 992px) {
  .card-registration-2 .bg-indigo {
    border-top-right-radius: 15px;
    border-bottom-right-radius: 15px;
  }
}
@media (max-width: 991px) {
  .card-registration-2 .bg-indigo {
    border-bottom-left-radius: 15px;
    border-bottom-right-radius: 15px;
  }
}
  </style>
    
  
</head>
<body>
  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <img src="{{asset('assets/images/logoo.png')}}"  alt="Centre de formation"/>
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="{{url('/')}}">Acceuil</a></li>
                        <li><a href="{{url('/')}}#about">A propos</a></li>
                        <li><a href="{{route('inscription')}}" class="active">Espace Eleve</a></li>

                        <li class="has-sub">
                          <a href="javascript:void(0)">Services</a>
                          <ul class="sub-menu">
                              <li><a href="program-Alpha1.html">program-Alpha1</a></li>
                              <li><a href="program-Alpha2.html">program-Alpha2</a></li>
                          </ul>
                      </li>
                        <li><a href="gallerieVideos.html">Gallerie</a></li>
                        
                        <li><a href="{{url('/')}}#contact-us">Contact </a></li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>

<!-- ***** Header Area End ***** -->
  <section class="h-100 h-custom gradient-custom-2">
    <br>
    <br>
    <br>
    <br>

    <div class="container py-5 h-200">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12">
          <div class="card card-registration card-registration-2" style="border-radius: 15px;">
            <div class="card-body p-0">
              <div class="row g-0">
                <div class="col-lg-6">
                  <div class="p-5">
                    <h3 class="fw-normal mb-5" style="color: #11468F;">General Infomation</h3>
  
                    <div class="row">
                      <div class="col-md-6 mb-4 pb-2">
  
                        <div class="form-outline">
                          <label class="form-label" for="form3Examplev2">Nom</label>
                          <input type="text" id="form3Examplev2" class="form-control form-control-lg" />
                        </div>
  
                      </div>
                      <div class="col-md-6 mb-4 pb-2">
  
                        <div class="form-outline">
                          <label class="form-label" for="form3Examplev3">Prenom</label>
                          <input type="text" id="form3Examplev3" class="form-control form-control-lg" />
                        </div>
  
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6 mb-4 pb-2">
  
                        <div class="form-outline">
                          <label class="form-label" for="form3Examplev3">Date Naissance</label>
                          <input type="text" id="form3Examplev3" class="form-control form-control-lg" />
                        </div>
  
                      </div>
                      
                    </div>
  
                    <div class="mb-4 pb-2">
                      <div class="form-outline">
                        <label class="form-label" for="form3Examplev4">TypeRDV</label>
                        <input type="text" id="form3Examplev4" class="form-control form-control-lg" />

                      </div>
                    </div>
                    <div class="mb-4 pb-2">
                      <div class="form-outline">
                        <label class="form-label" for="form3Examplev4">Formation</label>
                        <input type="text" id="form3Examplev4" class="form-control form-control-lg" />

                      </div>
                    </div>
  
                  </div>
                </div>
                <div class="col-lg-6 bg-indigo text-white">
                  <div class="p-5">
                    <h3 class="fw-normal mb-5">Contact Details</h3>
  
                    <div class="mb-4 pb-2">
                      <div class="form-outline form-white">
                        <label class="form-label" for="form3Examplea2">Adresse</label>
                        <input type="text" id="form3Examplea2" class="form-control form-control-lg" />
                      </div>
                    </div>
  
                    <div class="mb-4 pb-2">
                      <div class="form-outline form-white">
                        <label class="form-label" for="form3Examplea3">Email</label>
                        <input type="text" id="form3Examplea3" class="form-control form-control-lg" />
                      </div>
                    </div>
  
                    <div class="mb-4 pb-2">
                      <div class="form-outline form-white">
                        <label class="form-label" for="form3Examplea2">tel</label>
                        <input type="text" id="form3Examplea2" class="form-control form-control-lg" />
                      </div>
                    </div>
  
                    <div class="form-check d-flex justify-content-start mb-4 pb-3">
                      <input
                        class="form-check-input me-3"
                        type="checkbox"
                        value=""
                        id="form2Example3c"
                      />
                      <label class="form-check-label text-white" for="form2Example3">
                        I do accept the <a href="#!" class="text-white"><u>Terms and Conditions</u></a> of your site.
                      </label>
                    </div>
  
                    <button type="button" class="btn btn-light btn-lg" data-mdb-ripple-color="dark">Register</button>
  
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
 
    <!-- ***** Footer Start ***** -->
    <footer>
      <div class="container">
          <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12">
                  <ul class="social">
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                      <li><a href="#"><i class="fa fa-rss"></i></a></li>
                      <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                  </ul>
              </div>
          </div>
          <div class="row">
              <div class="col-lg-12">
                  <p class="copyright">Made By Lamyae & Loubna</p>
              </div>
          </div>
      </div>
  </footer>
  

  <!-- jQuery -->
  <script src="{{asset('assets/js/jquery-2.1.0.min.js')}}"></script>

  <!-- Bootstrap -->
  <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

  <!-- Plugins -->
  <script src="{{asset('assets/js/owl-carousel.js')}}"></script>
  <script src="{{asset('assets/js/scrollreveal.min.js')}}"></script>
  <script src="{{asset('assets/js/waypoints.min.js')}}"></script>
  <script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
  
  <!-- Global Init -->
  <script src="{{asset('assets/js/custom.js')}}"></script>
  <script src="{{asset('assets/js/animation.js')}}"></script>

</body>
</html>