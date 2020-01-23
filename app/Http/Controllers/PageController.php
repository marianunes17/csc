<?php
// Para criar esta página:
//Laragon - Terminal, entrar na pasta e escrever:
//php artisan make: controller PageController



namespace App\Http\Controllers;

use App\Evento;
use App\Testemunho;
use App\Category;
use Illuminate\Http\Request;
use App\Parceria;


class PageController extends Controller
{
    public function index() {
        $parcerias=Parceria::all();
        $testemunhos=Testemunho::where('publicado',true)->orderBy('data','desc')->take(4)->get();
        return view('Index', compact('testemunhos','parcerias'))->with('menu', 'Index');
    }

    public function centro(){
        return view('centro')->with('menu', 'CSC');
    }

    public function historia(){
        return view('historia')->with('menu', 'História');
    }

    public function equipa(){
        return view('equipa')->with('menu', 'Equipa');
    }

    public function parcerias(){
        $parcerias=Parceria::all();
        return view('parcerias',compact('parcerias'))->with('menu', 'Parcerias');
    }

    public function documentos(){
        return view('documentos')->with('menu', 'Documentos');
    }


    public function servicos(){
        return view('servicos')->with('menu', 'Servicos');
    }

    public function eventos(Request $request){
        $categories=Category::where('category_id', null)->get();

        if ($request->has('cat_id')){
            $cat_id=$request->query('cat_id');
            $categories_s=Category::where('category_id', $cat_id)->orWhere('id',$cat_id)->pluck('id');
            $eventos=Evento::whereIn('category_id', $categories_s)->get();
        }else{
            $cat_id=$categories[0]->id;
            $eventos=Evento::where('category_id',$cat_id)->get();
        }
        if ($request->has('pai')) {
            $cat_id=$request->has('pai');
        }
        $categories_sub=Category::where('category_id', $cat_id)->get();

        return view('eventos', compact('categories','eventos','categories_sub'))->with('menu', 'Eventos');

    }

    public function contactos(){
        return view('contactos')->with('menu', 'Contactos');
    }

    public function registar(){
        return view('registar')->with('menu', 'Registar');
    }

    public function landingpage(){
        return view('landingpage')->with('menu', 'landingpage');
    }
}


