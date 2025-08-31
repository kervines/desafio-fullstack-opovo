<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    public function curso()
    {
        $this->hasOne(Curso::class);
    }
}