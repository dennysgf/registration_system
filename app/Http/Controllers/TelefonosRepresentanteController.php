<?php

namespace App\Http\Controllers;

use App\Models\TelefonosRepresentante;
use Illuminate\Http\Request;

/**
 * Class TelefonosRepresentanteController
 * @package App\Http\Controllers
 */
class TelefonosRepresentanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $telefonosRepresentantes = TelefonosRepresentante::paginate();

        return view('telefonos-representante.index', compact('telefonosRepresentantes'))
            ->with('i', (request()->input('page', 1) - 1) * $telefonosRepresentantes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $telefonosRepresentante = new TelefonosRepresentante();
        return view('telefonos-representante.create', compact('telefonosRepresentante'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TelefonosRepresentante::$rules);

        $telefonosRepresentante = TelefonosRepresentante::create($request->all());

        return redirect()->route('telefonos-representante.index')
            ->with('success', 'TelefonosRepresentante created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $telefonosRepresentante = TelefonosRepresentante::find($id);

        return view('telefonos-representante.show', compact('telefonosRepresentante'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $telefonosRepresentante = TelefonosRepresentante::find($id);

        return view('telefonos-representante.edit', compact('telefonosRepresentante'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TelefonosRepresentante $telefonosRepresentante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TelefonosRepresentante $telefonosRepresentante)
    {
        request()->validate(TelefonosRepresentante::$rules);

        $telefonosRepresentante->update($request->all());

        return redirect()->route('telefonos-representante.index')
            ->with('success', 'TelefonosRepresentante updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $telefonosRepresentante = TelefonosRepresentante::find($id)->delete();

        return redirect()->route('telefonos-representante.index')
            ->with('success', 'TelefonosRepresentante deleted successfully');
    }
}
