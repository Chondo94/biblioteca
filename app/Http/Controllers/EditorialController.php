<?php

namespace App\Http\Controllers;

use App\editorial;
use Illuminate\Http\Request;

class EditorialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      {
        $editorial = Editorial::all();
        return view('editorial.index', compact('editorial'));
      }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('editorial/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $editorial = Editorial::create($request->all());
      return view('editorial.show', compact('editorial'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\editorial  $editorial
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $editorial = Editorial::findOrFail($id);
      return view('editorial.show', compact('editorial'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $editorial = Editorial::findOrFail($id);
      return view('editorial.edit', compact('editorial'));
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
      $editorial = Editorial::find($id);
      $editorial -> update($request->all());
      return view('editorial.show', compact('editorial'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\editorial  $categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Editorial::find($id)->delete();
      $editorial = Editorial::all();
      return view('editorial.index', compact('editorial'));
    }
}
