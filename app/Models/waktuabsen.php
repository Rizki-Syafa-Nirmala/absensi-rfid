<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Waktuabsen extends Model
{
    use HasFactory;

    protected $fillable = [
        'hari',
        'jam_masuk',
        'batas_masuk',
        'jam_pulang',
        'batas_pulang',
    ];
}
