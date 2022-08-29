<?php

namespace App\Http\Controllers;

use App\Models\TelefonosPariente;
use Illuminate\Http\Request;

/**
 * Class TelefonosParienteController
 * @package App\Http\Controllers
 */
class TelefonosParienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $telefonosParientes = TelefonosPariente::paginate();

        return view('telefonos-pariente.index', compact('telefonosParientes'))
            ->with('i', (request()->input('page', 1) - 1) * $telefonosParientes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $telefonosPariente = new TelefonosPariente();
        return view('telefonos-pariente.create', compact('telefonosPariente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TelefonosPariente::$rules);

        $telefonosPariente = TelefonosPariente::create($request->all());

        return redirect()->route('telefonos-pariente.index')
            ->with('success', 'TelefonosPariente created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $telefonosPariente = TelefonosPariente::find($id);

        return view('telefonos-pariente.show', compact('telefonosPariente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $telefonosPariente = TelefonosPariente::find($id);

        return view('telefonos-pariente.edit', compact('telefonosPariente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TelefonosPariente $telefonosPariente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TelefonosPariente $telefonosPariente)
    {
        request()->validate(TelefonosPariente::$rules);

        $telefonosPariente->update($request->all());

        return redirect()->route('telefonos-pariente.index')
            ->with('success', 'TelefonosPariente updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $telefonosPariente = TelefonosPariente::find($id)->delete();

        return redirect()->route('telefonos-pariente.index')
            ->with('success', 'TelefonosPariente deleted successfully');
    }
}
