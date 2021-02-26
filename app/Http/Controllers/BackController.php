<?php

namespace App\Http\Controllers;

use App\Models\Navlink;
use Illuminate\Http\Request;

class BackController extends Controller
{
    ////  INDEX

    public function index(){
        // Nav
        $navLinks = Navlink::all();

        return view('backoffice.backoffice', compact('navLinks'));
    }

    ////  CREATE


    ////  STORE


    ////  SHOW


    ////  EDIT


    ////  UPDATE


    ////  DELETE


    //// DELETEALL

}
