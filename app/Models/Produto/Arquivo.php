<?php

namespace App\Models\Produto;

use Illuminate\Database\Eloquent\Model;

class Arquivo extends Model
{
    protected $table = 'arquivos';
    

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
    
    public function arquivos()
    {
        return $this->hasMany('App\Models\Produto\Arquivo');
    }
}
