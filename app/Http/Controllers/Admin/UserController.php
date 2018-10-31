<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Redirect;
use Session;

class UserController extends Controller {

	public function login(Request $request) {
		// dd( $request );
		try {
			$User = new User();
			if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'tipo_autor_id' => 1])) {
				$user             = Auth::user();
				$user->permisions = [];
				Session::put('user', $user);
				return redirect('/admin/');
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
}
