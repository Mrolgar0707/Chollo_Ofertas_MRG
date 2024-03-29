<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chollo;


class CholloController extends Controller
{
    public function index()
    {
        $chollos = Chollo::all();
        return view('chollos.index', compact('chollos'));
    }

    public function create()
    {
        return view('chollos.create');
    }

    public function nuevos()
    {
        $chollos = Chollo::orderBy('created_at', 'desc')->get(); // Obtener los chollos ordenados por fecha de creación
        return view('chollos.nuevos', compact('chollos'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'url' => 'required|url',
            'categoria' => 'required',
            'puntuacion' => 'required|integer',
            'precio' => 'required|numeric',
            'precio_descuento' => 'required|numeric',
            'disponible' => 'required|boolean',
        ]);

        Chollo::create($request->all());

        return redirect()->route('chollos.index')
            ->with('success', 'Chollo creado correctamente.');
    }

    public function edit($id)
    {
        $chollo = Chollo::findOrFail($id);
        return view('chollos.edit', compact('chollo'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'url' => 'required|url',
            'categoria' => 'required',
            'puntuacion' => 'required|integer',
            'precio' => 'required|numeric',
            'precio_descuento' => 'required|numeric',
            'disponible' => 'required|boolean',
        ]);

        $chollo = Chollo::findOrFail($id);
        $chollo->update($request->all());

        return redirect()->route('chollos.index')
            ->with('success', 'Chollo actualizado correctamente.');
    }

    public function destroy($id)
    {
        Chollo::findOrFail($id)->delete();
        return redirect()->route('chollos.index')
            ->with('success', 'Chollo eliminado correctamente.');
    }

    public function show($id)
    {
        $chollo = Chollo::findOrFail($id);
        return view('chollos.show', compact('chollo'));
    }


}
