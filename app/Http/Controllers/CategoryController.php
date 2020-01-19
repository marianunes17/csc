<?php
namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() /*Metodo chamado para apresentar todos os registos */
    {
        $categories=Category::all();
        return view('categories.list', compact('categories')); /*Chamar a vista categorias.list,
        compact da variavel, que cria um array com a variavel com o mesmo nome e faz o mesmo q a linha anterior*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category= new Category;
        return view('categories.add', compact("category","categories"));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {
        $fields=$request->validated();
        /**Se a validação for efetuada com sucesso, o código continuará a ser executado normalmente,
         se a validação falhar, aparecerá uma resposta de erro apropriada será automaticamente
         enviada de volta ao utilizador. */

        $category=new Category;
        $category->fill($fields);
        $category->category_id=$fields['category'];
        $category->save();
        return redirect()->route('categories.index')->with('success', 'A categoria foi criada com sucesso');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category){
        return view('categories.show',compact('category'));
    } /*o método “show” permite devolver a vista que vai mostrar a informação da categoria: */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    /**o método “edit” permite mostrar o formulário para editar a categoria */
    {
        return view('categories.edit',compact('category','categories'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */

    public function update(UpdateCategoryRequest $request, Category $category){
        $fields=$request->validated();
        $category->fill($fields);
        $category->category_id=$fields['category'];
        $category->save();
        return redirect()->route('categories.index')->with('success',
        'A categoria foi editada com sucesso');
    } /*Permita guardar os dados submetidos através do formulário. */


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category) {

        if ($category->eventos()->exists()){
            return redirect()->route('categories.index')->withErrors(
            ['delete'=>'A categoria tem eventos relacionados'] );
        }

        $category->delete();
        return redirect()->route('categories.index')->with('success', 'A categoria foi apagada com sucesso');
    } /**O método “delete” permite eliminar uma categoria.
        Só é possível eliminar uma categoria se esta não tiver posts associados, ou seja, se o relacionamento
    não existir.*/
}
