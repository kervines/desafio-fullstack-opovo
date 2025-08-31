<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Modulo extends Model
{
    public function curso()
    {
        $this->hasOne(Curso::class);
    }
}