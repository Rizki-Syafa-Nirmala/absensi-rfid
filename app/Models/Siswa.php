<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Siswa extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'nis', 'jenis_kelamin', 'kelas_id', 'uid', 'no_hp'];

    public function attendances() {
        return $this->hasMany(Attendance::class);
    }

    public function kelas()
{
    return $this->belongsTo(Kelas::class, 'kelas_id');
}
}
