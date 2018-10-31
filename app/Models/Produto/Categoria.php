<?php

namespace App\Models\Produto;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
	protected $table = 'produtos_categorias';

    public function scopeCompany($query)
    {
        return $query->where('empresa_id', session('site')['id']);
    }

    public function scopeAtivo($query)
    {
        return $query->where('inativo', '0');
    }

    public function produtos()
    {
        return $this->hasMany('App\Models\Produto\Produto', 'categoria_id');
    }

    public function categoria()
    {
        return $this->belongsTo('App\Models\Produto\Categoria');
    }

    public function categorias()
    {
        return $this->hasMany('App\Models\Produto\Categoria');
    }

    public function manuais()
    {
        return $this->hasMany('App\Models\Produto\Manual');
    }

    public function arquivos()
    {
        return $this->hasMany('App\Models\Produto\Arquivo');
    }
    
}
