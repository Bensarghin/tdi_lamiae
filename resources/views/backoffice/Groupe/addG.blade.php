@extends('layoutAdmin.app')
@section('content') 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<form action="{{route('groupe.store')}}" method="post">
    @csrf

    <div class="row">
    <div class="col-lg-8 stretch-card">
      <div class="card">
        <div class="card-body">
        <h4 class="card-title">Ajouter Groupe</h4>
        <form class="form-sample">
          <div class="row">
            <div class="col-md-8">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">label</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="label">
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
<div class="col-sm-4">
  
  <div class="card">
    <div class="card-footer">
      Formations Lists
    </div>
    <div class="card-body">
      @foreach ($formations as $formation)
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="formation[]" id="{{$formation->nomF}}" value="{{$formation->id}}">
        <label class="form-check-label" for="{{$formation->nomF}}" >
          {{$formation->nomF}}
        </label>
      </div>
      @endforeach
    </div>
  </div>
</div>
</div>
@endsection