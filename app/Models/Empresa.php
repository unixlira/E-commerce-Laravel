<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
	protected $table = 'empresas';

    public function categorias()
    {
        return $this->hasMany('App\Models\Produto\Categoria');
    }
}
