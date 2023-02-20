<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formation ;



class FormationController extends Controller
{


    public function createOneFormation(Request $request)
    {

        $is_started = $request->is_started == null ? 0 : 1 ;
        $libelle = $request->libelle ;
        $referentiel_id = $request->referentiel_id ;
        $description = $request->description ;
        $date_debut = $request->date_debut ;
        $duree = $request->duree ;


        Formation::create(
            [
                "is_started" => $is_started,
                "nom" => $libelle,
                "referentiel_id" => $referentiel_id,
                "description" => $description,
                "date_debut" => $date_debut,
                "duree" => $duree
            ]
        );


        return redirect("/formations");
    }


}
