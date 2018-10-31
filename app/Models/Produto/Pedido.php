<?php

namespace App\Models\Produto;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
	protected $table = 'pedidos';

    public function scopeCompany($query)
    {
        return $query->where('empresa_id', session('site')['id']);
    }

    public function scopeAtivo($query)
    {
        return $query->where('inativo', '0');
    }

    public function status()
    {
        return $this->belongsTo('App\Models\Produto\PedidoStatus');
    }
   
    public function produtos()
    {
        return $this->hasMany('App\Models\Produto\PedidoProduto');
    }

    public function usuario()
    {
        return $this->belongsTo('App\Models\User');
    }
}