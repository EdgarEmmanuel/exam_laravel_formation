<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use  App\Models\ { Type, Referentiel };
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function Home(){
        return view("pages.home");
    }



    public function PageType()
    {
        $types = DB::table("types")->paginate(4);
        $types_number = Type::all();

        return view("pages.type", [
            "types" => $types,
            "number" => count($types_number)
        ]);
    }




    public function PageReferentiel(){
        
        $referentiels_number = Referentiel::all();
        $referentiels = DB::table("referentiels")->paginate(5);
        
        $types = Type::all();
        $number = count($referentiels_number);

        return view("pages.referentiel", [
            "referentiels" => $referentiels,
            "types" => $types,
            "number" => $number,
        ]);
    }


}
