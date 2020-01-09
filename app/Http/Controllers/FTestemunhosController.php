<?php

namespace App\Http\Controllers;

use App\FTestemunhos;
use Illuminate\Http\Request;

class FTestemunhosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testemunhos=FTestemunhos::all();
        return view('testemunhos.list', compact('testemunhos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FTestemunhos  $fTestemunhos
     * @return \Illuminate\Http\Response
     */
    public function show(FTestemunhos $fTestemunhos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FTestemunhos  $fTestemunhos
     * @return \Illuminate\Http\Response
     */
    public function edit(FTestemunhos $fTestemunhos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FTestemunhos  $fTestemunhos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FTestemunhos $fTestemunhos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FTestemunhos  $fTestemunhos
     * @return \Illuminate\Http\Response
     */
    public function destroy(FTestemunhos $fTestemunhos)
    {
        //
    }
}
