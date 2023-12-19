<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class doctor extends Model
{
    use HasFactory;

    public function specialist() {
        return $this->belongsTo(specialist::class, 'specialist_id');
    }

}
