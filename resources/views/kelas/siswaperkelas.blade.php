@extends('layouts.sidebar')

@section('content')
<div class="w-full p-6">
    <!-- Judul Halaman -->
    <h1 class="text-3xl font-bold text-gray-800 mb-4">Daftar Siswa Kelas {{ $kelas }}</h1>

    <!-- Search -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-6 gap-4">
        <div class="flex items-center space-x-4">
            <div class="relative">
                <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                <input type="text" placeholder="Cari nama siswa..."
                    class="pl-10 pr-4 py-2 w-72 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm">
            </div>
            <button
                class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-lg text-sm font-medium shadow-sm transition">
                Cari
            </button>
        </div>
    </div>

    <!-- Tabel Data -->
    <div class="bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden">
        <table class="w-full text-sm text-left text-gray-700">
            <thead class="bg-gray-100 text-gray-800 font-semibold">
                <tr>
                    <th class="px-6 py-4">No</th>
                    <th class="px-6 py-4">Nama</th>
                    <th class="px-6 py-4">NIS</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @forelse ($siswa as $index => $item)
                    <tr class="hover:bg-gray-50 transition">
                        <td class="px-6 py-3">{{ $index + 1 }}</td>
                        <td class="px-6 py-3">{{ $item['nama'] }}</td>
                        <td class="px-6 py-3">{{ $item['nis'] }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="px-6 py-4 text-center text-gray-500">Tidak ada siswa dalam kelas ini.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection

@push('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
@endpush
