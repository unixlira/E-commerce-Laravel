<?php

namespace App\Http\Controllers\Site\Contato;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Empresa;
use Mail;
use Session;

class contatoController extends Controller
{
    public function index(Request $request)
    {


        $contatos = Empresa::firstOrNew(['id' => session('site')['id']]);
        return view('site.contato', compact ('contatos'));
    }

    public function sendEmail(Request $request)
    {
        $data = array(
            'nome'  => $request->nome,
            'email' => $request->email,
            'telefone' => $request->telefone,
            'assunto' => $request->assunto,
            'servico' => $request->servico,
            'mensagem'  => $request->mensagem
        );

        Mail::send('emails.contato', $data, function ($message) use ($data) {
            $message->to('suporte@wsbrasil.com');
            $message->bcc('jose.apoio@wsbrasil.com');
            // $message->bcc('adriano@vdta.com.br');
            $message->replyTo($data['email']);
            $message->subject('Contato - Site ' . session('site')['nome_fantasia']);
        });
        return array( 'alert' => 'success', 'message' => 'Enviado com Sucesso!');
    }
}
