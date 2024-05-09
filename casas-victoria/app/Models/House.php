<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class House extends Model
{
    use HasFactory;
    use HasUuids;

    protected $fillable = [
        'title',
        'description',
        'bedrooms',
        'bathrooms',
        'garages',
        'surface',
        'dimensions',
        'address',
        'latitude',
        'longitude'
    ];

    public function photos(): HasMany
    {
        return $this->hasMany(Photo::class);
    }
    
}
