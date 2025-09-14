<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\waktuabsen;
use App\Models\User;
use App\Models\Siswa;
use App\Models\Kelas;
use App\Models\AbsenManual;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // =========================
        // 1️⃣ Users
        // =========================
        // Pastikan email unik, aman dijalankan berkali-kali
        User::firstOrCreate(
            ['email' => 'test@example.com'],
            [
                'name' => 'Test User',
                'password' => bcrypt('password123'), // password bisa disesuaikan
            ]
        );

        // =========================
        // 2️⃣ Kelas
        // =========================
        $kelasList = [
            ['nama_kelas' => 'VII A'],
            ['nama_kelas' => 'VII B'],
            ['nama_kelas' => 'VIII A'],
            ['nama_kelas' => 'VIII B'],
        ];

        foreach ($kelasList as $k) {
            Kelas::firstOrCreate($k);
        }


        // =========================
        // 3️⃣ Siswa
        // =========================
        $siswaList = [
            [
                'nama' => 'Naufal',
                'nis' => '120001',
                'jenis_kelamin' => 'L',
                'kelas_id' => 1, // pastikan ID kelas sesuai di DB
                'no_hp' => '08123456789',
                'uid' => '1',
            ],
            [
                'nama' => 'Syafa',
                'nis' => '120002',
                'jenis_kelamin' => 'P',
                'kelas_id' => 1,
                'no_hp' => '08123456789',
                'uid' => '2',
            ],
        ];

        foreach ($siswaList as $s) {
            Siswa::firstOrCreate(
                ['nis' => $s['nis']], // pastikan NIS unik
                $s
            );
        }

        $hariList = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat'];
        foreach ($hariList as $hari) {
            Waktuabsen::create([
                'hari'         => $hari,
                'jam_masuk'    => '07:00:00',
                'batas_masuk'  => '07:30:00',
                'jam_pulang'   => '15:00:00',
                'batas_pulang' => '16:00:00',
            ]);
        }

        AbsenManual::create([
            'status' => false
        ]);



        // =========================
        // 4️⃣ Optional: faker untuk data tambahan
        // =========================
        // Kelas tambahan otomatis
        // Kelas::factory()->count(2)->create();
        // Siswa tambahan otomatis
        // Siswa::factory()->count(50)->create();
    }
}
