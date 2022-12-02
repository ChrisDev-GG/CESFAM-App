<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrosController extends Controller
{
    private $viewRegistros = 'Registros.registros';

    public function index(){
        return $this->userAuthorizeAdministrator($this->viewRegistros);
    }
}
