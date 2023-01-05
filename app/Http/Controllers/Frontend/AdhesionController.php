<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AdhesionController extends Controller
{
    //

    public function adhesion()
    {

        return view("pages.adhesion.adhesion");
    }
}
