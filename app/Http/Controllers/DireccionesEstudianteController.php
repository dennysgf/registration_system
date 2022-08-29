<?php

namespace App\Http\Controllers;

use App\Models\DireccionesEstudiante;
use Illuminate\Http\Request;

/**
 * Class DireccionesEstudianteController
 * @package App\Http\Controllers
 */
class DireccionesEstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $direccionesEstudiantes = DireccionesEstudiante::paginate();

        return view('direcciones-estudiante.index', compact('direccionesEstudiantes'))
            ->with('i', (request()->input('page', 1) - 1) * $direccionesEstudiantes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $direccionesEstudiante = new DireccionesEstudiante();
        return view('direcciones-estudiante.create', compact('direccionesEstudiante'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(DireccionesEstudiante::$rules);

        $direccionesEstudiante = DireccionesEstudiante::create($request->all());

        return redirect()->route('direcciones-estudiante.index')
            ->with('success', 'DireccionesEstudiante created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $direccionesEstudiante = DireccionesEstudiante::find($id);

        return view('direcciones-estudiante.show', compact('direccionesEstudiante'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $direccionesEstudiante = DireccionesEstudiante::find($id);

        return view('direcciones-estudiante.edit', compact('direccionesEstudiante'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  DireccionesEstudiante $direccionesEstudiante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DireccionesEstudiante $direccionesEstudiante)
    {
        request()->validate(DireccionesEstudiante::$rules);

        $direccionesEstudiante->update($request->all());

        return redirect()->route('direcciones-estudiante.index')
            ->with('success', 'DireccionesEstudiante updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $direccionesEstudiante = DireccionesEstudiante::find($id)->delete();

        return redirect()->route('direcciones-estudiante.index')
            ->with('success', 'DireccionesEstudiante deleted successfully');
    }
}
