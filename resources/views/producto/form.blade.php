<h1>{{ $modo }} PRODUCTOS </h1>
@if(count($errors)>0)
<div class="alert alert-danger" role="alert">
    <ul>
     @foreach($errors ->all() as $error)
       <li>{{$error}}</li>
      @endforeach
      </ul>
</div>
      
@endif
    <div class="form-group">
       <label for="nombre">NOMBRE</label>
       <input type="text" class="form-control" name="nombre" value="{{ isset($productos->nombre)?$productos->nombre:''}}" id="nombre" >
   </div>
   <div class="form-group">
      <label for="descripcion">DESCRIPCIÓN</label>
      <input type="text" class="form-control" name="descripcion" value="{{ isset($productos->descripcion)?$productos->descripcion:''}}" id="descripcion">
   </div>
   <div class="form-group">
       <label for="categoria">CATEGORIA</label>
       <select name="categoria" id="categoria" class="form-control">
       <option value="0">SELECCIONE OPCIÓN:</option>
        @foreach ($categoria as $cat)
        <option value="{{ $cat->id}}">{{ $cat->categoria_desc}}</option>
        @endforeach -->                     
        </select>
    </div>
    <div class="form-group">
        <label for="sucursal">SUCURSAL</label>
        <select name="sucursal" id="sucursal" class="form-control">
        <option value="0">SELECCIONE OPCIÓN:</option>
        @foreach ($sucursal as $suc)
        <option value="{{ $suc->id}}">{{ $suc->sucursal_desc}}</option>
         @endforeach -->                     
        </select>
    </div>
    <div class="form-group">
        <label for="precio">PRECIO</label>
        <input type="text" class="form-control" name="precio"  value="{{ isset($productos->precio)?$productos->precio:''}}" id="precio">
    </div>
    <div class="form-group">
       <label for="fecha_compra">FECHA COMPRA</label>
       <input type="date" class="form-control" name="fecha_compra"  value="{{ isset($productos->fecha_compra)?$productos->fecha_compra:''}}"id="fecha_compra">
    </div>
    <br>
<input type="submit" value="{{$modo}}" class="btn btn-primary">