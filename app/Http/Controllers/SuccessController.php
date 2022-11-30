<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuccessController extends Controller
{
    public function successUpdateAdmin(){
        return view('Usuarios.admin-updated');
    }
    public function successCreateAdmin(){
        return view('Usuarios.admin-create');
    }
    public function successUpdateUser(){
        return view('Usuarios.users-updated');
    }

}

