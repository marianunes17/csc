<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreEventosRequest;
use App\Http\Requests\UpdateEventosRequest;

use App\eventos;
use Illuminate\Http\Request;

class EventosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $eventos=eventos::all();
        return view('eventos.list', compact('eventos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $eventos=new eventos;
        return view('eventos.add', compact("eventos"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEventosRequest $request) {
        $fields=$request->validated();
        $eventos=new eventos();
        $eventos->fill($fields);
        $eventos->save();
        return redirect()->route('eventos.index')->with('success', 'eventos successfully created');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\eventos  $eventos
     * @return \Illuminate\Http\Response
     */
    public function show(eventos $eventos) {
        return view('eventos.show',compact("eventos"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\eventos  $eventos
     * @return \Illuminate\Http\Response
     */
    public function edit(eventos $eventos) {
        return view('eventos.edit',compact('eventos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\eventos  $eventos
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEventosRequest $request, Eventos $eventos)
    {
    $fields=$request->validated();
    $eventos->fill($fields);
    $eventos->save();
    return redirect()->route('eventos.index')->with('success',
    'eventos successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\eventos  $eventos
     * @return \Illuminate\Http\Response
     */
    public function destroy(eventos $eventos){
        if ($eventos->posts()->exists()){
            return redirect()->route('eventos.index')->withErrors(
            ['delete'=>'Eventos has related posts'] );
            }
            $eventos->delete();
            return redirect()->route('eventos.index')->with('success', 'Eventos successfully deleted');
    }
}
