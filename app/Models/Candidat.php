<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Candidat extends Model
{
    use HasFactory;

    protected $fillable = [
        "nom",
        "prenom",
        "age",
        "email",
        "niveau_etude",
        "sexe"
    ];


    public function formations(): BelongsToMany
    {
        return $this->belongsToMany(Formation::class, "candidat_formation");
    }
}
