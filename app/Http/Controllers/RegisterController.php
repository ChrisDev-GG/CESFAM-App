<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistroRequest;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('Auth.register');
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
            'birth_date' => $request->fecha_de_nacimiento ?? null,
            'user_type' => 3,
        ]);
        return redirect('/home');
    }
}
