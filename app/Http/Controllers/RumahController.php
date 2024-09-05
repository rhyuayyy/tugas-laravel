<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RumahController extends Controller
{
    public function index(){

        $data = ['name' => 'Lestari Rahayu'];
        return view ("rumah", $data);
    }
}
