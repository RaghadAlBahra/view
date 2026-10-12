<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $name = "raghad";
        $user = User::all();
        return view('home',compact('name','user'));
    }
}
