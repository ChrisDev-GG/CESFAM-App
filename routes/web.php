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
use App\Http\Controllers\SendGameDataController;
use App\Http\Controllers\SimonDiceDataController;
use App\Http\Controllers\SimonDiceGameController;
use App\Http\Controllers\SuccessController;
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
    return redirect('/home');
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
Route::post('/gestor/usuarios/admins/{id}/activate', [AdminsDataController::class, 'activateUser']);
Route::post('/gestor/usuarios/admins/{id}/deactivate', [AdminsDataController::class, 'deactivateUser']);
Route::post('/gestor/usuarios/users/{id}/activate', [UsuariosDataController::class, 'activateUser']);
Route::post('/gestor/usuarios/users/{id}/deactivate', [UsuariosDataController::class, 'deactivateUser']);

Route::get('/gestor/usuarios/admin-updated', [SuccessController::class, 'successUpdateAdmin']);
Route::get('/gestor/usuarios/admin-created', [SuccessController::class, 'successCreateAdmin']);
Route::get('/gestor/usuarios/user-updated', [SuccessController::class, 'successUpdateUser']);

Route::post('/send/memorama/{score}', [SendGameDataController::class, 'sendGameDataMemorama']);
Route::post('/send/simon/{score}', [SendGameDataController::class, 'sendGameDataSimon']);
Route::post('/send/topo/{score}', [SendGameDataController::class, 'sendGameDataTopo']);

Route::get('/registered', [RegisterController::class, 'registered']);





