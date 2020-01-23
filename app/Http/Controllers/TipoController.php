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
    public function index() /*Metodo chamado para apresentar todos os registos */
    {
        $tipos=Tipo::all();
        return view('tipos.list', compact('tipos')); /*Chamar a vista categorias.list,
        compact da variavel, que cria um array com a variavel com o mesmo nome e faz o mesmo q a linha anterior*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipo= new Tipo;
        return view('tipos.add', compact("tipo","tipos"));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTipoRequest $request)
    {
        $fields=$request->validated();
        /**Se a validação for efetuada com sucesso, o código continuará a ser executado normalmente,
         se a validação falhar, aparecerá uma resposta de erro apropriada será automaticamente
         enviada de volta ao utilizador. */

        $tipo=new Tipo;
        $tipo->fill($fields);
        $tipo->tipo_id=$fields['tipo'];
        $tipo->save();
        return redirect()->route('tipos.index')->with('success', 'A categoria foi criada com sucesso');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Tipo $tipo){
        return view('tipos.show',compact('tipo'));
    } /*o método “show” permite devolver a vista que vai mostrar a informação da categoria: */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tipo  $tipo
     * @return \Illuminate\Http\Response
     */
    public function edit(Tipo $tipo)
    /**o método “edit” permite mostrar o formulário para editar a categoria */
    {
        return view('tipos.edit',compact('tipo','tipos'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tipo  $tipo
     * @return \Illuminate\Http\Response
     */

    public function update(UpdateTipoRequest $request, Tipo $tipo){
        $fields=$request->validated();
        $tipo->fill($fields);
        $tipo->tipo_id=$fields['tipo'];
        $tipo->save();
        return redirect()->route('tipos.index')->with('success',
        'A categoria foi editada com sucesso');
    } /*Permita guardar os dados submetidos através do formulário. */


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tipo  $tipo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tipo $tipo) {

        if ($tipo->eventos()->exists()){
            return redirect()->route('tipos.index')->withErrors(
            ['delete'=>'A categoria tem eventos relacionados'] );
        }

        $tipo->delete();
        return redirect()->route('tipos.index')->with('success', 'A categoria foi apagada com sucesso');
    } /**O método “delete” permite eliminar uma categoria.
        Só é possível eliminar uma categoria se esta não tiver posts associados, ou seja, se o relacionamento
    não existir.*/
}
