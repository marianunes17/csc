<?php

namespace App\Http\Controllers;

use App\Contacto;
use Illuminate\Http\Request;
use App\Http\Requests\StoreContactosRequest;
use App\Http\Requests\UpdateContactosRequest;
use Illuminate\Support\Facades\Storage;

class ContactosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactos=Contacto::all();
        return view('contactos.list', compact('contactos'));
    }


    /**
     * Show the form for creating a new resource.
     * @param 
     * @return \Illuminate\Http\Response
     */
    public function store(StoreContactosRequest $request)
    {

        $fields = $request->validated();
        $contacto = new Contacto;
        $contacto->fill($fields);
        $contacto->data=date('Y-m-d H:i:s');
        $contacto->save();

         return redirect()->back()->with('success', 'Contacto criado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contactos  $contactos
     * @return \Illuminate\Http\Response
     */
    public function show(Contacto $contacto)
    {
        return view('contactos.show', compact('contacto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contactos  $contactos
     * @return \Illuminate\Http\Response
     */
    public function edit(Contacto $contacto)
    {
        return view('contactos.edit', compact('contacto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contactos  $contactos
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateContactosRequest $request, Contacto $contacto)
    {
        $fields = $request->validated();
        $contacto->fill($fields);
        $contacto->save();
        return redirect()->route('contactos.index')->with(
            'success',
            'Contacto atualizado com sucesso'
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contactos  $contactos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contacto $contacto)
    {
        $contacto->delete();
        return redirect()->route('contactos.index')->with(
            'success',
            'Contacto eliminado com sucesso'
        );
    }
}
