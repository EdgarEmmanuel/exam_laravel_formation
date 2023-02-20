<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Referentiel ;


class ReferentielController extends Controller
{

    public function createOneReferentiel(Request $request){

        $is_validated = $request->is_validated == null ? 0 : 1 ;
        $libelle = $request->libelle ;
        $type_id = $request->type_id ;

        Referentiel::create(
            [
                "validated" => $is_validated,
                "libelle" => $libelle,
                "type_id" => $type_id
            ]
        );


        return redirect("/referentiels");
    }

}
