<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Archive extends Model
{
    protected $table = 'archive';
    protected $primaryKey = 'id';
    protected $guarded = [];
    public function fiche(): BelongsTo
    {
        return $this->belongsTo(Fiche::class);
    }
}
