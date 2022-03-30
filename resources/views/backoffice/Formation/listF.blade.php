@extends('layoutAdmin.app')
@section('content') 


    <div class="col-lg-10 stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">list des Formations</h4>
            <p class="card-description">
              voici <code>les nouvelles Formations</code>
            </p>
          
                <div class="table-responsive pt-2">
                  <table class="table table-bordered">
                  <thead>
                 <tr>
                    <th>
                      Id
                    </th>
                    <th>
                      Nom Formation
                    </th>
                    <th>
                        description
                    </th>
                    <th>
                        duree
                    </th>
                    <th>
                        prix
                    </th>
                    <th>
                        programme
                    </th>
                    <th>
                      Mise a jour
                      </th>
                  </tr>
            </thead>
            <tbody>
                @if($formations->count() > 0)
                @foreach($formations as $item)  
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->nomF}}</td>
                        <td>{{$item->description}}</td>
                        <td>{{$item->duree}}</td>
                        <td>{{$item->prix}}</td>
                        <td>{{$item->programme->titre}}</td>
                       
                        <td>
                            <button type="button" class="btn btn-inverse-primary btn-rounded btn-icon" >
                              <a  href="{{route('formation.delete',['id'=>$item->id])}}" >
                                <i class="mdi mdi-delete" ></i>                        
                            </a>              
                            </button>
                            <button type="button" class="btn btn-inverse-primary btn-rounded btn-icon">
                              <a  href="{{route('formation.edit',['id'=>$item->id])}}" >
                                <i class="mdi mdi-pencil"></i>                        
                            </a>                        
                            </button>
                             
                        </td>
                    </tr>
                </tbody>
                @endforeach
                @else
                <tr>
                   <td colspan="7" class="text-center text-danger"> Aucune Formation </td>
                </tr>
                @endif
          </table>
        </div>
       </div>
 


@endsection