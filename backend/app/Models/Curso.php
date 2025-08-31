<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    //

    protected $fillable = [
        'titulo',
        'descricao',
        'thumbnail',
        'valor',
        'valor_matricula',
        'lote',
        'qnt_parcelas',
        'carga_horaria',
        'periodo',
        'tipo_periodo',
        'modalidade'
    ];

    public function categorias()
    {
        return $this->belongsToMany(Categoria::class);
    }

    public function modulos()
    {
        return $this->hasMany(Modulo::class);
    }

    public function infos()
    {
        return $this->hasMany(Info::class);
    }
}