<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\information_midias;

class ObraController extends Controller
{

    public function information($name) {

        $information = information_midias::all();



        return view('obra',['information' => $information],['name' => $name]);


    }

}
