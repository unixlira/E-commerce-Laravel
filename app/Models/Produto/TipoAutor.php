<?php

namespace App\Models\Produto;

use Illuminate\Database\Eloquent\Model;

class TipoAutor extends Model
{
	protected $table = 'tipos_autores';

	public function autores() {
		return $this->hasMany('App\Models\Produto\Autor');
	}
    
}
