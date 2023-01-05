<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ActuController extends Controller
{
    //

    public function actu()
    {

        return view("pages.actualites.actu");
    
    }
}
