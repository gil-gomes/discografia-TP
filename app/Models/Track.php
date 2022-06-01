<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
        'album_id',
        'title',
        'duration',
    ];

    public function album()
    {
        return $this->belongsTo(Album::class);
    }

    public function getDurationAttribute($value): string
    {
        $duration = strval($value);
        strlen($duration) < 5 ? $duration = "0$duration" : null;
        return str_replace(".", ":", $duration);
    }
}
