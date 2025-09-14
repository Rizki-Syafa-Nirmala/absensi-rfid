@extends('layouts.sidebar')

@section('content')
<div class="flex flex-col min-h-screen p-4 md:p-6 bg-gray-50 space-y-6">

    <!-- Header & Search -->
    <div class="flex flex-col md:flex-row md:items-center md:justify-between space-y-4 md:space-y-0">
        <div class="relative flex-1 max-w-md">
            <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
            <input type="text" placeholder="Search siswa..."
                class="pl-10 pr-4 py-2 w-full border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all">
        </div>
        <button class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-xl font-medium md:ml-4">
            Cari
        </button>
    </div>

    <!-- Button tambah siswa -->
    <div class="flex justify-end md:justify-start">
        <a href="{{ route('tambahsiswa') }}"
            class="bg-blue-600 hover:bg-blue-700 text-white w-12 h-12 rounded-full flex items-center justify-center shadow-md hover:shadow-lg transition-all">
            <i class="fas fa-plus"></i>
        </a>
    </div>

    <!-- Tabel data -->
    <div class="bg-white rounded-2xl shadow-md border border-gray-200 overflow-x-auto">
        <table class="w-full min-w-[600px]">
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
                @foreach ($datasiswa as $siswa)
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 text-sm text-gray-900">{{ $siswa->nama }}</td>
                    <td class="px-6 py-4 text-sm text-gray-900">{{ $siswa->nis }}</td>
                    <td class="px-6 py-4 text-sm text-gray-900">{{ $siswa->kelas->nama_kelas }}</td>
                    <td class="px-6 py-4 text-sm text-gray-900">{{ $siswa->no_hp }}</td>
                    <td class="px-6 py-4 text-sm flex flex-wrap gap-2">
                        <a href="{{ route('riwayatabsen.siswa', $siswa->id) }}"
                            class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded-lg inline-flex items-center space-x-1 text-xs transition-all">
                            <i class="fas fa-clock"></i>
                            <span>Riwayat</span>
                        </a>
                        <a href="{{ route('editsiswa', $siswa->id) }}"
                            class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded-lg inline-flex items-center space-x-1 text-xs transition-all">
                            <i class="fas fa-pen"></i>
                            <span>Edit</span>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="flex justify-center mt-4">
        <nav class="flex flex-wrap items-center gap-2">
            {{-- Tombol Prev --}}
            @if ($datasiswa->onFirstPage())
                <span class="w-8 h-8 flex items-center justify-center rounded-lg border border-gray-300 text-gray-400 cursor-not-allowed">
                    <i class="fas fa-chevron-left text-xs"></i>
                </span>
            @else
                <a href="{{ $datasiswa->previousPageUrl() }}"
                    class="w-8 h-8 flex items-center justify-center rounded-lg border border-gray-300 text-gray-500 hover:bg-gray-50 transition-all">
                    <i class="fas fa-chevron-left text-xs"></i>
                </a>
            @endif

            {{-- Nomor halaman --}}
            @for ($i = 1; $i <= $datasiswa->lastPage(); $i++)
                @if ($i == $datasiswa->currentPage())
                    <span class="w-8 h-8 flex items-center justify-center rounded-lg bg-blue-600 text-white font-medium">{{ $i }}</span>
                @else
                    <a href="{{ $datasiswa->url($i) }}"
                        class="w-8 h-8 flex items-center justify-center rounded-lg border border-gray-300 text-gray-500 hover:bg-gray-50 transition-all">{{ $i }}</a>
                @endif
            @endfor

            {{-- Tombol Next --}}
            @if ($datasiswa->hasMorePages())
                <a href="{{ $datasiswa->nextPageUrl() }}"
                    class="w-8 h-8 flex items-center justify-center rounded-lg border border-gray-300 text-gray-500 hover:bg-gray-50 transition-all">
                    <i class="fas fa-chevron-right text-xs"></i>
                </a>
            @else
                <span class="w-8 h-8 flex items-center justify-center rounded-lg border border-gray-300 text-gray-400 cursor-not-allowed">
                    <i class="fas fa-chevron-right text-xs"></i>
                </span>
            @endif
        </nav>
    </div>

</div>
@endsection

@push('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
@endpush
