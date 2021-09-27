<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class projects extends Model
{
    use HasFactory;

    // No relationship was established (The relationship would have been one to many)
    protected $fillable = ['name',];
}
