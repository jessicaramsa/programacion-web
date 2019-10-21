<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function inicio() {
        return view('welcome');
    }

    public function fotos() {
        return view('fotos');
    }

    public function noticias() {
        return view('blog');
    }

    public function nosotros($nombre = null) {
        $equipo = ['Saul', 'Daniel', 'Isidro', 'Jéssica'];
        return view('nosotros', compact('equipo', 'nombre'));
    }
}
