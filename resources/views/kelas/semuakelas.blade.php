@extends('layouts.sidebar')

@section('content')
<div class="flex min-h-screen bg-gray-50">
    <div class="flex-1 p-6">
        <div class="flex flex-col md:flex-row items-start md:items-center justify-between mb-6 space-y-4 md:space-y-0">
            <div class="flex items-center space-x-4">
                <div class="relative">
                    <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                    <input type="text" placeholder="Search"
                        class="pl-10 pr-4 py-2 w-80 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>
                <button class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg font-medium">
                    Cari
                </button>
            </div>

            <div>
                <select onchange="if(this.value) window.location.href=this.value"
                    class="border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 px-4 py-2">
                    <option selected disabled>Pilih Kelas</option>
                    <option value="{{ route('atur.kelas', ['kelas' => '7A']) }}">Kelas 7A</option>
                    <option value="{{ route('atur.kelas', ['kelas' => '7B']) }}">Kelas 7B</option>
                </select>
            </div>
        </div>

        <!-- Tabel data -->
        <div class="bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-700">
                    <thead class="bg-gray-100 text-gray-800 text-sm font-semibold">
                        <tr>
                            <th class="px-6 py-4">ID</th>
                            <th class="px-6 py-4">Kelas</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-6 py-4">1</td>
                            <td class="px-6 py-4">7A</td>
                        </tr>
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-6 py-4">2</td>
                            <td class="px-6 py-4">7B</td>
                        </tr>
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
