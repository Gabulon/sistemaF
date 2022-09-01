
@extends('layouts.app')

@section('content')
<div class="container">
@if(Session::has('mensaje'))
    {{Session::get('mensaje')}}
    @endif
<table class="table table-bordered table-dark">
    <thead >
        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>CATEGORIA</th>
            <th>SUCURSAL</th>
            <th>ACCION</th>
            <th>ACCION</th>
        </tr>
    </thead>
     
    <tbody>
    @foreach($producto as $prod)
        <tr>
            <td>{{$prod->id}}</td>
            <td>{{$prod->nombre}}</td>
            <td>{{$prod->categoria_desc}}</td>
            <td>{{$prod->sucursal_desc}}</td>
            <td>
            <a href="{{ url('/producto/'.$prod->id.'/edit') }}" class="btn btn-warning" >
             MODIFICAR
             </a>
             </td>
             <td>
            <form action="{{url('/producto/'.$prod->id)}}" method="post">
                @csrf
                {{method_field('DELETE')}}
                <input class="btn btn-danger" type="submit" onClick="return confirm('¿Quieres eliminar?')" value="BORRAR">
            </form>
            
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
<footer align="center">
<h3>GABRIEL FAJARDO JAIMES</h3>
</footer>
@endsection