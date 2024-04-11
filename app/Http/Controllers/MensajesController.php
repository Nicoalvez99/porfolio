<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mensaje;
class MensajesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('contacto');
    }
    
    public function indexAdmin()
    {
        $mensajes = Mensaje::orderBy('created_at', 'desc')->get();
        Mensaje::saved([
            "contador" => 0
        ]);
        return view('misMensajes', [
            "mensajes" => $mensajes
        ]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(Mensaje $mensaje, Request $request)
    {
        $validatedMessage = $request->validate([
            "nombre" => 'required|string',
            "email" => 'required|email',
            "mensaje" => 'required|string'
        ]);

        $contador = $mensaje->contador;
        Mensaje::create([
            "nombre" => $validatedMessage['nombre'],
            "email" => $validatedMessage['email'],
            "mensaje" => $validatedMessage['mensaje'],
            "contador" => $contador + 1
        ]);
        return redirect()->route('recibido');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mensaje $mensaje)
    {
        $mensaje->delete();
        return redirect()->route('misMensajes');
    }
}
