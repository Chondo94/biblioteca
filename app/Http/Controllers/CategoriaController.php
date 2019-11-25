<?php

namespace App\Http\Controllers;

use App\categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      {
        $categoria = Categoria::all();
        return view('categoria.index', compact('categoria'));
      }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categoria/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $categoria = Categoria::create($request->all());
      return view('categoria.show', compact('categoria'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $categoria = Categoria::findOrFail($id);
      return view('categoria.show', compact('categoria'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $categoria = categoria::findOrFail($id);
      return view('categoria.edit', compact('categoria'));
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
      $categoria = Categoria::find($id);
      $categoria -> update($request->all());
      return view('categoria.show', compact('categoria'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Categoria::find($id)->delete();
      $categoria = Categoria::all();
      return view('categoria.index', compact('categoria'));
    }
}
