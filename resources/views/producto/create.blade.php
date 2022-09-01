@extends('layouts.app')

@section('content')
<div class="container">
@if(Session::has('mensaje'))
    {{Session::get('mensaje')}}
    @endif
<form action="{{url('/producto')}}" method="post" enctype="multipart/form-data">
    @csrf
    @include('producto.form',['modo'=>'AGREGAR']);
</form>
</div>
<footer align="center">
<h3 >GABRIEL FAJARDO JAIMES</h3>
</footer>
@endsection