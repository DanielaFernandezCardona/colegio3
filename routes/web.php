<?php

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
Route::get('/registroUsuario',function(){
	 return view('registroUsuario');
});
Route::get('/registroEmpleado',function(){
	 return view('registroEmpleado');
});
Route::get('/menu',function(){
	 return view('menu');
});
Route::get('/registroEstudiante',function(){
	 return view('registroEstudiante');
});
Route::get('/welcome.blade',function(){
	 return view('welcome.blade');
});

Route::get('/', function () {
    return view('welcome');
});
 