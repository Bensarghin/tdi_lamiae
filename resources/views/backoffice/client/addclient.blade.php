@extends('layoutAdmin.app')
@section('content') 
<form action="{{route('client.store')}}" method="post">
    @csrf

  
<div class="col-lg-14 stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Ajouter Client</h4>
      <form class="form-sample">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Nom Client</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="nomC">
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Prenom</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="prenom">
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">adresse</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="adresse">
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">tele</label>
              <div class="col-sm-9">
                <input type="tele" class="form-control" name="tele">
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">formation</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="formation">
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">typeRDV</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="typeRDV">
              </div>
            </div>
          </div>
          
        </div>
        
        <div class="row">
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">dateNaissance</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="datenaiss">
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Email</label>
              <div class="col-sm-9">
                <input type="email" class="form-control" name="email">
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