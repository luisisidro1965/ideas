@extends('layouts.app')

@section('content')
<div class="container">
     <div class="card">
          <div class="card-header">
               Registro de autobus locales y foraneos
          </div>
          <div class="card-body">
               <form action="{{ route('autobuses.store') }}" method="post">
                    @csrf
               
                    <div class="form-group">
                         <label for="Marca">Marca</label>
                         <input type="text" class="form-control" id="Marca" name="marca" aria-describedby="emailHelp">
                         <small id="emailHelp" class="form-text text-muted">La marca del autobus.</small>
                    </div>
               
                    <button type="submit" class="btn btn-success">Enviar</button>
               </form>
          </div>
     </div>

</div> 
@endsection