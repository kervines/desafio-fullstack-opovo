<?php

namespace App\Repositories\Curso;

use App\Models\Curso;

class CursoEloquent implements CursoRepository
{
    public function listagemCursos()
    {
        return Curso::with('categorias', 'modulos', 'infos')->get();
    }

    public function obterCurso(int $id)
    {
        return Curso::with('categorias', 'modulos', 'infos')->find($id);
    }
}
