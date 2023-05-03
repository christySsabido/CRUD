<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    


    public function topics (): HasMany
    {
        return $this->hasMany(Topic::class);
    }
}
