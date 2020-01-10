<?php

namespace App\Http\Controllers;

use App\Testemunhos;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTestemunhosRequest;
use App\Http\Requests\UpdateTestemunhosRequest;
use Illuminate\Support\Facades\Storage;

class TestemunhosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $testemunhos=Testemunhos::all();
            return view('testemunhos.list',compact('testemunhos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $testemunho = new Testemunhos;
        return view('testemunhos.add', compact("testemunho"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTestemunhosRequest $request)
    {
        $fields = $request->validated();
        $testemunho = new Testemunhos;
        $testemunho->fill($fields);
        $testemunho->save();

        if ($request->hasFile('imagem')) {
            $image = $request->file('imagem');
            $testemunhosImg = $testemunhos->id . '_' . time() . '.' . $image->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('testemunhos_images', $image, $testemunhosImg);
            $testemunhos->imagem = $testemunhosImg;
            $testemunhos->save();
        }

        return redirect()->route('testemunhos.index')->with('success', 'Testemunhos criado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FTestemunhos  $testemunhos
     * @return \Illuminate\Http\Response
     */
    public function show(Testemunhos $testemunhos)
    {
        return view('testemunhos.show', compact('testemunhos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\testemunhos  $testemunhos
     * @return \Illuminate\Http\Response
     */
    public function edit(Testemunhos $testemunhos)
    {
        return view('testemunhos.edit', compact('testemunhos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\testemunhos  $testemunhos
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTestemunhosRequest $request, testemunhos $testemunhos)
    {
        $fields = $request->validated();
        $testemunhos->fill($fields);
        $testemunhos->save();
        return redirect()->route('testemunhos.index')->with(
            'success',
            'Testemunho atualizado com sucesso'
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\testemunhos  $testemunhos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testemunhos $testemunhos)
    {
        $testemunhos->delete();
        return redirect()->route('testemunhos.index')->with(
            'success',
            'Testemunho eliminado com sucesso'
        );
    }
}
