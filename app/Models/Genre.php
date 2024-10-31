<?php

namespace App\Models;

use App\Models\Categorie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Genre extends Model
{
    protected $table = 'genres';
    protected $primaryKey = 'id';
    protected $guarded = [];
    
    public function categories(): HasMany
    {
        return $this->hasMany(Categorie::class, 'genre_id', 'id');
    }
}
