<?php

namespace App\Http\Controllers;

use App\Evento;
use App\Categoria;

/**Passa a categoria para quando se postar um eventos se escolher apenas uma categoria */

use Illuminate\Http\Request;
use App\Http\Requests\StoreEventosRequest;
use App\Http\Requests\UpdateEventosRequest;
use Illuminate\Support\Facades\Storage;



class EventosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventos = evento::all()->sortByDESC('created_at');
        return view('eventos.list', compact('eventos'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::orderBy("nome")->get();
        $evento = new Evento;
        return view('eventos.add', compact("categorias", "evento"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEventosRequest $request)
    {
        $fields = $request->validated();
        $evento = new Evento;
        $evento->fill($fields);
        $evento->categoria_id = $fields["categoria"];
        $evento->data=date('Y-m-d H:i:s');
        $evento->save();

        if ($request->hasFile('imagem')) {
            $image = $request->file('imagem');
            $eventoImg = $evento->id . '_' . time() . '.' . $image->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('eventos_images', $image, $eventoImg);
            $evento->imagem = $eventoImg;
            $evento->save();
        }

        return redirect()->route('eventos.index')->with('success', 'O eventos foi criado com sucesso');
    }

    /**
     * Display the specified resource.

     * @param  \App\eventos  $eventos
     * @return \Illuminate\Http\Response
     */
    public function show(Evento $evento)
    {
        return view('eventos.show', compact('evento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\eventos  $eventos
     * @return \Illuminate\Http\Response
     */
    public function edit(Evento $evento)
    {
        $categorias = Categoria::orderBy("nome")->get();
        return view('eventos.edit', compact('categorias', 'evento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Eventos  $eventos
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEventosRequest $request, Evento $evento)
    {
        $fields = $request->validated();
        $evento->fill($fields);

        if ($request->hasFile('imagem')) {
            $image = $request->file('imagem');
            $eventoImg = $evento->id . '_' . time() . '.' . $image->getClientOriginalExtension();
            if (!empty($evento->imagem)) {
            Storage::disk('public')->delete('eventos_images/' . $evento->imagem);
            }
            Storage::disk('public')->putFileAs('eventos_images/', $image, $eventoImg);
            $evento->imagem = $eventoImg;
            }

        $evento->categoria_id=$fields['categoria'];
        $evento->save();
        return redirect()->route('eventos.index')->with(
            'success',
            'O evento foi editado com sucesso'
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\eventos  $eventos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evento $evento)
    {
        $evento->delete();
        return redirect()->route('eventos.index')->with('success', 'O evento foi apagado com sucesso');
    }
}
