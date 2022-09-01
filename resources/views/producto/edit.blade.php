@extends('layouts.app')

@section('content')
<div class="container">


<form action="{{url('/producto/'.$productos->id) }}" method="post">
    @csrf
    {{ method_field('PATCH') }}

@include('producto.form',['modo'=>'EDITAR']);
    <div class="form-group">
    <label for="comentarios">ESTADO</label>
      <select name="estado" id="estado" class="form-control">
        <option value="">SELECCIONE OPCION:</option>
        <option value="1">CERRADO</option>
         <option value="2">ABIERTO</option>
                                    
      </select>
    </div>
    <div class="form-group">
       <label for="comentarios">COMENTARIOS</label>
       <input type="comentarios" class="form-control" name="comentarios" id="comentarios">
    </div>
</form>
</div>

<footer align="center">
<h3 >GABRIEL FAJARDO JAIMES</h3>
</footer>
@endsection