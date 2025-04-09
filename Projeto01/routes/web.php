<?php

use Illuminate\Support\Facades\Route;
use App\Models\Clientes;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/cadastrar-cliente', function(Request $request){
    Clientes::create([
        'name' => $request->name,
        'tel' => $request->tel,
        'ori' => $request->ori,
        'date' => $request->date,
        'obs' => $request->obs
    ]);

    return redirect('/')->with('success', 'Cliente cadastrado com sucesso!');
});

Route::get('/listar-clientes', function() {
    $clientes = Clientes::all(); // Recupera todos os clientes
    return view('listar', ['clientes' => $clientes]); // Passa os clientes para a view
});

Route::get('/editar-cliente/{id}', function($id) { 
    $cliente = Clientes::find($id); 
    return view('editar', ['cliente' => $cliente]); 
});

Route::post('/editar-cliente/{id}', function(Request $request, $id) { 
    $cliente = Clientes::find($id);

    $cliente->update([ 
        'name' => $request->name,
        'tel' => $request->tel,
        'ori' => $request->ori,
        'date' => $request->date,
        'obs' => $request->obs
    ]);

    return redirect('/sucesso')->with('mensagem', 'Cliente editado com sucesso!');
});

Route::get('/excluir-cliente/{id}', function($id) {
    $cliente = Clientes::find($id);
    $cliente->delete();

    return redirect('/sucesso')->with('mensagem', 'Cliente excluído com sucesso!');
});

Route::get('/sucesso', function() {
    return view('sucesso');
});
