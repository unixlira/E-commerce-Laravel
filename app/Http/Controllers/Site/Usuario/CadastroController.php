<?php

namespace App\Http\Controllers\Site\Usuario;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User;
use Auth;
use Redirect;
use Session;

class CadastroController extends Controller
{
    public function index(){
             
        return view ('site.usuarios.meu-cadastro.index');

    }
   
    public function save(Request $request){    
        
        $required = array(
            'name'                           => 'string |required',          
            'email'                          => 'string |required' . (Auth::user()->email!=$request->email ? '|unique:users,email' : ''),
            'rg'                             => 'string |required' . (Auth::user()->rg!=$request->rg ? '|unique:users,rg' : ''),
            'cpf'                            => 'string |required' . (Auth::user()->cpf!=$request->cpf ? '|unique:users,cpf' : ''),
            'endereco'                       => 'string |required',
            'numero'                         => 'string |required',
            'complemento'                    => 'string',
            'cidade'                         => 'string |required',
            'estado'                         => 'string |required',
            'cep'                            => 'string |required',
            'telefone'                       => 'string |required'
        );
        
        if($request->senha != "")
        {
            $required['senha'] = 'string |required|min:6|confirmed';
            $required['senha_confirmation'] = 'string |required|min:6';
        }

            $this->validate($request, $required);
        
            Auth::user()->name = $request->name;
            Auth::user()->email = $request->email;
            Auth::user()->rg = $request->rg;
            Auth::user()->cpf = $request->cpf;
            Auth::user()->endereco = $request->endereco;
            Auth::user()->numero = $request->numero;
            Auth::user()->complemento = $request->complemento;
            Auth::user()->cidade = $request->cidade;
            Auth::user()->estado = $request->estado;
            Auth::user()->cep = $request->cep;
            Auth::user()->telefone = $request->telefone;
            if($request->senha != "")
            {
                Auth::user()->password = bcrypt($request->senha);
            }
            
            
            Auth::user()->save();
            Session::flash('flash_message', 'Salvo com sucesso!');
            return redirect('/usuario/meu-cadastro');
    }
}
