@extends('layouts.sidebar')

@section('content')
<div class="flex min-h-screen bg-gray-50">
    <div class="flex-1 p-6">
        <!-- Header: Search & Filter -->
        <div class="flex flex-col md:flex-row items-start md:items-center justify-between mb-6 gap-4">

            <!-- Search -->

            <div class="w-full md:w-auto flex items-center gap-3">
                <div class="relative flex-1">
                    <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                    <input type="text" placeholder="Cari kelas..."
                        class="pl-10 pr-4 py-2 w-full md:w-80 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent shadow-sm transition text-sm">
                </div>
                <button
                    class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-lg text-sm font-medium shadow-md transition">
                    Cari
                </button>
            </div>
        </div>

        <!-- Tabel data -->
        <div class="bg-white rounded-xl border border-gray-200 shadow-md overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-700">
                    <thead class="bg-gradient-to-r from-blue-50 to-blue-100 text-gray-800 font-semibold">
                        <tr>
                            <th class="px-6 py-4">NO</th>
                            <th class="px-6 py-4">Kelas</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @foreach ($daftarkelas as $kelas)
                            <tr onclick="window.location='{{ route('siswa.kelas', ['kelas' => $kelas->id]) }}'" class="hover:bg-blue-50 transition">
                                <td class="px-6 py-4 font-medium text-gray-600">{{ $loop->iteration }}</td>
                                <td class="px-6 py-4">
                                    <span class="px-3 py-1 text-xs font-semibold bg-blue-100 text-blue-700 rounded-full">
                                        {{ $kelas->nama_kelas }}
                                    </span>
                                </td>
                            </tr>
                        @endforeach
                        @if ($daftarkelas->isEmpty())
                            <tr>
                                <td colspan="2" class="px-6 py-4 text-center text-gray-500">
                                    Belum ada data kelas.
                                </td>
                            </tr>
                        @endif
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
