<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Siswa;
use App\Models\Attendance;
use App\Http\Controllers\Controller; // 🔥 tambahkan ini

class AbsensiController extends Controller
{
    public function scan(Request $request)
    {
        $data = $request->validate([
            'uid' => 'required|string',
            'status' => 'required|string'
        ]);

        $uid = $data['uid'];
        $status = $data['status'] ?? 'masuk';
        $now = Carbon::now();

        $siswa = Siswa::where('uid', $uid)->first();

        if (!$siswa) {
            return response()->json([
                'uid' => $uid,
                'message' => 'Kartu belum terdaftar'
            ], 404);
        }

        $sudahabsen = Attendance::where('siswa_id', $siswa->id)
            ->whereDate('recorded_at', $now->toDateString())
            ->where('status', $status)
            ->first();

        if ($sudahabsen) {
            return response()->json([
                'siswa' => $siswa,
                'message' => 'Sudah absen ' . $status
            ]);
        }

        $attendance = Attendance::create([
            'siswa_id' => $siswa->id,
            'scan_uid' => $uid,
            'status' => $status,
            'recorded_at' => $now,
        ]);

        return response()->json([
            'message'=> 'Berhasil absen',
            'siswa' => $siswa,
            'attendance' => $attendance,
            'keterangan' => $siswa->nama . ' berhasil melakukan absen ' . $status
        ], 201);
    }
}
