<?php

namespace App\Http\Controllers;

use App\Models\Pariente;
use Illuminate\Http\Request;

/**
 * Class ParienteController
 * @package App\Http\Controllers
 */
class ParienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parientes = Pariente::paginate();

        return view('pariente.index', compact('parientes'))
            ->with('i', (request()->input('page', 1) - 1) * $parientes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pariente = new Pariente();
        return view('pariente.create', compact('pariente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Pariente::$rules);

        $pariente = Pariente::create($request->all());

        return redirect()->route('parientes.index')
            ->with('success', 'Pariente created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pariente = Pariente::find($id);

        return view('pariente.show', compact('pariente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pariente = Pariente::find($id);

        return view('pariente.edit', compact('pariente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Pariente $pariente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pariente $pariente)
    {
        request()->validate(Pariente::$rules);

        $pariente->update($request->all());

        return redirect()->route('parientes.index')
            ->with('success', 'Pariente updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $pariente = Pariente::find($id)->delete();

        return redirect()->route('parientes.index')
            ->with('success', 'Pariente deleted successfully');
    }
}
