<?php

namespace App\Http\Controllers;

use App\Models\ParientesEstudiante;
use Illuminate\Http\Request;

/**
 * Class ParientesEstudianteController
 * @package App\Http\Controllers
 */
class ParientesEstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parientesEstudiantes = ParientesEstudiante::paginate();

        return view('parientes-estudiante.index', compact('parientesEstudiantes'))
            ->with('i', (request()->input('page', 1) - 1) * $parientesEstudiantes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parientesEstudiante = new ParientesEstudiante();
        return view('parientes-estudiante.create', compact('parientesEstudiante'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(ParientesEstudiante::$rules);

        $parientesEstudiante = ParientesEstudiante::create($request->all());

        return redirect()->route('parientes-estudiante.index')
            ->with('success', 'ParientesEstudiante created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $parientesEstudiante = ParientesEstudiante::find($id);

        return view('parientes-estudiante.show', compact('parientesEstudiante'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $parientesEstudiante = ParientesEstudiante::find($id);

        return view('parientes-estudiante.edit', compact('parientesEstudiante'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  ParientesEstudiante $parientesEstudiante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ParientesEstudiante $parientesEstudiante)
    {
        request()->validate(ParientesEstudiante::$rules);

        $parientesEstudiante->update($request->all());

        return redirect()->route('parientes-estudiante.index')
            ->with('success', 'ParientesEstudiante updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $parientesEstudiante = ParientesEstudiante::find($id)->delete();

        return redirect()->route('parientes-estudiante.index')
            ->with('success', 'ParientesEstudiante deleted successfully');
    }
}
