@extends('layouts.sidebar')

@section('content')
<div class="w-full p-6 space-y-6">
    <h1 class="text-3xl font-bold text-gray-800">Pengaturan Waktu Absen</h1>

    {{-- Tombol Absensi Manual --}}
    <div class="bg-white border border-gray-200 rounded-2xl shadow-md p-6 flex flex-col md:flex-row md:items-center md:justify-between gap-4">
        <div>
            <h2 class="text-xl font-semibold text-gray-700">Absensi Kapan Saja</h2>
            <p class="text-sm text-gray-500">Izinkan siswa melakukan absensi di luar jam yang ditentukan.</p>
        </div>
        <form action="" method="POST">
            @csrf
            <button type="submit"
                class="relative inline-flex items-center px-5 py-2 rounded-full text-white text-sm font-medium transition-all duration-200
                {{ $absenmanual ? 'bg-green-600 hover:bg-green-700 shadow-md' : 'bg-red-600 hover:bg-red-700 shadow-md' }}">
                @if ($absenmanual)
                    <i class="fa fa-toggle-on mr-2"></i> Aktif
                @else
                    <i class="fa fa-toggle-off mr-2"></i> Nonaktif
                @endif
            </button>
        </form>
    </div>

    {{-- Tabel Daftar Waktu Absen --}}
    <div class="bg-white border border-gray-200 rounded-2xl shadow-md overflow-hidden">
        <div class="overflow-x-auto">
            <table class="min-w-full table-auto border-collapse">
                <thead class="bg-gradient-to-r from-gray-100 to-gray-200">
                    <tr>
                        <th class="px-4 py-3 text-left text-sm font-bold text-gray-700 uppercase tracking-wide border-b">Hari</th>
                        <th class="px-4 py-3 text-left text-sm font-bold text-gray-700 uppercase tracking-wide border-b">Jam Masuk</th>
                        <th class="px-4 py-3 text-left text-sm font-bold text-gray-700 uppercase tracking-wide border-b">Batas Masuk</th>
                        <th class="px-4 py-3 text-left text-sm font-bold text-gray-700 uppercase tracking-wide border-b">Jam Pulang</th>
                        <th class="px-4 py-3 text-left text-sm font-bold text-gray-700 uppercase tracking-wide border-b">Batas Pulang</th>
                        <th class="px-4 py-3 text-center text-sm font-bold text-gray-700 uppercase tracking-wide border-b">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($waktuabsens as $absen)
                        <tr class="hover:bg-gray-50 transition duration-150">
                            <td class="px-4 py-3 border-b text-sm text-gray-800 font-medium">{{ $absen->hari }}</td>
                            <td class="px-4 py-3 border-b text-sm text-gray-600">{{ $absen->jam_masuk }}</td>
                            <td class="px-4 py-3 border-b text-sm text-gray-600">{{ $absen->batas_masuk }}</td>
                            <td class="px-4 py-3 border-b text-sm text-gray-600">{{ $absen->jam_pulang }}</td>
                            <td class="px-4 py-3 border-b text-sm text-gray-600">{{ $absen->batas_pulang }}</td>
                            <td class="px-4 py-3 border-b text-center">
                                <a href="{{ route('absen.edit', $absen->id) }}"
                                    class="inline-flex items-center gap-1 bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-lg text-xs font-medium shadow transition-all duration-200">
                                    <i class="fa fa-pen"></i> Edit
                                </a>
                            </td>
                        </tr>
                    @endforeach

                    @if ($waktuabsens->isEmpty())
                        <tr>
                            <td colspan="6" class="px-4 py-6 text-center text-sm text-gray-500">
                                Tidak ada data waktu absen.
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@push('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
@endpush
