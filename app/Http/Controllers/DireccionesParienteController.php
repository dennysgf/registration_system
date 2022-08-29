<?php

namespace App\Http\Controllers;

use App\Models\DireccionesPariente;
use Illuminate\Http\Request;

/**
 * Class DireccionesParienteController
 * @package App\Http\Controllers
 */
class DireccionesParienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $direccionesParientes = DireccionesPariente::paginate();

        return view('direcciones-pariente.index', compact('direccionesParientes'))
            ->with('i', (request()->input('page', 1) - 1) * $direccionesParientes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $direccionesPariente = new DireccionesPariente();
        return view('direcciones-pariente.create', compact('direccionesPariente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(DireccionesPariente::$rules);

        $direccionesPariente = DireccionesPariente::create($request->all());

        return redirect()->route('direcciones-pariente.index')
            ->with('success', 'DireccionesPariente created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $direccionesPariente = DireccionesPariente::find($id);

        return view('direcciones-pariente.show', compact('direccionesPariente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $direccionesPariente = DireccionesPariente::find($id);

        return view('direcciones-pariente.edit', compact('direccionesPariente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  DireccionesPariente $direccionesPariente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DireccionesPariente $direccionesPariente)
    {
        request()->validate(DireccionesPariente::$rules);

        $direccionesPariente->update($request->all());

        return redirect()->route('direcciones-pariente.index')
            ->with('success', 'DireccionesPariente updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $direccionesPariente = DireccionesPariente::find($id)->delete();

        return redirect()->route('direcciones-pariente.index')
            ->with('success', 'DireccionesPariente deleted successfully');
    }
}
