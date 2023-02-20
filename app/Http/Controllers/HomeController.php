<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use  App\Models\Type;


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


}
