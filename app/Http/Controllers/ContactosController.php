<?php

namespace App\Http\Controllers;

use App\Models\contactos;
use Illuminate\Http\Request;


class ContactosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contactos=contactos::all();
        return view('welcome',compact('contactos'));
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
        $nuevoContacto = new contactos([
            'nombre' => $request->input('innombre'),
            'ap' => $request->input('inap'),
            'am' => $request->input('inam'),
            'correo' => $request->input('incorreo'),
            'telefono' => $request->input('intel'),
        ]);
        $nuevoContacto->save();
        return redirect()->route('contactos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(contactos $contactos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(contactos $contactos)
    {
        return redirect()->route('contactos.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, contactos $contactos)
    {
        $request->validate([
            'innombre' => 'required',
            'intel' => 'required'
        ]);
        $contactos->nombre = $request->input('innombre');
        $contactos->ap = $request->input('inap');
        $contactos->am = $request->input('inam');
        $contactos->correo = $request->input('incorreo');
        $contactos->telefono = $request->input('intel');
        $contactos->save();
        return redirect()->route('contactos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(contactos $contacto)
{
    $contacto->delete();
    return redirect()->route('contactos.index')->with('success', 'Contacto eliminado exitosamente');
}

}
