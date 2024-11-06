<?php

namespace App\Models;

use App\Models\Fiche;
use App\Models\Genre;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Categorie extends Model
{
    protected $table = 'categorie';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function genre(): BelongsTo
    {
        return $this->belongsTo(Genre::class, 'genre_id', 'id');
    }

    public function fiches(): HasMany
    {
        return $this->hasMany(Fiche::class, 'categorie_id', 'id');
    }
}
