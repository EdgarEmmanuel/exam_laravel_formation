<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use  App\Models\ { Type, Referentiel, Formation, Candidat };
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
        $referentiels = Referentiel::with("type")->paginate(5);
        
        $types = Type::all();
        $number = count(Referentiel::all());

        return view("pages.referentiel", [
            "referentiels" => $referentiels,
            "types" => $types,
            "number" => $number,
        ]);
    }



    public function PageFormation(){
        $formations = Formation::with("referentiel")->paginate(5);
        
        $referentiels = Referentiel::all();
        $number = count(Formation::all());

        return view("pages.formation", [
            "referentiels" => $referentiels,
            "formations" => $formations,
            "number" => $number,
        ]);
    }




    public function PageCandidat(){
        $candidats = Candidat::paginate(5);
        
        $formations = Formation::all();
        $number = count(Candidat::all());

        return view("pages.candidat", [
            "formations" => $formations,
            "candidats" => $candidats,
            "number" => $number,
        ]);
    }




    public function PageStats(){
        $number_of_candidate_by_formation = DB::select(" select  distinct formation_id , COUNT(candidat_id) as numbers_candidats, nom as libelle_formation 
                                            FROM candidat_formation ca INNER JOIN formations f ON ca.formation_id = f.id 
                                                    GROUP BY formation_id, nom ;") ;

                                                 

        $number_of_formation_by_referentiel = DB::select("SELECT DISTINCT referentiel_id, COUNT(formations.id) as number_formations, referentiels.libelle FROM 
                                                                        formations INNER JOIN referentiels ON 
                                                                formations.referentiel_id = referentiels.id GROUP BY referentiel_id , referentiels.libelle");



        $number_of_candidat_by_sexe = DB::select("SELECT DISTINCT sexe , COUNT(id) as number_of_candidates FROM `candidats` GROUP BY sexe");

        
        dd($number_of_candidat_by_sexe);

        $number_of_formation_by_type = DB::select("SELECT DISTINCT formations.referentiel_id , COUNT(formations.id) as number_of_formations, types.libelle as type_referentiel FROM 
                    formations INNER JOIN referentiels ON formations.referentiel_id = referentiels.id INNER JOIN types ON types.id = referentiels.type_id
                            GROUP BY referentiel_id , formations.nom, types.libelle") ;


        return view("pages.stats_age", 
            [
                "number_of_candidate_by_formation" => $number_of_candidate_by_formation,
                "number_of_formation_by_referentiel" => $number_of_formation_by_referentiel,
                "number_of_candidat_by_sexe" => $number_of_candidat_by_sexe,
                "number_of_formation_by_type" => $number_of_formation_by_type
            ]
        );
    }




}
