<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formation ;



class FormationController extends Controller
{
    public function createOneFormation(Request $request){
        dd($request->all()) ;
    }
}
