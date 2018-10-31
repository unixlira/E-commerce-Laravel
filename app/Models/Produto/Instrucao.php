<?php

namespace App\Models\Produto;

use Illuminate\Database\Eloquent\Model;

class Instrucao extends Model
{
    protected $table = 'instrucoes_coletas';
    

    public function scopeCompany($query)
    {
        return $query->where('empresa_id', session('site')['id']);
    }

    public function scopeAtivo($query)
    {
        return $query->where('inativo', '0');
    }

    public function manual()
    {
        return $this->belongsTo('App\Models\Produto\Manual', 'manual_coleta_id');
    }

    public function conteudoLi() {
        $conteudo = explode("\n", $this->conteudo);
        return '<li>' . implode('</li><li>', $conteudo) . '</li>';
    }

    public function manuais()
    {
        return $this->hasMany('App\Models\Produto\Manual');
    }

}
