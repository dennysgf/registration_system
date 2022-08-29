<?php

namespace App\Http\Controllers;

use App\Models\TelefonosEstudiante;
use Illuminate\Http\Request;

/**
 * Class TelefonosEstudianteController
 * @package App\Http\Controllers
 */
class TelefonosEstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $telefonosEstudiantes = TelefonosEstudiante::paginate();

        return view('telefonos-estudiante.index', compact('telefonosEstudiantes'))
            ->with('i', (request()->input('page', 1) - 1) * $telefonosEstudiantes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $telefonosEstudiante = new TelefonosEstudiante();
        return view('telefonos-estudiante.create', compact('telefonosEstudiante'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TelefonosEstudiante::$rules);

        $telefonosEstudiante = TelefonosEstudiante::create($request->all());

        return redirect()->route('telefonos-estudiante.index')
            ->with('success', 'TelefonosEstudiante created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $telefonosEstudiante = TelefonosEstudiante::find($id);

        return view('telefonos-estudiante.show', compact('telefonosEstudiante'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $telefonosEstudiante = TelefonosEstudiante::find($id);

        return view('telefonos-estudiante.edit', compact('telefonosEstudiante'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TelefonosEstudiante $telefonosEstudiante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TelefonosEstudiante $telefonosEstudiante)
    {
        request()->validate(TelefonosEstudiante::$rules);

        $telefonosEstudiante->update($request->all());

        return redirect()->route('telefonos-estudiante.index')
            ->with('success', 'TelefonosEstudiante updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $telefonosEstudiante = TelefonosEstudiante::find($id)->delete();

        return redirect()->route('telefonos-estudiante.index')
            ->with('success', 'TelefonosEstudiante deleted successfully');
    }
}
