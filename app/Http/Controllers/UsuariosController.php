<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    private $viewUsuarios = 'Usuarios.usuarios';

    public function index(){
        return $this->userAuthorizeAdministrator($this->viewUsuarios);
    }
}
