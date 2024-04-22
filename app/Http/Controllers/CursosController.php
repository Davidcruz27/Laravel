<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CursosController extends Controller
{
    public function index()
    {
        return "Bienvenido a la página de Cursos";
    }

    public function create()
    {
        return "En esta página puedes crear Cursos";
    }

    public function show($curso)
    {
        return "Bienvenidos al curso: $curso";
    }

}
