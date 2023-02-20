<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Candidat} ;


class CandidatController extends Controller
{
    public function createOneCandidat(Request $request){
        $array = [];
        for($i =0 ; $i < count($request->formation_id); $i++){
            array_push($array, $request->formation_id[$i]);
        }

        $candidat = new Candidat();
        $candidat->nom = $request->nom ;
        $candidat->prenom = $request->prenom ;
        $candidat->sexe = $request->sexe ;
        $candidat->email = $request->email ;
        $candidat->age = $request->age;
        $candidat->niveau_etude = $request->niveau_etude;
        

        if($candidat->save()){
            $candidat->formations()->attach($array);
        }


        return redirect("/candidats");
    }


}
