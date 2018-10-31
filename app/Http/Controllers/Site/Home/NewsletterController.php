<?php

namespace App\Http\Controllers\Site\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Home\Newsletter;



class NewsletterController extends Controller
{
    public function save(Request $request)
    {
        $newsletter = Newsletter::firstOrNew(['empresa_id' => session('site')['id'], 'email' => $request->email]);
        $newsletter->email = $request->email;
        $newsletter->save();
        $newsletter->message = 'Salvo com Sucesso!';
        return $newsletter;
    }    
}
