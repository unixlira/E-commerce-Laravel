<?php

namespace App\Models\Produto;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
	protected $table = 'autores';

	public function scopeCompany($query)
    {
        return $query->where('empresa_id', session('site')['id']);
    }

    public function scopeAtivo($query)
    {
        return $query->where('inativo', '0');
    }

	public function tipo() {
		return $this->belongsTo('App\Models\Produto\TipoAutor', 'tipo_autor_id');
	}

	public function produtos() {
		return $this->hasMany('App\Models\Produto\ProdutoAutor');
	}
    
}
