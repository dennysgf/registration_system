<?php

namespace App\Http\Controllers;

use App\Models\PeriodosAcademico;
use Illuminate\Http\Request;

/**
 * Class PeriodosAcademicoController
 * @package App\Http\Controllers
 */
class PeriodosAcademicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $periodosAcademicos = PeriodosAcademico::paginate();

        return view('periodos-academico.index', compact('periodosAcademicos'))
            ->with('i', (request()->input('page', 1) - 1) * $periodosAcademicos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $periodosAcademico = new PeriodosAcademico();
        return view('periodos-academico.create', compact('periodosAcademico'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(PeriodosAcademico::$rules);

        $periodosAcademico = PeriodosAcademico::create($request->all());

        return redirect()->route('periodos-academicos.index')
            ->with('success', 'PeriodosAcademico created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $periodosAcademico = PeriodosAcademico::find($id);

        return view('periodos-academico.show', compact('periodosAcademico'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $periodosAcademico = PeriodosAcademico::find($id);

        return view('periodos-academico.edit', compact('periodosAcademico'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  PeriodosAcademico $periodosAcademico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PeriodosAcademico $periodosAcademico)
    {
        request()->validate(PeriodosAcademico::$rules);

        $periodosAcademico->update($request->all());

        return redirect()->route('periodos-academicos.index')
            ->with('success', 'PeriodosAcademico updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $periodosAcademico = PeriodosAcademico::find($id)->delete();

        return redirect()->route('periodos-academicos.index')
            ->with('success', 'PeriodosAcademico deleted successfully');
    }
}
