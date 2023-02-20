<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Referentiel extends Model
{
    use HasFactory;


    /**
     * One Referentiel CAN have many Formation
     */
    public function formations(): HasMany
    {
        return $this->hasMany(Formation::class);
    }


    /**
     * one referentiel belongs to one Type
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(Type::class);
    }

}
