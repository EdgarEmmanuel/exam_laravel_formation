<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Formation extends Model
{
    use HasFactory;


    /**
     * One Formation Belongs to One Referentiel
     */
    public function referentiel(): BelongsTo
    {
        return $this->belongsTo(Referentiel::class);
    }




    public function candidats(): BelongsToMany
    {
        return $this->belongsToMany(Candidat::class);
    }


}
