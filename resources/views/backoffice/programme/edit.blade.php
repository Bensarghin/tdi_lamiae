@extends('layoutAdmin.app')
@section('content') 
<form action="{{route('programme.update',['id' =>$programme->id])}}" method="post">
    @csrf

    <div class="ms-content-wrapper">
    <div class="card-body ">
      <h4 class="card-title">Modifier Programme</h4>
      <form class="form-sample">
        
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Nom Programme</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="nomP"  value="{{$programme->nomP}}" >
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">titre</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="titre"  value="{{$programme->titre}}" >
              </div>
            </div>
          </div>
       
        
        <button type="submit" class="btn btn-primary mr-2">Modifier</button>
        <button class="btn btn-light">Annuler</button>
      </form>
    
</div>
</div>

   
</form>

@endsection
