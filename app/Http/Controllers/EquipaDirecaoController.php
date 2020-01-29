<?php

namespace App\Http\Controllers;

use App\EquipaDirecao;
use Illuminate\Http\Request;
use App\Http\Requests\StoreEquipaDirecaoRequest;
use App\Http\Requests\UpdateEquipaDirecaoRequest;
use Illuminate\Support\Facades\Storage;

class EquipaDirecaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipas=EquipaDirecao::all();
        return view('equipasdirecao.list',compact('equipas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $equipa = new EquipaDirecao;
        return view('equipasdirecao.add', compact("equipa"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEquipaDirecaoRequest $request)
    {
        $fields = $request->validated();
        $equipa = new EquipaDirecao;
        $equipa->fill($fields);
        $equipa->save();

        if ($request->hasFile('imagem')) {
            $image = $request->file('imagem');
            $equipaImg = $equipa->id . '_' . time() . '.' . $image->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('equipa_direcao_images', $image, $equipaImg);
            $equipa->imagem = $equipaImg;
            $equipa->save();
        }

        return redirect()->route('equipasdirecao.index')->with('success', 'Membro de equipa da direção criado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EquipaDirecao  $equipaDirecao
     * @return \Illuminate\Http\Response
     */
    public function show(EquipaDirecao $equipasdirecao)
    {
        $equipa=$equipasdirecao;
        return view('equipasdirecao.show', compact('equipa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EquipaDirecao  $equipaDirecao
     * @return \Illuminate\Http\Response
     */
    public function edit(EquipaDirecao $equipasdirecao)
    {
        $equipa=$equipasdirecao;
        return view('equipasdirecao.edit', compact('equipa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EquipaDirecao  $equipaDirecao
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEquipaDirecaoRequest $request, EquipaDirecao $equipasdirecao)
    {
        $fields = $request->validated();
        $equipasdirecao->fill($fields);
        if ($request->hasFile('imagem')) {
            $image = $request->file('imagem');
            $equipaImg = $equipasdirecao->id . '_' . time() . '.' . $image->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('equipa_direcao_images', $image, $equipaImg);
            $equipasdirecao->imagem = $equipaImg;
        }
        $equipasdirecao->save();
        return redirect()->route('equipasdirecao.index')->with(
            'success',
            'Membro Equipa da direção atualizado com sucesso'
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EquipaDirecao  $equipaDirecao
     * @return \Illuminate\Http\Response
     */
    public function destroy(EquipaDirecao $equipasdirecao)
    {
        $equipasdirecao->delete();
        return redirect()->route('equipasdirecao.index')->with(
            'success',
            'Membro Equipa da direção eliminado com sucesso'
        );
    }
}
