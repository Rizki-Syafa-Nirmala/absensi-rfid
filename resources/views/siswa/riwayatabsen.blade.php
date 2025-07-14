@extends('layouts.sidebar')

@section('content')
<div class="flex min-h-screen bg-gray-50">
    <div class="flex-1 p-6">
        <h1 class="text-[28px] font-bold text-gray-800 mb-6">
            Riwayat Absen - <span class="text-blue-600">Keyla Amanda</span>
        </h1>

        <div class="bg-white rounded-lg shadow-sm border border-gray-200">
            <div class="overflow-x-auto">
                <table class="w-full text-sm">
                    <thead class="bg-gray-100 border-b border-gray-200">
                        <tr>
                            <th class="px-6 py-4 text-left font-semibold text-gray-900">Kelas</th>
                            <th class="px-6 py-4 text-left font-semibold text-gray-900">Tanggal</th>
                            <th class="px-6 py-4 text-left font-semibold text-gray-900">Status</th>
                            <th class="px-6 py-4 text-left font-semibold text-gray-900">Absen Masuk</th>
                            <th class="px-6 py-4 text-left font-semibold text-gray-900">Absen Keluar</th>
                            <th class="px-6 py-4 text-left font-semibold text-gray-900">Keterangan</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 text-gray-900">7A</td>
                            <td class="px-6 py-4 text-gray-900">2025-07-12</td>
                            <td class="px-6 py-4 font-semibold text-green-600">Hadir</td>
                            <td class="px-6 py-4 text-gray-900">07:12</td>
                            <td class="px-6 py-4 text-gray-900">13:05</td>
                            <td class="px-6 py-4 text-gray-900">-</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 text-gray-900">7A</td>
                            <td class="px-6 py-4 text-gray-900">2025-07-11</td>
                            <td class="px-6 py-4 font-semibold text-yellow-600">Izin</td>
                            <td class="px-6 py-4 text-gray-900">-</td>
                            <td class="px-6 py-4 text-gray-900">-</td>
                            <td class="px-6 py-4 text-gray-900">Sakit demam</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 text-gray-900">7A</td>
                            <td class="px-6 py-4 text-gray-900">2025-07-10</td>
                            <td class="px-6 py-4 font-semibold text-red-600">Alpha</td>
                            <td class="px-6 py-4 text-gray-900">-</td>
                            <td class="px-6 py-4 text-gray-900">-</td>
                            <td class="px-6 py-4 text-gray-900">Tanpa keterangan</td>
                        </tr>
                        <!-- Tambah baris dummy lainnya jika perlu -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
@endpush
