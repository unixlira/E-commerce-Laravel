<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sobre extends Model
{
	protected $table = 'sobre';

	public function scopeCompany($query)
    {
        return $query->where('empresa_id', session('site')['id']);
    }

    public function scopeAtivo($query)
    {
        return $query->where('inativo', '0');
    }
}
