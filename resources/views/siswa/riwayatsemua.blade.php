@extends('layouts.sidebar')

@section('content')
<div class="flex min-h-screen bg-gray-50">
    <div class="flex-1 p-6">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Riwayat Absen Semua Siswa</h1>
            <div class="space-x-2">
                <a href="{{ route('exportabsen') }}"
                   class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md text-sm font-medium inline-flex items-center space-x-2">
                    <i class="fas fa-file-excel"></i>
                    <span>Export Excel</span>
                </a>
                <form action="{{ route('deleteabsen') }}" method="POST" onsubmit="return confirm('Yakin ingin hapus semua riwayat absen?')" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-md text-sm font-medium inline-flex items-center space-x-2">
                        <i class="fas fa-trash-alt"></i>
                        <span>Hapus Semua</span>
                    </button>
                </form>
            </div>
        </div>

        <!-- Tabel data absen -->
        <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-100 border-b border-gray-200">
                    <tr>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-gray-900">Nama Siswa</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-gray-900">Kelas</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-gray-900">Tanggal</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-gray-900">Status</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-gray-900">Absen Masuk</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-gray-900">Absen Keluar</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-gray-900">Keterangan</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach ($data as $absen)
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 text-sm text-gray-900">{{ $absen['nama'] }}</td>
                        <td class="px-6 py-4 text-sm text-gray-900">{{ $absen['kelas'] }}</td>
                        <td class="px-6 py-4 text-sm text-gray-900">{{ $absen['tanggal'] }}</td>
                        <td class="px-6 py-4 text-sm font-semibold
                            @if($absen['status'] == 'Hadir') text-green-600
                            @elseif($absen['status'] == 'Izin') text-yellow-600
                            @elseif($absen['status'] == 'Alpha') text-red-600
                            @else text-gray-600 @endif">
                            {{ $absen['status'] }}
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-900">{{ $absen['masuk'] }}</td>
                        <td class="px-6 py-4 text-sm text-gray-900">{{ $absen['keluar'] }}</td>
                        <td class="px-6 py-4 text-sm text-gray-900">{{ $absen['keterangan'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@push('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">