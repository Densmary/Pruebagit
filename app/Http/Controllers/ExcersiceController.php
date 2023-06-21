<?php

namespace App\Http\Controllers;

use App\Models\Excersice;
use Illuminate\Http\Request;

/**
 * Class ExcersiceController
 * @package App\Http\Controllers
 */
class ExcersiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $excersices = Excersice::paginate();

        return view('excersice.index', compact('excersices'))
            ->with('i', (request()->input('page', 1) - 1) * $excersices->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $excersice = new Excersice();
        return view('excersice.create', compact('excersice'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Excersice::$rules);

        $excersice = Excersice::create($request->all());

        return redirect()->route('excersices.index')
            ->with('success', 'Ejercicio creado con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $excersice = Excersice::find($id);

        return view('excersice.show', compact('excersice'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $excersice = Excersice::find($id);

        return view('excersice.edit', compact('excersice'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Excersice $excersice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Excersice $excersice)
    {
        request()->validate(Excersice::$rules);

        $excersice->update($request->all());

        return redirect()->route('excersices.index')
            ->with('success', 'Ejercicio actualizado con éxito');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $excersice = Excersice::find($id)->delete();

        return redirect()->route('excersices.index')
            ->with('success', 'Ejercicio eliminado con éxito');
    }
}
