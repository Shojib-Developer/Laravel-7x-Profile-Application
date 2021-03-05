<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Main;
class PagesConrtoller extends Controller
{
    public function index(){

$main= Main::first();
    return view('pages.index',compact('main'));

    }

    public function dashboard(){
        return view('pages.dashboard');
    }

    
}
