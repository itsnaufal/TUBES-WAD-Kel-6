<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    public function index()
    {
        return view('Admin.main');
    }

    public function lihatsiswa(){
        return view('Admin.lihatsiswa');
    }
}