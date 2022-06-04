<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Track extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
        'album_id',
        'title',
        'duration',
        'file_name',
    ];

    public function album()
    {
        return $this->belongsTo(Album::class);
    }

    public function getDurationAttribute($value): string
    {
        $duration = strval($value);
        return str_replace(".", ":", $duration);
    }

    public function getBase64track($track_id)
    {
        $track = $this->find($track_id);

        $path = Storage::disk('public')->get('tracks/' . $track->file_name);
    
        return base64_encode($path);
    }
}
