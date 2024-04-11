<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imagens;
use App\Models\Proyecto;

class ImagenesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proyectos = Proyecto::get();
        return view('imagenes', [
            "proyectos" => $proyectos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $destinationPath = 'images/proyectos/';
            $fileName = time() . "-" . $file->getClientOriginalName();
            $request->file('imagen')->move($destinationPath, $fileName);
            $nameFinal = $fileName;
        }
        Imagens::create([
            "id_proyecto" => request('proyecto'),
            "ruta" => $nameFinal
        ]);
        return redirect()->route('imagenes')->with('status', 'Imagen agregada correctamente');
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
    public function destroy(string $id)
    {
        //
    }
}
