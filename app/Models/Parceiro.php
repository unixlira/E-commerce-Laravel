<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parceiro extends Model
{
	protected $table = 'parceiros';

	public function scopeCompany($query)
    {
        return $query->where('empresa_id', session('site')['id']);
    }

    public function scopeAtivo($query)
    {
        return $query->where('inativo', '0');
    }
}
