<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeAdminController extends Controller
{
    private $viewHome = 'Admin.homeAdmin';
    private $viewRegistros = 'Admin.registros';
    private $viewUsers = 'Admin.homeAdmin';


    public function index()
    {
        return view('Admin.homeAdmin');
    }

}
