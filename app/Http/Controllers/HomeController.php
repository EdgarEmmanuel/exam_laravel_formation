<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use  App\Models\ { Type, Referentiel, Formation };
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function Home(){
        return view("pages.home");
    }



    public function PageType()
    {
        $types = DB::table("types")->paginate(4);

        return view("pages.type", [
            "types" => $types,
            "number" => count(Type::all())
        ]);
    }




    public function PageReferentiel(){
        $referentiels = DB::table("referentiels")->paginate(5);
        
        $types = Type::all();
        $number = count(Referentiel::all());

        return view("pages.referentiel", [
            "referentiels" => $referentiels,
            "types" => $types,
            "number" => $number,
        ]);
    }



    public function PageFormation(){
        $formations = DB::table("formations")->paginate(5);
        
        $referentiels = Referentiel::all();
        $number = count(Formation::all());

        return view("pages.formation", [
            "referentiels" => $referentiels,
            "formations" => $formations,
            "number" => $number,
        ]);
    }




}
