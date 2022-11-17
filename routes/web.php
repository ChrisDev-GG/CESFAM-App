<?php

use App\Http\Controllers\AdminsDataController;
use App\Http\Controllers\AdminViewsController;
use App\Http\Controllers\CardGameController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DragAndDropColorsController;
use App\Http\Controllers\GolpeaTopoDataController;
use App\Http\Controllers\GolpeaTopoGameController;
use App\Http\Controllers\HomeAdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\MemoramaDataController;
use App\Http\Controllers\MemoramaGameController;
use App\Http\Controllers\RegistrosController;
use App\Http\Controllers\SimonDiceDataController;
use App\Http\Controllers\SimonDiceGameController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\UsuariosDataController;
use Illuminate\Auth\Events\Logout;
use Illuminate\Support\Facades\Route;

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
    return view('Home.home');
});

// login and logout routes
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LogoutController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/home', [HomeController::class, 'index']);
Route::get('/gestor', [HomeAdminController::class, 'index']);

// game views
Route::get('/memorama', [MemoramaGameController::class, 'index']);
Route::get('/simondice', [SimonDiceGameController::class, 'index']);
Route::get('/golpeatopo', [GolpeaTopoGameController::class, 'index']);

// administratives routes
Route::get('/gestor/registros', [RegistrosController::class, 'index']);
Route::get('/gestor/usuarios', [UsuariosController::class, 'index']);

Route::resource('/registros/memorama', MemoramaDataController::class);
Route::resource('/registros/topo', GolpeaTopoDataController::class);
Route::resource('/registros/simon', SimonDiceDataController::class);

Route::resource('/gestor/usuarios/users', UsuariosDataController::class);
Route::resource('/gestor/usuarios/admins', AdminsDataController::class);





