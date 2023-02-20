<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Type ;


class TypeController extends Controller
{

    public function createOneType(Request $request){

        $libelle = $request->nom ;

        Type::create([ "libelle" => $libelle ]);

        return redirect("/types");
    }

}
