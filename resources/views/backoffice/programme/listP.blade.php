@extends('layoutAdmin.app')
@section('content') 


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
              {{-- begin --}}
              <form action="{{route('programme.store')}}" method="post">
                @csrf
                <div class="card">
                  <div class="card-body">
                        <div class="mb-3">
                          <label for="exampleFormControlInput1" class="form-label">Nom Programme</label>
                          <input type="text" class="form-control" name="nomP" id="exampleFormControlInput1" placeholder="taper ici ...">
                        </div>
                        <div class="mb-3">
                          <label for="exampleFormControlInput1" class="form-label">Titre Programme</label>
                          <input type="text" class="form-control" name="titre" id="exampleFormControlInput1" placeholder="taper ici ...">
                        </div>
                        <div class="mb-3">
                          <button type="submit" class="btn btn-primary mr-2">Ajouter</button>
                        </div>
                  </div>
                </div>
            </form>
              {{-- end --}}

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->

<button  data-bs-toggle="modal" data-bs-target="#exampleModal" type="button" class="btn btn-primary m-3">Ajouter</button>

<div class="col-lg-12 stretch-card">

  <div class="card">
    <div class="card-body">


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
            <div class="modal fade" id="modal{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                          {{-- begin --}}
                          <form action="{{route('programme.update',['id' =>$item->id])}}" method="post">
                            @csrf
                            <div class="card">
                              <div class="card-body">
                                    <div class="mb-3">
                                      <label for="exampleFormControlInput1" class="form-label">Nom Programme</label>
                                      <input type="text" class="form-control" name="nomP" id="exampleFormControlInput1" value="{{$item->nomP}}">
                                    </div>
                                    <div class="mb-3">
                                      <label for="exampleFormControlInput1" class="form-label">Titre Programme</label>
                                      <input type="text" class="form-control" name="titre" id="exampleFormControlInput1" value="{{$item->titre}}">
                                    </div>
                                    <div class="mb-3">
                                      <button type="submit" class="btn btn-primary mr-2">Modifier</button>
                                    </div>
                              </div>
                            </div>
                        </form>
                          {{-- end --}}
            
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div> 
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->nomP}}</td>
                    <td>{{$item->titre}}</td>
          
                    <td>
                          <button type="button" class="btn btn-inverse-primary btn-rounded btn-icon">
                            <a href="{{route('programme.delete',['id'=>$item->id])}}" >
                              <i class="mdi mdi-delete"></i>                        
                          </a>              
                          </button>
                          <button type="button" data-bs-toggle="modal" data-bs-target="#modal{{$item->id}}" class="btn btn-inverse-primary btn-rounded btn-icon">
                            {{-- <a href="{{route('programme.edit',['id'=>$item->id])}}" > --}}
                              <i class="mdi mdi-pencil"></i>                        
                          {{-- </a>                         --}}
                          </button>
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
</div>
</div>

  @endsection

