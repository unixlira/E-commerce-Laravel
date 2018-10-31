<?php

namespace App\Models\Home;

use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
	protected $table = 'emails_newsletters';
    protected $fillable = 
    [
    	'empresa_id',
		'email'	
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