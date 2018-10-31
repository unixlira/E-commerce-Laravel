<?php

namespace App\Models\Produto;

use Illuminate\Database\Eloquent\Model;
// use App\Models\Produto\Categoria;

class Produto extends Model
{
	protected $table = 'produtos';

    public function scopeCompany($query)
    {
        return $query->where('empresa_id', session('site')['id']);
    }

    public function scopeAtivo($query)
    {
        return $query->where('inativo', '0');
    }

    public function categoria()
    {
        return $this->belongsTo('App\Models\Produto\Categoria');
    }

}
