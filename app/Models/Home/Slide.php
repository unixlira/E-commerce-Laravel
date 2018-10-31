<?php

namespace App\Models\Home;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
	protected $table = 'slides';
    protected $fillable = 
    [
    	'empresa_id',
		'nome',
		'imagem',
		'link',
		'inativo'
    ];

    public function scopeCompany($query)
    {
        return $query->where('empresa_id', session('site')['id']);
    }

    public function scopeAtivo($query)
    {
        return $query->where('inativo', '0');
    }
}
