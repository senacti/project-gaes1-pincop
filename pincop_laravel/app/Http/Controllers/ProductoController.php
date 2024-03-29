<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos=Producto::all();
        return view('producto.indexi', compact('productos'));
    }

    public function pdf()
    {
        $productos=Producto::all();
        $pdf = Pdf::loadView('producto.pdf', compact('productos'));
        return $pdf->stream();  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $productos=new Producto;
        $productos->nombre=$request->input('nombre');
        $productos->marca=$request->input('marca');
        $productos->talla=$request->input('talla');
        $productos->cantidad=$request->input('cantidad');
        $productos->categoria=$request->input('categoria');
        $productos->descripcion=$request->input('descripcion');
        $productos->precio=$request->input('precio');
        $productos->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $productos=Producto::find($id);
        $productos->nombre=$request->input('nombre');
        $productos->marca=$request->input('marca');
        $productos->talla=$request->input('talla');
        $productos->cantidad=$request->input('cantidad');
        $productos->categoria=$request->input('categoria');
        $productos->descripcion=$request->input('descripcion');
        $productos->precio=$request->input('precio');
        $productos->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $productos=Producto::find($id);
        $productos->delete();
        return redirect()->back();
    }
}
