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
/*
use App\Mail\EnvioCorreo;
use Illuminate\Support\Facades\Mail;
*/

Auth::routes();

 Route::get('/', 'pageController@inicio')->name('home');
// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/inicio', 'pageController@inicio')->name('inicio');
Route::get('/perfil', 'pageController@perfil')->name('perfil');
Route::get('/equipos', 'pageController@equipos')->name('equipos');
Route::get('/marcas', 'pageController@marcas')->name('marcas');
Route::get('/areas', 'pageController@areas')->name('areas');
Route::get('/proyectos', 'pageController@proyectos')->name('proyectos');
Route::get('/ingresos', 'pageController@ingresos')->name('ingresos');
Route::get('/usuarios', 'pageController@usuarios')->name('usuarios');




Route::post('/RegistrarMarca', 'marcaController@RegistrarMarca')->name('RegistrarMarca');
Route::get('/RegistrarMarca', 'marcaController@RegistrarMarca');

Route::post('/RegistrarEquipo', 'equipoController@RegistrarEquipo')->name('RegistrarEquipo');
Route::get('/RegistrarEquipo', 'equipoController@RegistrarEquipo');

Route::post('/RegistrarArea', 'areaController@RegistrarArea')->name('RegistrarArea');
Route::get('/RegistrarArea', 'areaController@RegistrarArea');

Route::post('/RegistrarProyecto', 'proyectoController@RegistrarProyecto')->name('RegistrarProyecto');
Route::get('/RegistrarProyecto', 'proyectoController@RegistrarProyecto');

Route::post('/sendMail', 'ingresosController@sendMail')->name('sendMail');
Route::get('/sendMail', 'ingresosController@sendMail');
/*
Route::post('sendMail', function(){
$correo=new EnvioCorreo;
Mail::to('kyscompani@gmail.com')->send($correo);
return "Mensaje enviado";

});
*/

/*--RUTAS AJAX RAPIDAS--*/
Route::match(['get', 'post'], '/ObtenerMarcaId/{tipo_idEquipo?}', 'marcaController@ObtenerMarcaPorIdEquipo')->name('ObtenerMarcaId');
