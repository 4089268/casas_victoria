<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;
    use HasUuids;

    protected $fillable = [
        'id',
        'title',
        'path',
        'extension',
        'house_id'
    ];
}
