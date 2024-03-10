<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ventas=Venta::all();
        return view('venta.index', compact('ventas'));
    }

    public function pdf()
    {
        $ventas=Venta::all();
        $pdf = Pdf::loadView('venta.pdf', compact('ventas'));
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
        $ventas=new Venta;
        $ventas->nombre=$request->input('nombre');
        $ventas->descripcion=$request->input('descripcion');
        $ventas->cantidad=$request->input('cantidad');
        $ventas->total=$request->input('total');
        $ventas->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Venta $venta)
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
        $ventas=Venta::find($id);
        $ventas->nombre=$request->input('nombre');
        $ventas->descripcion=$request->input('descripcion');
        $ventas->cantidad=$request->input('cantidad');
        $ventas->total=$request->input('total');
        $ventas->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $ventas=Venta::find($id);
        $ventas->delete();
        return redirect()->back();
    }
}
