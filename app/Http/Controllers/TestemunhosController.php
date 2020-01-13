<?php

namespace App\Http\Controllers;

use App\Testemunho;
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
            $testemunhos=Testemunho::all();
            return view('testemunhos.list',compact('testemunhos'));
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
        $testemunho = new Testemunho;
        $testemunho->fill($fields);
        $testemunho->data=date('Y-m-d H:i:s');
        $testemunho->save();
      

        return redirect()->route('testemunhos.index')->with('success', 'Testemunhos criado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FTestemunhos  $testemunhos
     * @return \Illuminate\Http\Response
     */
    public function show(Testemunho $testemunho)
    {
        return view('testemunhos.show', compact('testemunho'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\testemunhos  $testemunhos
     * @return \Illuminate\Http\Response
     */
    public function edit(Testemunho $testemunho)
    {
        return view('testemunhos.edit', compact('testemunho'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\testemunhos  $testemunhos
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTestemunhosRequest $request, testemunho $testemunho)
    {
        $fields = $request->validated();
        $testemunho->fill($fields);
        $testemunho->save();
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
        $testemunho->delete();
        return redirect()->route('testemunhos.index')->with(
            'success',
            'Testemunho eliminado com sucesso'
        );
    }
}
