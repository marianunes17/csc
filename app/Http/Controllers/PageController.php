<?php
// Para criar esta página:
//Laragon - Terminal, entrar na pasta e escrever:
//php artisan make: controller PageController



namespace App\Http\Controllers;

use App\Evento;
use App\Testemunho;
use App\Categoria;
use App\Equipa;
use App\Tipo;
use Illuminate\Http\Request;
use App\Parceria;
use App\Documentos;
use App\Tipos;


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
        $equipas=Equipa::all();
        $testemunhos=Testemunho::where('publicado',true)->orderBy('data','desc')->take(4)->get();
        return view('equipa', compact('testemunhos','equipas'))->with('menu', 'Equipa');
    }

    public function parcerias(){
        $parcerias=Parceria::all();
        return view('parcerias',compact('parcerias'))->with('menu', 'Parcerias');
    }

    public function documentos(Request $request){
        $tipos=Tipo::where('tipo_id', null)->get();

        if ($request->has('tipo_id')){
            $tipo_id=$request->query('tipo_id');
            $tipos_s=Tipo::where('tipo_id', $tipo_id)->orWhere('id',$tipo_id)->pluck('id');
            $documentos=Documento::whereIn('tipo_id', $tipos_s)->get();
        }else{
            $tipo_id=$tipos[0]->id;
            $documentos=Documento::where('tipo_id',$tipo_id)->get();
        }
        if ($request->has('pai')) {
            $tipo_id=$request->has('pai');
        }
        $tipos_sub=Tipo::where('tipo_id', $tipo_id)->get();

        return view('documentos', compact('tipos','documentos','tipos_sub'))->with('menu', 'Documentos');

    }

    public function servicos(){
        return view('servicos')->with('menu', 'Servicos');
    }

    public function eventos(Request $request){
        $categorias=Categoria::where('categoria_id', null)->get();

        if ($request->has('cat_id')){
            $cat_id=$request->query('cat_id');
            $categorias_s=Categoria::where('categoria_id', $cat_id)->orWhere('id',$cat_id)->pluck('id');
            $eventos=Evento::whereIn('categoria_id', $categorias_s)->get();
        }else{
            $cat_id=$categorias[0]->id;
            $eventos=Evento::where('categoria_id',$cat_id)->get();
        }
        if ($request->has('pai')) {
            $cat_id=$request->has('pai');
        }
        $categorias_sub=Categoria::where('categoria_id', $cat_id)->get();

        return view('eventos', compact('categorias','eventos','categorias_sub'))->with('menu', 'Eventos');

    }

    public function contactos(){
        return view('contactos')->with('menu', 'Contactos');
    }

    /*public function registar(){
        return view('registar')->with('menu', 'Registar');
    }*/

    public function landingpage(){
        return view('landingpage')->with('menu', 'landingpage');
    }
}


