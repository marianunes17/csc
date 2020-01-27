<?php
namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCategoriaRequest;
use App\Http\Requests\UpdateCategoriaRequest;
use Illuminate\Support\Facades\Storage;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() /*Metodo chamado para apresentar todos os registos */
    {
        $categorias=Categoria::all();
        return view('categorias.list', compact('categorias')); /*Chamar a vista categorias.list,
        compact da variavel, que cria um array com a variavel com o mesmo nome e faz o mesmo q a linha anterior*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoria= new Categoria;
        $categorias=Categoria::all();
        return view('categorias.add', compact("categoria","categorias"));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoriaRequest $request)
    {
        $fields=$request->validated();
        /**Se a validação for efetuada com sucesso, o código continuará a ser executado normalmente,
         se a validação falhar, aparecerá uma resposta de erro apropriada será automaticamente
         enviada de volta ao utilizador. */

        $categoria=new Categoria;
        $categoria->fill($fields);
        $categoria->categoria_id=$fields['categoria'];
        $categoria->save();
        return redirect()->route('categorias.index')->with('success', 'A categoria foi criada com sucesso');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function show(Categoria $categoria){
        return view('categorias.show',compact('categoria'));
    } /*o método “show” permite devolver a vista que vai mostrar a informação da categoria: */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function edit(Categoria $categoria)
    /**o método “edit” permite mostrar o formulário para editar a categoria */
    {
        $categorias=Categoria::all();
        return view('categorias.edit',compact('categoria','categorias'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\categorias $categorias
     * @return \Illuminate\Http\Response
     */

    public function update(UpdateCategoriaRequest $request, Categoria $categoria){
        $fields=$request->validated();
        $categoria->fill($fields);
        $categoria->categoria_id=$fields['categoria'];
        $categoria->save();
        return redirect()->route('categorias.index')->with('success',
        'A categoria foi editada com sucesso');
    } /*Permita guardar os dados submetidos através do formulário. */


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\categorias  $categorias
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categoria $categoria) {

        if ($categoria->eventos()->exists()){
            return redirect()->route('categorias.index')->withErrors(
            ['delete'=>'A categoria tem eventos relacionados'] );
        }

        $categoria->delete();
        return redirect()->route('categorias.index')->with('success', 'A categoria foi apagada com sucesso');
    } /**O método “delete” permite eliminar uma categoria.
        Só é possível eliminar uma categoria se esta não tiver posts associados, ou seja, se o relacionamento
    não existir.*/
}
