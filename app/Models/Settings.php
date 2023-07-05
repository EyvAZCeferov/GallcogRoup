<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    use HasFactory;
    protected $table = 'settings';
    protected $fillable = [
        'title',
        'description',
        'slogan',
        'keywords',
        'address',
        'social_media',
        'logo',
        'open_hours',
        'colors',
        'active',
        'slugs'
    ];

    protected $casts = [
        'title' => "json",
        'slugs' => "json",
        'description' => "json",
        'slogan' => "json",
        'keywords' => "json",
        'address' => "json",
        'social_media' => "json",
        'open_hours' => "json",
        'colors' => "json",
        'active' => 'boolean'
    ];
}
