<?php

namespace App\Models;

use App\Models\Archive;
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
    public function genre(): BelongsTo
    {
        return $this->belongsTo(Genre::class, 'genre_id', 'categorie_id');
    }
    public function archives(): HasMany
    {
        return $this->hasMany(Archive::class);
    }
}
