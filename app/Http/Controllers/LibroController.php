<?php

namespace App\Http\Controllers;

use App\Libro;
use App\Categoria;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      {
        $libro = Libro::all();
        return view('libro.index', compact('libro'));
      }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoria = Categoria::all();
        return view('libro/create', compact('categoria'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $libro = Libro::create($request->all());
      return view('libro.show', compact('libro'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\libro  $categoria
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $libro = Libro::findOrFail($id);
      return view('libro.show', compact('libro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $libro = Libro::findOrFail($id);
      return view('libro.edit', compact('libro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $libro = Libro::find($id);
      $libro -> update($request->all());
      return view('libro.show', compact('libro'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\libro  $categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Libro::find($id)->delete();
      $libro = Libro::all();
      return view('libro', compact('libro'));
    }
}
