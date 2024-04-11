<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stack;
class StackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stacks = Stack::get();
        return view("sobreMi", [
            "stacks" => $stacks
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $destinationPath = 'images/stack/';
            $fileName = time() . "-" . $file->getClientOriginalName();
            $request->file('imagen')->move($destinationPath, $fileName);
            $nameFinal = $fileName;
        }
        Stack::create([
            "imagen" => $nameFinal,
            "nombre" => request('nombre')
        ]);
        return redirect()->route('stacks')->with('status', 'Stack agregado exitosamente');
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
