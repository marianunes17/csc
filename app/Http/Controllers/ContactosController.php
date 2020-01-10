<?php

namespace App\Http\Controllers;

use App\Contactos;
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
        $contactos=Contactos::all();
        return view('contactos.list', compact('contactos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contacto = new Contactos;
        return view('contactos.add', compact("contacto"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreContactosRequest $request)
    {
        $fields = $request->validated();
        $contacto = new Contactos;
        $contacto->fill($fields);
        $contacto->save();

        if ($request->hasFile('imagem')) {
            $image = $request->file('imagem');
            $contactoImg = $contacto->id . '_' . time() . '.' . $image->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('parceria_images', $image, $parceriaImg);
            $contacto->imagem = $contactoImg;
            $contacto->save();
        }

        return redirect()->route('contactos.index')->with('success', 'Contacto criado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contactos  $contactos
     * @return \Illuminate\Http\Response
     */
    public function show(Contactos $contacto)
    {
        return view('contactos.show', compact('contacto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contactos  $contactos
     * @return \Illuminate\Http\Response
     */
    public function edit(Contactos $contacto)
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
    public function update(UpdateContactosRequest $request, Contactos $contactos)
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
    public function destroy(Contactos $contactos)
    {
        $contacto->delete();
        return redirect()->route('contactos.index')->with(
            'success',
            'Contacto eliminado com sucesso'
        );
    }
}
