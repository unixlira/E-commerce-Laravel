<?php

namespace App\Models\Produto;

use Illuminate\Database\Eloquent\Model;

class Manual extends Model
{
    protected $table = 'manuais_coletas';
     protected $fillable = 
    [
    	'categoria_id',
		'nome',
		'descricao',
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

    public function categoria()
    {
        return $this->belongsTo('App\Models\Produto\Categoria');
    }

    public function instrucoes()
    {
        return $this->hasMany('App\Models\Produto\Instrucao', 'manual_coleta_id');
    }

    public function manuais()
    {
        return $this->hasMany('App\Models\Produto\Manual');
    }
}

