<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $homeView = 'Home.start';
    
    public function index(){
        return view($this->homeView);
    }
}
