<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;


class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $clientes=Cliente::all();
      return view('cliente.index',compact('clientes'));
      
      //
    }

    public function pdf()
    {
        $clientes=Cliente::all();
        $pdf = Pdf::loadView('cliente.pdf', compact('clientes'));
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
      $clientes=new Cliente;
      $clientes->nombre=$request->input('nombre');
      $clientes->telefono=$request->input('telefono');
      $clientes->correo=$request->input('correo');
      $clientes->direccion=$request->input('direccion');
      $clientes->estado=$request->input('estado');
      $clientes->save();
      return redirect()->back(); 
         //
         //
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
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
       $clientes=Cliente::find($id);
       $clientes->nombre=$request->input('nombre');
       $clientes->telefono=$request->input('telefono');
       $clientes->correo=$request->input('correo');
       $clientes->direccion=$request->input('direccion');
       $clientes->estado=$request->input('estado');
       $clientes->update();
       return redirect()->back(); 
          //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
       $clientes=Cliente::find($id);
       $clientes->delete();
       return redirect()->back();
    }
}
