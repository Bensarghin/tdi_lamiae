@extends('layoutAdmin.app')
@section('content') 


    <div class="col-lg-10 stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">list des Clients</h4>
            <p class="card-description">
              voici <code>les nouvelles Clients</code>
            </p>
          
            <button type="button" class="btn btn-info btn-icon-text">
                Pdf
                <i class="ti-printer btn-icon-append"></i>                                                                              
              </button>
              <button type="button" class="btn btn-primary btn-icon-text">
                <i class="ti-file btn-icon-prepend"></i>
                Word
              </button>
              <button type="button" class="btn btn-danger btn-icon-text">
                <i class="ti-file btn-icon-prepend"></i>                                                    
                Excel
              </button>
              <br>
              <br>

                <div class="table-responsive pt-2">
                  <table class="table table-bordered">
                  <thead>
                 <tr>
                   <th></th>
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
                    <tr>
                        <td>
                          <input type="checkbox" value="{{$item->id}}" name="client">
                        </td>
                        <td>{{$item->nomC}}</td>
                        <td>{{$item->prenom}}</td>
                        <td>{{$item->adresse}}</td>
                        <td>{{$item->tele}}</td>
                        <td>{{$item->formation}}</td>
                        <td>{{$item->typeRDV}}</td>
                        <td>{{$item->datenaiss}}</td>
                        <td>{{$item->email}}</td>
                        <td>
                            <button type="button" class="btn btn-inverse-primary btn-rounded btn-icon" >
                              <a  href="{{route('client.delete',['id'=>$item->id])}}" >
                                <i class="mdi mdi-delete" ></i>                        
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
        <br>
        
        <div class="col-lg-4">
          <button  type="button" class="btn btn-primary mr-2">rejoindrer groupe</button>
        </div>
       </div>
       
      <br>
  </div>
 


@endsection