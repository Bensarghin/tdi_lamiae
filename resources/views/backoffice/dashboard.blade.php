@extends('layoutAdmin.app')
@section('content') 
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

  <!-- endinject -->
</head>
<body>

      <div class="row">
        <div class="col-md-12 grid-margin">
          <div class="row">
            <div class="col-12 col-xl-8 mb-4 mb-xl-0">
              <h3 class="font-weight-bold">Welcome to Admin dashboard</h3>
              <h6 class="font-weight-normal mb-0">this space is for <span class="text-primary">Admin </span></h6>
            </div>
            <div class="col-12 col-xl-4">
             
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 grid-margin stretch-card">
          <div class="card tale-bg">
            <div class="card-people mt-auto">
              
            </div>
          </div>
        </div>
        <div class="col-md-5 grid-margin transparent">
          <div class="row">
            <div class="col-md-6 mb-4 stretch-card transparent">
              <div class="card card-tale">
                <div class="card-body">
                  <p class="mb-4">Nouvelles Clients</p>
                  <p class="fs-30 mb-2">{{$client->count('id')}}</p>
                  
                </div>
              </div>
            </div>
            <div class="col-md-6 mb-4 stretch-card transparent">
              <div class="card card-dark-blue">
                <div class="card-body">
                  <p class="mb-4">Total Programmes</p>
                  <p class="fs-30 mb-2">{{$programme->count('id')}}</p>
             
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
              <div class="card card-light-blue">
                <div class="card-body">
                  <p class="mb-4">Total Groupes</p>
                  <p class="fs-30 mb-2">{{$groupe->count('id')}}</p>
                 
                </div>
              </div>
            </div>
            <div class="col-md-6 stretch-card transparent">
              <div class="card card-light-danger">
                <div class="card-body">
                  <p class="mb-4">Total Formations</p>
                  <p class="fs-30 mb-2">{{$formation->count('id')}}</p>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


               
      <div class="col-lg-10 stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">list des Clients</h4>
            <p class="card-description">
              voici <code>les nouvelles Clients</code>
            </p>
          
                <div class="table-responsive pt-2">
                  <table class="table table-bordered"  >
                   
                  <thead>
                 <tr class="table-info">
                    <th>
                      Id
                    </th>
                    <th>
                      Nom
                    </th>
                    <th>
                      Prenom
                    </th>
                    <th>
                        Adresse
                    </th>
                    <th>
                        Tele
                      </th>
                      <th>
                       Formation
                      </th>
                    
                      <th>
                        Type RDV
                      </th>
                     
                      <th>
                        Date Naissance
                      </th>
                      <th>
                        Email
                      </th>
                      <th>
                      Mise a jour
                      </th>
                  </tr>
            </thead>
            <tbody>
                @if($client->count() > 0)
                @foreach($client as $item)  
                    <tr class="table-danger">
                        <td>{{$item->id}}</td>
                        <td>{{$item->nomC}}</td>
                        <td>{{$item->prenom}}</td>
                        <td>{{$item->adresse}}</td>
                        <td>{{$item->tele}}</td>
                        <td>{{$item->formation}}</td>
                        <td>{{$item->typeRDV}}</td>
                        <td>{{$item->datenaiss}}</td>
                        <td>{{$item->email}}</td>
                        <td>
                          <button type="button" class="btn btn-inverse-primary btn-rounded btn-icon">
                            <a  href="{{route('client.delete',['id'=>$item->id])}}" >
                              <i class="mdi mdi-delete"></i>                        
                          </a>              
                          </button>
                          <button type="button" class="btn btn-inverse-primary btn-rounded btn-icon">
                            <a  href="{{route('client.edit',['id'=>$item->id])}}" >
                              <i class="mdi mdi-pencil"></i>                        
                          </a>                        
                          </button>
                           
                             </td>
                    </tr>
                </tbody>
                @endforeach
                @else
                <tr>
                   <td colspan="7" class="text-center text-danger"> Aucune Client </td>
                </tr>
                @endif
                  
              
           
          </table>
        </div>
       </div>
      </div>
   
     
     
       
       <!-- plugins:js -->
       <script src="{{asset('assets/vendors/js/vendor.bundle.base.js')}}"></script>

       <!-- endinject -->
     
     
       <!-- End plugin js for this page -->
       <!-- inject:js -->
       <script src="{{asset('assets/js/off-canvas.js')}}"></script>
       <script src="{{asset('assets/js/hoverable-collapse.js')}}"></script>
       <script src="{{asset('assets/js/template.js')}}"></script>
       <script src="{{asset('assets/js/settings.js')}}"></script>
       <!-- endinject -->
       <!-- Custom js for this page-->
       <script src="{{asset('assets/js/dashboard.js')}}"></script>
       <!-- End custom js for this page-->
     </body>
     </html>
@endsection