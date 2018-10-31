<?php

namespace App\Models\Produto;

use Illuminate\Database\Eloquent\Model;
// use App\Models\Produto\Categoria;

class ProdutoAutor extends Model
{
	protected $table = 'produtos_autores';

    public function categoria()
    {
        return $this->belongsTo('App\Models\Produto\Categoria');
    }

    public function autor()
    {
        return $this->belongsTo('App\Models\Produto\Autor');
    }

    public function produto()
    {
        return $this->belongsTo('App\Models\Produto\Produto');
    }


    
}
