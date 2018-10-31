<?php

namespace App\Models\Produto;

use Illuminate\Database\Eloquent\Model;

class PedidoProduto extends Model
{
	protected $table = 'pedidos_produtos';

    public function scopeCompany($query)
    {
        return $query->where('empresa_id', session('site')['id']);
    }

    public function pedido()
    {
        return $this->belongsTo('App\Models\Produto\Pedido');
    }

    public function produto()
    {
        return $this->belongsTo('App\Models\Produto\Produto');
    }
}