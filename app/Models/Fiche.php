<?php

namespace App\Models;

use App\Models\Categorie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Fiche extends Model
{
    protected $table = 'fiches';
    protected $primaryKey = 'id';
    protected $guarded = [];
    
    public function category(): BelongsTo
    {
        return $this->belongsTo(Categorie::class, 'categorie_id', 'id');
    }
}
