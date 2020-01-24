<?php

namespace App\Http\Controllers;

use App\Documento;
use App\Tipo;
use Illuminate\Http\Request;
use App\Http\Requests\StoreDocumentosRequest;
use App\Http\Requests\UpdateDocumentosRequest;
use Illuminate\Support\Facades\Storage;

class DocumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documentos = Documento::all();
        return view('documentos.list', compact('documentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipos = Tipo::orderBy("name")->get();
        $documento = new Documento;
        return view('documentos.add', compact("tipos", "documento"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDocumentosRequest $request)
    {
        $fields = $request->validated();
        $documento = new Documento;
        $documento->fill($fields);
        $documento->tipo_id = $fields["tipo"];
        $documento->save();


        return redirect()->route('documentos.index')->with('success', 'O documento foi criado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Documento  $documento
     * @return \Illuminate\Http\Response
     */
    public function show(Documento $documento)
    {
        return view('documentos.show', compact('documento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Documento  $documento
     * @return \Illuminate\Http\Response
     */
    public function edit(Documento $documento)
    {
        $tipos = Tipo::orderBy("name")->get();
        return view('documentos.edit', compact('tipos', 'documento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Documento  $documento
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDocumentosRequest $request, Documento $documento)
    {
        $fields = $request->validated();
        $documento->fill($fields);
        $documento->save();
        return redirect()->route('documentos.index')->with(
            'success',
            'O documento foi editado com sucesso'
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Documento  $documento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Documento $documento)
    {
        $documento->delete();
        return redirect()->route('documentos.index')->with('success', 'O documento foi apagado com sucesso');
    }
}
