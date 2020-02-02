<?php

namespace App\Http\Controllers;

use App\Equipa;
use Illuminate\Http\Request;
use App\Http\Requests\StoreEquipaRequest;
use App\Http\Requests\UpdateEquipaRequest;
use Illuminate\Support\Facades\Storage;

class EquipaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipas=Equipa::all();
        return view('equipas.list',compact('equipas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $equipa = new Equipa;
        return view('equipas.add', compact("equipa"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEquipaRequest $request)
    {
        $fields = $request->validated();
        $equipa = new Equipa;
        $equipa->fill($fields);
        $equipa->save();

        if ($request->hasFile('imagem')) {
            $image = $request->file('imagem');
            $equipaImg = $equipa->id . '_' . time() . '.' . $image->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('equipa_images', $image, $equipaImg);
            $equipa->imagem = $equipaImg;
            $equipa->save();
        }

        return redirect()->route('equipas.index')->with('success', 'Membro de equipa criado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Equipa  $equipa
     * @return \Illuminate\Http\Response
     */
    public function show(Equipa $equipa)
    {
        return view('equipas.show', compact('equipa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Equipa  $equipa
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipa $equipa)
    {
        return view('equipas.edit', compact('equipa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Equipa  $equipa
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEquipaRequest $request, Equipa $equipa)
    {
        $fields = $request->validated();
        $equipa->fill($fields);

        if ($request->hasFile('imagem')) {
            $image = $request->file('imagem');
            $equipaImg = $equipa->id . '_' . time() . '.' . $image->getClientOriginalExtension();
            if (!empty($equipa->imagem)) {
                Storage::disk('public')->delete('equipa_images/' . $equipa->imagem);
                }
                Storage::disk('public')->putFileAs('equipa_images/', $image, $equipaImg);
                $equipa->imagem = $equipaImg;
                }

        $equipa->save();
        return redirect()->route('equipas.index')->with(
            'success',
            'Membro Equipa atualizado com sucesso'
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Equipa  $equipa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipa $equipa)
    {
        $equipa->delete();
        return redirect()->route('equipas.index')->with(
            'success',
            'Membro Equipa eliminado com sucesso'
        );
    }
}
