<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Repositories\Curso\CursoRepository;
use Illuminate\Http\Request;

class CursoController extends Controller
{

    public function __construct(private CursoRepository $cursoRepository) {
        //
    }

    public function index()
    {
        return $this->cursoRepository->listagemCursos();
    }

    public function show(Request $request, int $id)
    {
        return $this->cursoRepository->obterCurso($id);
    }
}