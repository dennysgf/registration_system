<?php

namespace App\Http\Controllers;

use App\Models\DireccionesRepresentante;
use Illuminate\Http\Request;

/**
 * Class DireccionesRepresentanteController
 * @package App\Http\Controllers
 */
class DireccionesRepresentanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $direccionesRepresentantes = DireccionesRepresentante::paginate();

        return view('direcciones-representante.index', compact('direccionesRepresentantes'))
            ->with('i', (request()->input('page', 1) - 1) * $direccionesRepresentantes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $direccionesRepresentante = new DireccionesRepresentante();
        return view('direcciones-representante.create', compact('direccionesRepresentante'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(DireccionesRepresentante::$rules);

        $direccionesRepresentante = DireccionesRepresentante::create($request->all());

        return redirect()->route('direcciones-representante.index')
            ->with('success', 'DireccionesRepresentante created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $direccionesRepresentante = DireccionesRepresentante::find($id);

        return view('direcciones-representante.show', compact('direccionesRepresentante'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $direccionesRepresentante = DireccionesRepresentante::find($id);

        return view('direcciones-representante.edit', compact('direccionesRepresentante'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  DireccionesRepresentante $direccionesRepresentante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DireccionesRepresentante $direccionesRepresentante)
    {
        request()->validate(DireccionesRepresentante::$rules);

        $direccionesRepresentante->update($request->all());

        return redirect()->route('direcciones-representante.index')
            ->with('success', 'DireccionesRepresentante updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $direccionesRepresentante = DireccionesRepresentante::find($id)->delete();

        return redirect()->route('direcciones-representante.index')
            ->with('success', 'DireccionesRepresentante deleted successfully');
    }
}
