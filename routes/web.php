<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/siswa', function () {
    return view('/siswa/siswa');
})->name('siswa');

Route::get('/absen', function () {
    return view('absen');
})->name('absen');

Route::get('/absen', function () {
    $absen = [
        'jam_masuk' => '06:30',
        'batas_masuk' => '07:00',
        'jam_keluar' => '13:00',
        'batas_keluar' => '13:30',
    ];

    return view('absen', compact('absen'));
})->name('absen');


Route::get('/kelas', function () {
    return view('kelas/semuakelas');
})->name('kelas');

Route::get('/kelas/{kelas}', function ($kelas) {
    $siswa = collect([
        ['nama' => 'Keyla Amanda', 'nis' => '120001'],
        ['nama' => 'Alya Nabila', 'nis' => '120002'],
    ]);

    return view('kelas.siswaperkelas', compact('kelas', 'siswa'));
})->name('atur.kelas');

// Route::get('/user', function () {
//     return view('user.user');
// })->name('user');

Route::get('/users', function () {
    $users = collect([
        ['id' => 1, 'name' => 'Rizki Syafa', 'email' => 'rizki@example.com', 'role' => 'admin'],
        ['id' => 2, 'name' => 'Alya Nabila', 'email' => 'alya@example.com', 'role' => 'guru'],
        ['id' => 3, 'name' => 'Fikri Akbar', 'email' => 'fikri@example.com', 'role' => 'guru'],
    ]);

    return view('user.user', compact('users'));
})->name('user.list');

Route::get('/users/tambahuser', function () {
    return view('user.tambahuser');
})->name('user.tambah');

Route::get('/users/edit/{id}', function ($id) {
    $user = collect([
        ['id' => 1, 'name' => 'Rizki Syafa', 'email' => 'rizki@example.com', 'role' => 'admin'],
        ['id' => 2, 'name' => 'Alya Nabila', 'email' => 'alya@example.com', 'role' => 'guru'],
    ])->firstWhere('id', $id);

    return view('user.edituser', compact('user'));
})->name('user.edit');

Route::get('/siswa/tambahsiswa', function () {
    return view('/siswa/tambahsiswa');
})->name('tambahsiswa');

Route::get('/siswa/edit/{id}', function ($id) {
    return view('siswa.editsiswa', ['id' => $id]);
})->name('editsiswa');

Route::get('/riwayatabsen/{id}', function ($id) {
    return view('siswa.riwayatabsen', ['id' => $id]);
})->name('riwayatabsen.siswa');

Route::get('/riwayat-absen', function () {
    $data = [
        [
            'nama' => 'Keyla Amanda',
            'kelas' => '7A',
            'tanggal' => '2025-07-10',
            'status' => 'Hadir',
            'masuk' => '06:55',
            'keluar' => '13:00',
            'keterangan' => '-',
        ],
    ];

    return view('siswa.riwayatsemua', compact('data'));
})->name('riwayatabsen.semua');

Route::get('/export-absen', function () {
    return Excel::download(new RiwayatAbsenExport, 'riwayat-absen.xlsx');
})->name('exportabsen');

Route::delete('/riwayat-absen/delete', function () {
    return redirect()->back()->with('success', 'Semua riwayat absen telah dihapus.');
})->name('deleteabsen');