<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     public function abc(){
        if(auth()->user()->perfil == "1"){
            $datos['producto']=DB::table('productos')
            ->select('productos.id','productos.nombre','productos.categoria','productos.sucursal','categoria.categoria_desc','sucursal.sucursal_desc')
            ->join('categoria','categoria.id','=','productos.categoria')
            ->join('sucursal','sucursal.id','=','productos.sucursal')->get();
            return view('producto.index',$datos);
        }else{
            $categoria=DB::table('categoria')->select('categoria.*')->get();
            $sucursal=DB::table('sucursal')->select('sucursal.*')->get();
            return view('producto.create',compact('categoria','sucursal'));
        }
     }

    public function index()
    {
        //
        $datos['producto']=DB::table('productos')
        ->select('productos.id','productos.nombre','productos.descripcion','productos.categoria','productos.sucursal','categoria.categoria_desc','sucursal.sucursal_desc','productos.precio','productos.fecha_compra')
        ->join('categoria','categoria.id','=','productos.categoria')
        ->join('sucursal','sucursal.id','=','productos.sucursal')->get();
        return view('producto.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categoria=DB::table('categoria')->select('categoria.*')->get();
        $sucursal=DB::table('sucursal')->select('sucursal.*')->get();
        return view('producto.create',compact('categoria','sucursal'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $campos=[
            'nombre'=>'required|string|max:30',
            'descripcion'=>'required|string|max:100',
            'categoria'=>'required',
            'sucursal'=>'required',
            'precio'=>'numeric|required|between:1,99999',
        ];
        $mensaje=[
            'required'=>'El :attribute es requerido',
            'max'=>'El :attribute tiene un limite de caracteres de :max.',
            'string'=>'El :attribute no acepta numeros.',
            'numeric'=>'El :attribute solo acepta numeros.',
        ];
        $this->validate($request,$campos,$mensaje);
        $datosProducto=request()->except('_token');
        Productos::insert($datosProducto);
        //return response()->json($datosProducto);
        $categoria=DB::table('categoria')->select('categoria.*')->get();
        $sucursal=DB::table('sucursal')->select('sucursal.*')->get();
        return redirect('producto',compact('categoria','sucursal'))->with('mensaje','PRODUCTO AGREGADO CON ÉXITO!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function show(Productos $productos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $categoria=DB::table('categoria')->select('categoria.*')->get();
        $sucursal=DB::table('sucursal')->select('sucursal.*')->get();
        $productos=Productos::findOrFail($id);
        return view("producto.edit",compact('productos','categoria','sucursal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $campos=[
            'comentarios'=>'required|string|max:100',
        ];
        $mensaje=[
            'required'=>'El :attribute es requerido',
            'max'=>'El :attribute tiene un limite de caracteres de :max.',
            
        ];
        $this->validate($request,$campos,$mensaje);
        $categoria=DB::table('categoria')->select('categoria.*')->get();
        $sucursal=DB::table('sucursal')->select('sucursal.*')->get();
        $datosProducto=request()->except(['_token','_method']);
          Productos::where('id','=',$id)->update($datosProducto);
    
          $productos=Productos::findOrFail($id);
        view("producto.edit",compact('productos','categoria','sucursal'));
        return redirect('producto')->with('mensaje','PRODUCTO ACTUALIZADO CON EXITO!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Productos::destroy($id);
        return redirect('producto')->with('mensaje','PRODUCTO ELIMINADO CON ÉXITO!!');
    }
}
