<?php

    namespace App\Http\Controllers;

    use App\Tipo;
    use Illuminate\Http\Request;
    use App\Http\Requests\StoreTipoRequest;
    use App\Http\Requests\UpdateTipoRequest;
    use Illuminate\Support\Facades\Storage;

    class TipoController extends Controller
    {
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $tipos = Tipo::all()->sortByDESC('created_at');
    return view('tipos.list', compact('tipos')); /*Chamar a vista
    categorias.list,
    compact da variavel, que cria um array com a variavel com o mesmo nome e faz
    o mesmo q a linha anterior*/
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
    $tipo= new Tipo;
    $tipos=Tipo::all()->sortBy('nome');
    return view('tipos.add', compact("tipo" ,"tipos" ));
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param \Illuminate\Http\Request $request
    * @return \Illuminate\Http\Response
    */
    public function store(StoreTipoRequest $request)
    {
    $fields=$request->validated();
    /**Se a validação for efetuada com sucesso, o código continuará a ser
    executado normalmente,
    se a validação falhar, aparecerá uma resposta de erro apropriada será
    automaticamente
    enviada de volta ao utilizador. */

    $tipo=new Tipo;
    $tipo->fill($fields);
    $tipo->tipo_id=$fields['tipo'];
    $tipo->save();
    return redirect()->route('tipos.index')->with('success', 'A categoria foi
    criada com sucesso');
    }

    /**
    * Display the specified resource.
    *
    * @param \App\Tipo $tipo
    * @return \Illuminate\Http\Response
    */
    public function show(Tipo $tipo){
    return view('tipos.show',compact('tipo'));
    } /*o método “show” permite devolver a vista que vai mostrar a informação da
    categoria: */

    /**
    * Show the form for editing the specified resource.
    *
    * @param \App\tipo $tipo
    * @return \Illuminate\Http\Response
    */
    public function edit(Tipo $tipo)
    /**o método “edit” permite mostrar o formulário para editar a categoria */
    {
    $tipos=Tipo::all();
    return view('tipos.edit',compact('tipo','tipos'));
    }

    /**
    * Update the specified resource in storage.
    *
    * @param \Illuminate\Http\Request $request
    * @param \App\Tipo $tipo
    * @return \Illuminate\Http\Response
    */
    public function update(UpdateTipoRequest $request, Tipo $tipo){
    $fields=$request->validated();
    $tipo->fill($fields);
    $tipo->tipo_id=$fields['tipo'];
    $tipo->save();
    return redirect()->route('tipos.index')->with('success',
    'A categoria foi editada com sucesso');
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param \App\Tipo $tipo
    * @return \Illuminate\Http\Response
    */
    public function destroy(Tipo $tipo) {

    if ($tipo->documentos()->exists()){
    return redirect()->route('tipos.index')->withErrors(
    ['delete'=>'A categoria tem documentos relacionados'] );
    }

    $tipo->delete();
    return redirect()->route('tipos.index')->with('success', 'A categoria foi
    apagada com sucesso');
    }
    }
