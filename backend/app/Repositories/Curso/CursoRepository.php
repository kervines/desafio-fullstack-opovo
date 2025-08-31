<?php

namespace App\Repositories\Curso;

interface CursoRepository
{
    function obterCurso(int $id);

    function listagemCursos();
}
