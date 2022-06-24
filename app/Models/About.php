<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $fillable = [
        'title',
        'content',
        'image',
        'type',
        'time',
        'created_at'
    ];
}
