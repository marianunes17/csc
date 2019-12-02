<?php
// Para criar esta página:
//Laragon - Terminal, entrar na pasta e escrever:
//php artisan make: controller PageController


namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PageController extends Controller
{
    public function index() {
        return view('Index')->with('menu', 'Index');
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
        return view('parcerias')->with('menu', 'Parcerias');
    }


    public function servicos(){
        return view('servicos')->with('menu', 'Servicos');
    }

    public function eventos(){
        return view('eventos')->with('menu', 'Eventos');
    }

    public function contactos(){
        return view('contactos')->with('menu', 'Contactos');
    }

    public function registar(){
        return view('registar')->with('menu', 'Registar');
    }
}


