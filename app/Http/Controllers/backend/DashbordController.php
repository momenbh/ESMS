<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashbordController extends Controller
{
    public function dashboard(){
        return view('Backend.pages.dashboard.dashboard');
    }
}
