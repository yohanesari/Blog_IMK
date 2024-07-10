<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;
    // Pendaftaran.php (Model)
    protected $fillable = ['id', 'name', 'email', 'notelp', 'gender', 'tgl_lahir', 'nilai', 'alamat'];
    protected $casts = ['tgl_lahir' => 'date'];
}
