<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cerita_alumni extends Model
{
    use HasFactory;

    protected $table = 'cerita_alumnis';
    protected $fillable = ['title', 'status', 'body'];
}
