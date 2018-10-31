<?php

namespace App\Http\Controllers\Site\Usuario;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Pedido;
use App\Models\User;
use Auth;
use Redirect;
use Session;

class UsuarioController extends Controller
{
    public function index(){

        return view ('auth.loginsite');
    }

    public function show(){

        return view ('auth.show');
    }

    public function login(Request $request) {
		// dd( $request );
		try {
			$User = new User();
			if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
				$user             = Auth::user();
				$user->permisions = [];
				Session::put('user', $user);
				return redirect('/usuario/pedidos');
			} else {
				Session::flash('error_message', 'Usuário e/ou Senha Inválido');
				return back()->withInput();
			}
		} catch (Exception $e) {
			// echo "catch";
			Session::flash('error_message', 'Usuário e/ou Senha Inválido');
			return back()->withInput();
		}
	}

    

    public function save(Request $request){    
        
        $required = array(
            'name'                           => 'string |required',          
            'email'                          => 'string |required|unique:users,email',
            'rg'                             => 'string |required|unique:users,rg',
            'cpf'                            => 'string |required|unique:users,cpf',
            'endereco'                       => 'string |required',
            'numero'                         => 'string |required',
            'complemento'                    => 'string',
            'cidade'                         => 'string |required',
            'estado'                         => 'string |required',
            'cep'                            => 'string |required',
            'phone'                          => 'string |required',
            'senha'                          => 'string |required|min:6|confirmed',
            'senha_confirmation'             => 'string |required|min:6'
        );

            $this->validate($request, $required);

            $cadastro = New User();

            $cadastro->name = $request->name;
            $cadastro->email = $request->email;
            $cadastro->rg = $request->rg;
            $cadastro->cpf = $request->cpf;
            $cadastro->endereco = $request->endereco;
            $cadastro->numero = $request->numero;
            $cadastro->complemento = $request->complemento;
            $cadastro->cidade = $request->cidade;
            $cadastro->estado = $request->estado;
            $cadastro->cep = $request->cep;
            $cadastro->telefone = $request->phone;
            $cadastro->password = bcrypt($request->password);
            $cadastro->tipo_autor_id = 2;
            
            $cadastro->save();
            Session::flash('flash_message', 'Cadastrado com sucesso!');
            return redirect('/usuario/carrinho');
    } 
}
