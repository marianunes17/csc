<?php

namespace App\Http\Controllers;

use App\Parceria;
use Illuminate\Http\Request;
use App\Http\Requests\StoreParceriaRequest;
use App\Http\Requests\UpdateParceriaRequest;
use Illuminate\Support\Facades\Storage;


class ParceriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $parceria=Parceria::all();
            return view('parcerias.list',compact('parceria'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parceria = new Parceria;
        return view('parcerias.add', compact("parceria"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreParceriaRequest $request)
    {
        $fields = $request->validated();
        $parceria = new Parceria;
        $parceria->fill($fields);
        $parceria->save();

        if ($request->hasFile('imagem')) {
            $image = $request->file('imagem');
            $parceriaImg = $parceria->id . '_' . time() . '.' . $image->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('parceria_images', $image, $parceriaImg);
            $parceria->imagem = $parceriaImg;
            $parceria->save();
        }

        return redirect()->route('parceria.index')->with('success', 'parceria criada com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Parceria  $parceria
     * @return \Illuminate\Http\Response
     */
    public function show(Parceria $parceria)
    {
        return view('parcerias.show', compact('parceria'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Parceria  $parceria
     * @return \Illuminate\Http\Response
     */
    public function edit(Parceria $parceria)
    {

        return view('parcerias.edit', compact('parceria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Parceria  $parceria
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateParceriaRequest $request, Parceria $parceria)
    {
        $fields = $request->validated();
        $parceria->fill($fields);
        $parceria->save();
        return redirect()->route('parceria.index')->with(
            'success',
            'parceria atualizada com sucesso'
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Parceria  $parceria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Parceria $parceria)
    {
        $parceria->delete();
        $parceria->save();
        return redirect()->route('parceria.index')->with(
            'success',
            'parceria eliminada com sucesso'
        );
    }
}
