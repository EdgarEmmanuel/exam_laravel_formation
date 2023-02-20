<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            "laravel",
            "linux",
            "oracle",
            "java",
            "c#",
            "IOT(internet of things)",
        ];


        foreach($types as $type){
            $data = DB::select('select * from types where name = ?', [$type]);

            if($data == null){
                DB::table('matieres')->insert([
                    'libelle' => $type,
                ]);
            }
        }
    }
}
