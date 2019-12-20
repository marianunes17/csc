<?php
namespace App\Http\Controllers;

use App\SubCategory;
use Illuminate\Http\Request;
use App\Http\Requests\StoreSubCategoryRequest;
use App\Http\Requests\UpdateSubCategoryRequest;

class subCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategorias=SubCategory::all();

        return view('subcategorias.list', compact('subcategorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Subcategory=new SubCategory;
        return view('subcategorias.add', compact("subcategory"));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSubCategoryRequest $request)
    {
        $fields=$request->validated();
        /**Se a validação for efetuada com sucesso, o código continuará a ser executado normalmente,
         se a validação falhar, aparecerá uma resposta de erro apropriada será automaticamente
         enviada de volta ao utilizador. */

        $subcategory=new subCategory();
        $subcategory->fill($fields);
        $subcategory->save();
        return redirect()->route('subcategorias.index')->with('success', 'subCategory successfully created');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(SubCategory $subcategory){
        return view('subcategorias.show',compact("subcategory"));
    } /*o método “show” permite devolver a vista que vai mostrar a informação da categoria: */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\subCategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function edit(subCategory $subcategory)
    /**o método “edit” permite mostrar o formulário para editar a categoria */
    {
        return view('subcategorias.edit',compact('subcategory'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */

    public function update(UpdateSubCategoryRequest $request, subCategory $subcategory){
        $fields=$request->validated();
        $subcategory->fill($fields);
        $subcategory->save();
        return redirect()->route('subcategorias.index')->with('success',
        'subCategory successfully updated');
    } /*Permita guardar os dados submetidos através do formulário. */


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\subCategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(subCategory $subcategory) {

        if ($subcategory->eventos()->exists()){
            return redirect()->route('subcategorias.index')->withErrors(
            ['delete'=>'subCategory has related eventos'] );
        }

        $subcategory->delete();
        return redirect()->route('subcategorias.index')->with('success', 'subCategory successfully deleted');
    }
}
