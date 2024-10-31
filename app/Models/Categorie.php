<?php

namespace App\Models;

use App\Models\Genre;
use Illuminate\Database\Eloquent\Model;
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
}
