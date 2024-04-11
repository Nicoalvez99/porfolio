<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proyecto;
use App\Models\Imagens;

class ProyectosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $imagenes = Imagens::get();
        $proyectos = Proyecto::get();
        return view("misProyectos", [
            "imagenes" => $imagenes,
            "proyectos" => $proyectos
        ]);
    }
    public function indexAdmin()
    {
        $proyectos = Proyecto::get();
        return view('proyectos', [
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
        Proyecto::create([
            "nombre" => request('nombre'),
            "resumen" => request('resumen'),
            "descripcion" => request('descripcion'),
            "status" => request('status'),
            "link" => request('link'),
            "imagen" => $nameFinal
        ]);
        return redirect()->route('proyectos')->with('status', 'Proyecto agregado correctamente');
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
    public function update(Request $request, Proyecto $proyecto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proyecto $proyecto)
    {
        $proyecto->delete();
        return redirect()->route('proyectos')->with('status', 'Proyecto eliminado correctamente');
    }
}
