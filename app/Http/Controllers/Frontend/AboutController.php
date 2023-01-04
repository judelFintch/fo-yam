<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
 

    public function about()
    {

        return view('pages.apropos.apropos');
    
    }

    public function vision()
    {
        return view('pages.apropos.vision');
    }


    public function status()
    {

        return view('pages.apropos.status');
    }

    public function reglement()
    {
        return view('pages.apropos.status');
    }

    public function reglements()
    {
    }

}
