<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use  App\Models\ { Type, Referentiel };


class HomeController extends Controller
{
    public function Home(){
        return view("pages.home");
    }



    public function PageType()
    {
        $types = Type::all();

        return view("pages.type", [
            "types" => $types,
            "number" => count($types)
        ]);
    }




    public function PageReferentiel(){
        
        $referentiels = Referentiel::all();
        $types = Type::all();
        $number = count($referentiels);

        return view("pages.referentiel", [
            "referentiels" => $referentiels,
            "types" => $types,
            "number" => $number,
        ]);
    }


}
