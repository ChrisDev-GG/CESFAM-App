<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistroRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function index(){
        return view('Auth.register');
    }
    public function registered(){
        return view('Auth.registered');
    }

    public function register(RegistroRequest $request){
        $request->validated();
        $user = User::create([
            'names' => $request->nombres,
            'surenames' => $request->apellidos,
            'username' => $request->nombre_usuario,
            'password' => $request->contraseña,
            'confirmation_password' => $request->confirmar_contraseña,
            'email' => $request->email ?? null,
            'phone' => $request->telefono ?? null,
            'birth_date' => $request->fecha_de_nacimiento,
            'user_type' => 3,
        ]);
        $credentials = [
            'username' => $user->username,
            'password' => $user->password,
        ];
        $user = Auth::getProvider()->retrieveByCredentials($credentials);
        Auth::login($user);
        return redirect('/registered');
    }
}
