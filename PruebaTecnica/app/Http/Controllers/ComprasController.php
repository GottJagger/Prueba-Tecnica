<?php

namespace App\Http\Controllers;

use App\Models\compras;
use App\Models\productos;
use DateTimeZone;
use Faker\Provider\Uuid;
use Illuminate\Http\Request;

class ComprasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('compras.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $datosDeProductos['productos'] = productos::all();
        $ProductosDeCompra = $request->all();

        $flag=0;
        foreach ($datosDeProductos['productos'] as $productos) {

            foreach ($ProductosDeCompra['productos'] as $productoCompra) {
                $arrayDeProductos[] = $productoCompra;
                if ($productos->id == $productoCompra['id']) {
                    if($productos->cantidad == 0){
                        return "No hay productos en stock";
                        $flag=1;

                    }elseif($ProductosDeCompra['productos']->fecha=date('Y-m-d')){
                        $productos->cantidad = $productos->cantidad - $productoCompra['cantidadComprada'];
                        $productos->save();
                    }else{
                        return "la fecha no coincide";
                        $flag=1;
                    }
                }
            }
        }


        if($flag==0){
            foreach ($ProductosDeCompra['productos'] as $producto) {
                $datosCompra['compras'] = new compras();
                $datosCompra['compras']->id_producto = $producto['id'];
                $datosCompra['compras']->cantidadComprada = $producto['cantidadComprada'];
                $datosCompra['compras']->correo = $request->correo;
                $datosCompra['compras']->celular = $request->celular;
                $datosCompra['compras']->fecha = $request->fecha;
                $datosCompra['compras']->hora = $request->hora;
                $datosCompra['compras']->save();
            }
        }

    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\compras  $compras
     * @return \Illuminate\Http\Response
     */
    public function show(compras $compras)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\compras  $compras
     * @return \Illuminate\Http\Response
     */
    public function edit(compras $compras)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\compras  $compras
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, compras $compras)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\compras  $compras
     * @return \Illuminate\Http\Response
     */
    public function destroy(compras $compras)
    {
        //
    }
}
