<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
 */

// Aqui começa a parte do Admin
Route::controllers([
    'auth' => 'Auth\AuthController',
]);

Route::get('admin/sair', function () {
    Auth::logout();
    Session::flush();
    return Redirect::to('auth/login');
});

Route::post('admin/login', 'Admin\UserController@login');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/', ['uses'  => 'Admin\IndexController@index']);

    Route::get('sobre-nos', 'Admin\SobreController@index');
    Route::post('sobre-nos', 'Admin\SobreController@store');
    

    // // Route::get('admin/blog/categorias', ['middleware' => 'checkSession', 'canUse' => 'blog.categorias', 'uses' => 'Admin\BlogCategoriasController@index']);
    Route::group(['prefix' => 'banners'], function () {
        Route::get('/', 'Admin\BannerController@index');
        Route::get('edit/{id}', 'Admin\BannerController@edit');
        Route::post('edit/{id}', 'Admin\BannerController@store');
        Route::get('delete/{id}', 'Admin\BannerController@delete');
    });

    Route::group(['prefix' => 'distribuidores'], function () {
        Route::get('/', 'Admin\DistribuidorController@index');
        Route::get('create/{id}', 'Admin\DistribuidorController@show');
        Route::post('create/{id}', 'Admin\DistribuidorController@store');
    });

    Route::group(['prefix' => 'editoras'], function () {
            Route::get('/', 'Admin\EditoraController@index');
            Route::get('create/{id}', 'Admin\EditoraController@show');
            Route::post('create/{id}', 'Admin\EditoraController@store');
        });


    Route::group(['prefix' => 'produtos'], function () {
        Route::get('/', 'Admin\Produto\ProdutoController@index');
        Route::get('create/{id}', 'Admin\Produto\ProdutoController@create');
        Route::post('create/{id}', 'Admin\Produto\ProdutoController@save');
        Route::get('delete/{id}', 'Admin\Produto\ProdutoController@delete');

        
        Route::group(['prefix' => 'categorias'], function () {
            Route::get('/', 'Admin\Produto\CategoriaController@index');
            Route::get('create/{id}', 'Admin\Produto\CategoriaController@show');
            Route::post('create/{id}', 'Admin\Produto\CategoriaController@save');
            Route::get('delete/{id}', 'Admin\Produto\CategoriaController@delete');
            
           
            
            Route::group(['prefix' => 'manuais'], function () {
                Route::get('/','Admin\Produto\ManualController@index'); 
                Route::get('create/{id}','Admin\Produto\ManualController@create');
                Route::post('create/{id}', 'Admin\Produto\ManualController@save');
                Route::get('delete/{id}', 'Admin\Produto\ManualController@delete');

                    
                
                    Route::group(['prefix' => 'instrucoes'], function () {
                        Route::get('/','Admin\Produto\InstrucaoController@index'); 
                        Route::get('create/{id}','Admin\Produto\InstrucaoController@create');
                        Route::post('create/{id}', 'Admin\Produto\InstrucaoController@save');
                        Route::get('delete/{id}', 'Admin\Produto\InstrucaoController@delete');
                    
                    }); 


            }); 
            
            Route::group(['prefix' => 'arquivos'], function () {
                Route::get('/','Admin\Produto\ArquivoController@index'); 
                Route::get('create/{id}','Admin\Produto\ArquivoController@create');
                Route::post('create/{id}', 'Admin\Produto\ArquivoController@save');
                Route::get('delete/{id}', 'Admin\Produto\ArquivoController@delete');
                   
            }); 
            
           
        
        
        });

       

        Route::group(['prefix' => 'autores'], function () {
            Route::get('/', 'Admin\Produto\AutorController@index');

            Route::get('create/{id}', 'Admin\Produto\AutorController@show');
        });

    });

    Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
});

Route::group(['prefix' => '/'], function () {
    Route::get('/', 'Site\Home\indexController@index');
    Route::post('newsletter', 'Site\Home\NewsletterController@save');
    
    
    Route::get('/sobre', function(){
        $sobre = App\Models\Sobre::company()->first();
        return view('site.sobre', compact('sobre'));
    });

    Route::get('/contato', 'Site\Contato\contatoController@index');
    Route::post('/contato', 'Site\Contato\contatoController@sendEmail');

    Route::get('/editoras', function(){
        $parceiros = App\Models\Parceiro::company()->where('inativo', 0)->orderBy('nome')->get();
        $i = 0;
        return view('site.editoras', compact('parceiros', 'i'));
    });

    Route::get('/autores', 'Site\Autor\autoresController@index');
    Route::get('/autores/{slug}', 'Site\Autor\autoresController@show');    

    Route::get('/distribuidores', function(){
        $distribuidores = App\Models\Distribuidor::company()->where('inativo', 0)->orderBy('titulo')->orderBy('nome')->get();
        $i = 0;
        return view('site.distribuidores', compact('distribuidores', 'i'));
    });

    Route::get('/politicas-da-empresa', function(){
        return view('site.politicas');
    });
    Route::get('/como-comprar', function(){
        return view('site.comprar');
    });

    Route::get('usuario/login', 'Site\Usuario\UsuarioController@index');
    Route::post('usuario/login', 'Site\Usuario\UsuarioController@login');
    Route::post('usuario/cadastro', 'Site\Usuario\UsuarioController@save');
    Route::get('usuario/esqueceu-senha', 'Site\Usuario\UsuarioController@show');
    Route::get('usuario/carrinho', 'Site\Usuario\CarrinhoController@index');
    Route::get('usuario/sair', function () {
        Auth::logout();
        Session::flush();
        return Redirect::to('usuario/login');
    });
    
    
    Route::group(['prefix' => 'usuario', 'middleware' => 'auth'], function () {
        Route::get('meu-cadastro', 'Site\Usuario\CadastroController@index');
        Route::post('meu-cadastro', 'Site\Usuario\CadastroController@save');
        Route::get('pedidos', 'Site\Usuario\PedidoController@index');              
        Route::get('/pedidos/detalhe/{numero}','Site\Usuario\PedidoController@show');
    });
    
    
    
    
    Route::get('categorias/{categoria_slug}', 'Site\Produto\ProdutoController@index');

    Route::get('categorias/{categoria_slug}/manuais', 'Site\Produto\ManualController@index');

    Route::get('categorias/{categoria_slug}/formularios', 'Site\Produto\FormularioController@index');

    Route::get('categorias/{categoria_slug}/politicas', 'Site\Produto\PoliticaController@index');

    Route::get('{categoria_slug}/{produto_slug}', 'Site\Produto\ProdutoController@show');        
   



});