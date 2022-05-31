<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'launch',
        'record_company',
    ];

    public function traks()
    {
        return $this->hasMany(Track::class);
    }
}