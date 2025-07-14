@extends('layouts.sidebar')

@section('content')
<div class="flex min-h-screen bg-gray-50">
    <!-- Main Content -->
    <div class="flex-1 p-6">
        <div class="flex items-center justify-between mb-6">
            <div class="flex items-center space-x-4">
                <div class="relative flex-1">
                    <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                    <input type="text" placeholder="Search" class="pl-10 pr-4 py-2 w-80 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>
                <button class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg font-medium">
                    Cari
                </button>
            </div>
        </div>

        <!-- Button tambah siswa -->
        <a href="{{ route('tambahsiswa') }}" 
            class="bg-blue-600 hover:bg-blue-700 text-white w-10 h-10 rounded-lg flex items-center justify-center mb-4">
            <i class="fas fa-plus"></i>
        </a>

        <!-- Tabel data -->
        <div class="bg-white rounded-lg shadow-sm border border-gray-200">
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-gray-100 border-b border-gray-200">
                        <tr>
                            <th class="px-6 py-4 text-left text-sm font-semibold text-gray-900">Nama Siswa</th>
                            <th class="px-6 py-4 text-left text-sm font-semibold text-gray-900">NIS</th>
                            <th class="px-6 py-4 text-left text-sm font-semibold text-gray-900">Kelas</th>
                            <th class="px-6 py-4 text-left text-sm font-semibold text-gray-900">No HP Orang Tua</th>
                            <th class="px-6 py-4 text-left text-sm font-semibold text-gray-900">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 text-sm text-gray-900">Keyla Amanda</td>
                            <td class="px-6 py-4 text-sm text-gray-900">2023001</td>
                            <td class="px-6 py-4 text-sm text-gray-900">7A</td>
                            <td class="px-6 py-4 text-sm text-gray-900">0812-3456-7890</td>
                            <td class="px-6 py-4 text-sm">
                            <a href="{{ route('riwayatabsen.siswa', 1) }}" class="text-xs bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded-md inline-flex items-center space-x-1">
                                <i class="fas fa-clock"></i>
                                <span>Riwayat</span>
                                </a>
                            <a href="{{ route('editsiswa', 1) }}" class="text-xs bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded-md inline-flex items-center space-x-1">
                                <i class="fas fa-pen"></i>
                                <span>Edit</span>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Pagination -->
        <div class="flex justify-center mt-6">
            <nav class="flex items-center space-x-2">
                <button class="w-8 h-8 flex items-center justify-center rounded-lg border border-gray-300 text-gray-500 hover:bg-gray-50">
                    <i class="fas fa-chevron-left text-xs"></i>
                </button>
                <button class="w-8 h-8 flex items-center justify-center rounded-lg bg-blue-600 text-white font-medium">
                    1
                </button>
                <button class="w-8 h-8 flex items-center justify-center rounded-lg border border-gray-300 text-gray-500 hover:bg-gray-50">
                    <i class="fas fa-chevron-right text-xs"></i>
                </button>
            </nav>
        </div>
    </div>
</div>
@endsection

@push('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
@endpush
