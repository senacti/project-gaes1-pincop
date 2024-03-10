<?php

namespace App\Http\Controllers;

use App\Models\Marketing;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class MarketingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $marketings=Marketing::all();
        return view('marketing.index', compact('marketings'));
    }

    public function pdf()
    {
        $marketings=Marketing::all();
        $pdf = Pdf::loadView('marketing.pdf', compact('marketings'));
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
        $marketings=new Marketing;
        $marketings->nombre=$request->input('nombre');
        $marketings->descripcion=$request->input('descripcion');
        $marketings->duracion=$request->input('duracion');
        $marketings->presupuesto=$request->input('presupuesto');
        $marketings->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Marketing $marketing)
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
        $marketings=Marketing::find($id);
        $marketings->nombre=$request->input('nombre');
        $marketings->descripcion=$request->input('descripcion');
        $marketings->duracion=$request->input('duracion');
        $marketings->presupuesto=$request->input('presupuesto');
        $marketings->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $marketings=Marketing::find($id);
        $marketings->delete();
        return redirect()->back();
    }
}
