{{-- @extends('layoutAdmin.app')
@section('content') 
<form action="{{route('programme.store')}}" method="post">
    @csrf
  <div class="col-lg-10 stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Ajouter Programme</h4>
        <form class="form-sample">
          
            <div class="col-md-8">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Nom Programme</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="nomP">
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">titre</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="titre">
                </div>
              </div>
            </div>
        
          
          <button type="submit" class="btn btn-primary mr-2">Ajouter</button>
          <button class="btn btn-light">Annuler</button>
</form>
      
</div>
</div>
</div>

   
</form>


{{-- <div class="card-body">
    <h4 class="card-title">list des Programmes</h4>
   
    <div class="table-responsive pt-3">
      <table class="table table-bordered">
        <thead>
            <tr>
                <th>
                  Id
                </th>
                <th>
                  Nom Programme
                </th>
                <th>
                  Titre
                </th>
                <th>
                  Mise a jour
                  </th>
              </tr>
        </thead>
        <tbody>
            @if($programme->count() > 0)
            @foreach($programme as $item)  
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->nomP}}</td>
                    <td>{{$item->titre}}</td>
          
                    <td>
                        <a  href="{{route('programme.delete',['id'=>$item->id])}}" class="btn btn-inverse-primary btn-rounded btn-icon">
                            <i class="mdi mdi-delete"></i>                        
                        </a>
                          <a  href="{{route('programme.edit',['id'=>$item->id])}}" class="btn btn-inverse-primary btn-rounded btn-icon">
                            <i class="mdi mdi-pencil"></i>                        
                          </a>
                         </td>
                </tr>
            </tbody>
            @endforeach
            @else
            <tr>
               <td colspan="7" class="text-center text-danger"> No Data </td>
            </tr>
            @endif
              
          
       
      </table>
    </div>
  </div> 


@endsection --}}