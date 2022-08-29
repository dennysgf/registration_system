<?php

namespace App\Http\Controllers;

use App\Models\EspecialidadesCurso;
use Illuminate\Http\Request;

/**
 * Class EspecialidadesCursoController
 * @package App\Http\Controllers
 */
class EspecialidadesCursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $especialidadesCursos = EspecialidadesCurso::paginate();

        return view('especialidades-curso.index', compact('especialidadesCursos'))
            ->with('i', (request()->input('page', 1) - 1) * $especialidadesCursos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $especialidadesCurso = new EspecialidadesCurso();
        return view('especialidades-curso.create', compact('especialidadesCurso'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(EspecialidadesCurso::$rules);

        $especialidadesCurso = EspecialidadesCurso::create($request->all());

        return redirect()->route('especialidades-curso.index')
            ->with('success', 'EspecialidadesCurso created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $especialidadesCurso = EspecialidadesCurso::find($id);

        return view('especialidades-curso.show', compact('especialidadesCurso'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $especialidadesCurso = EspecialidadesCurso::find($id);

        return view('especialidades-curso.edit', compact('especialidadesCurso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  EspecialidadesCurso $especialidadesCurso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EspecialidadesCurso $especialidadesCurso)
    {
        request()->validate(EspecialidadesCurso::$rules);

        $especialidadesCurso->update($request->all());

        return redirect()->route('especialidades-curso.index')
            ->with('success', 'EspecialidadesCurso updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $especialidadesCurso = EspecialidadesCurso::find($id)->delete();

        return redirect()->route('especialidades-curso.index')
            ->with('success', 'EspecialidadesCurso deleted successfully');
    }
}
