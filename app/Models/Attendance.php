<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $fillable = ['siswa_id', 'scan_uid', 'status', 'recorded_at'];

    protected $dates = ['recorded_at'];

    public function siswa() {
        return $this->belongsTo(Siswa::class);
    }
}
