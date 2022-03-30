@extends('layoutAdmin.app')
@section('content') 
<form action="{{route('formation.store')}}" method="post">
    @csrf

  
    <div class="col-lg-14 stretch-card">
      <div class="card">
        <div class="card-body">
      <h4 class="card-title">Ajouter Formation</h4>
      <form class="form-sample">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Nom Formation</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="nomF">
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">description</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="description">
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">duree</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="duree">
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Prix</label>
              <div class="col-sm-9">
                <input type="tele" class="form-control" name="prix">
              </div>
            </div>
          </div>
        </div>
        <div class="row">
         
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Programme</label>
              <div class="col-sm-9">
                <select class="form-select"   name="titre" aria-label="Default select example">
                  <option selected disabled>Select un progrmme</option>
                  @foreach ($programmes as $programme)
                  <option value="{{$programme->id}}" >{{$programme->titre}}</option>
                  @endforeach
                </select>
              </div>
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
@endsection