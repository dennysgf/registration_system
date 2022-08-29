<?php

namespace App\Http\Controllers;

use App\Models\Paralelo;
use Illuminate\Http\Request;

/**
 * Class ParaleloController
 * @package App\Http\Controllers
 */
class ParaleloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paralelos = Paralelo::paginate();

        return view('paralelo.index', compact('paralelos'))
            ->with('i', (request()->input('page', 1) - 1) * $paralelos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paralelo = new Paralelo();
        return view('paralelo.create', compact('paralelo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Paralelo::$rules);

        $paralelo = Paralelo::create($request->all());

        return redirect()->route('paralelos.index')
            ->with('success', 'Paralelo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $paralelo = Paralelo::find($id);

        return view('paralelo.show', compact('paralelo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paralelo = Paralelo::find($id);

        return view('paralelo.edit', compact('paralelo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Paralelo $paralelo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paralelo $paralelo)
    {
        request()->validate(Paralelo::$rules);

        $paralelo->update($request->all());

        return redirect()->route('paralelos.index')
            ->with('success', 'Paralelo updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $paralelo = Paralelo::find($id)->delete();

        return redirect()->route('paralelos.index')
            ->with('success', 'Paralelo deleted successfully');
    }
}
