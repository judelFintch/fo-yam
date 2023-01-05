<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class ActivityController extends Controller
{
    //
    public function activity()
    {

        return view("pages.activites.activity");

    }

}
