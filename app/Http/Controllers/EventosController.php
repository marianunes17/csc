<?php

namespace App\Http\Controllers;

use App\Eventos;
use App\Category; /**Passa a categoria para quando se postar um eventos se escolher apenas uma categoria */
use Illuminate\Http\Request;
use App\Http\Requests\StoreEventosRequest;
use Illuminate\Support\Facades\Storage;



class EventosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
     $eventos=Eventos::all();
     return view('eventos.list',compact('eventos'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $categories=Category::orderBy("name")->get();
        $eventos=new Eventos;
        return view('eventos.add',compact("categories","eventos"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEventosRequest $request) {
        $fields=$request->validated();
        $eventos=new Eventos;
        $eventos->fill($fields);
        $eventos->category_id=$fields["category"];
        $eventos->save();

        if ($request->hasFile('imagem')) {
            $image = $request->file('imagem');
            $eventosImg = $eventos->id . '_' . time() . '.' . $image->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('eventos_imagem', $image, $eventosImg);
            $eventos->image = $eventosImg;
            $eventos->save();
        }

        return redirect()->route('eventos.index')->with('success', 'eventos successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\eventos  $eventos
     * @return \Illuminate\Http\Response
     */
    public function show(eventos $eventos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\eventos  $eventos
     * @return \Illuminate\Http\Response
     */
    public function edit(eventos $eventos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\eventos  $eventos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, eventos $eventos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\eventos  $eventos
     * @return \Illuminate\Http\Response
     */
    public function destroy(eventos $eventos)
    {
        //
    }
}
