<?php

use Illuminate\Support\Facades\Route;

use App\Models\ordemServico;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('index');
});
Route::get('/Os', function () {
    return view('OServico');
});

Route::post('/Os1',function(Request $request){
    
    //mostrar todas informaçoes que estão chegando //
    //dd ->função laravel
    //debug or die // parar aplicação//

   // dd($request->all());

    //criar informaçaões vinculada ao Model para o banco de dados//
    ordemServico::create([
      'nome'=> $request -> nome,
      'cpf' =>$request -> cpf,
      'numero'=> $request ->numero,
      'data'=> $request ->data,
      'modelo'=> $request ->modelo,
      'marca'=> $request ->marca,
      'defeito' => $request->defeito
    ]);

    echo "te peguei no pulo";

});
