<?php

namespace App\Http\Controllers;

use App\Evento;
use App\Category;

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
        $eventos = Evento::all();
        return view('eventos.list', compact('eventos'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy("name")->get();
        $evento = new Evento;
        return view('eventos.add', compact("categories", "evento"));
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
        $evento->category_id = $fields["category"];
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
        $categories = Category::orderBy("name")->get();
        return view('eventos.edit', compact('categories', 'evento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\eventos  $eventos
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEventosRequest $request, Evento $evento)
    {
        $fields = $request->validated();
        $evento->fill($fields);
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
