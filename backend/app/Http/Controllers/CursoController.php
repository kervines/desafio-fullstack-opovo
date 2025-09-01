<?php

namespace App\Http\Controllers;

use App\Http\Resources\CursoResource;
use App\Repositories\Curso\CursoRepository;
use Illuminate\Http\Request;

class CursoController extends Controller
{

    public function __construct(private CursoRepository $cursoRepository) {
        //
    }

    public function index()
    {
        $cursos = $this->cursoRepository->listagemCursos();

        return CursoResource::collection($cursos);
    }

    public function show(Request $request, int $id)
    {
        $curso = $this->cursoRepository->obterCurso($id);

        return new CursoResource($curso);
    }
}
