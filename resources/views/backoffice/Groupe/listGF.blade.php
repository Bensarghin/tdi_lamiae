@extends('layoutAdmin.app')
@section('content') 

    <div class="col-lg-10 stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">list des Groupes</h4>
            <p class="card-description">
              voici <code>les nouvelles Groupes</code>
            </p>
          
                <div class="table-responsive pt-2">
                  <table class="table table-bordered">
                  <thead>
                 <tr>
                    <th>
                      Id
                    </th>
                    <th>
                     label
                    </th>
                    <th>
                     Formations
                    </th>
                    <th>
                        Clients
                    </th>
                    <th>
                      Mise a jour
                      </th>
                  </tr>
            </thead>
            <tbody>
                @if($groups->count() > 0)
                @foreach($groups as $item)  
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->label}}</td>
                        <td>{{$item->formation->count()}}</td>
                        <td>{{$item->client->count()}}</td>
                       
                        <td>
                            <button type="button" class="btn btn-inverse-primary btn-rounded btn-icon" >
                              <a href="{{route('group.delete',['id'=>$item->id])}}" >
                                <i class="mdi mdi-delete" ></i>                        
                            </a>              
                            </button>
                            <button type="button" class="btn btn-inverse-primary btn-rounded btn-icon">
                             <a  href="{{route('group.edit',['id'=>$item->id])}}" >
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