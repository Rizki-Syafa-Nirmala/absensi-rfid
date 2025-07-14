@extends('layouts.sidebar')

@section('content')
<div class="w-full p-6">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Pengaturan Waktu Absen</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-10">
        <div class="bg-white border border-gray-200 rounded-lg p-5 shadow-sm">
            <h2 class="text-lg font-semibold text-gray-800 mb-2">Jam Masuk</h2>
            <p class="text-gray-600 text-sm">{{ $absen['jam_masuk'] ?? '-' }}</p>
        </div>
        <div class="bg-white border border-gray-200 rounded-lg p-5 shadow-sm">
            <h2 class="text-lg font-semibold text-gray-800 mb-2">Batas Absen Masuk</h2>
            <p class="text-gray-600 text-sm">{{ $absen['batas_masuk'] ?? '-' }}</p>
        </div>
        <div class="bg-white border border-gray-200 rounded-lg p-5 shadow-sm">
            <h2 class="text-lg font-semibold text-gray-800 mb-2">Jam Keluar</h2>
            <p class="text-gray-600 text-sm">{{ $absen['jam_keluar'] ?? '-' }}</p>
        </div>
        <div class="bg-white border border-gray-200 rounded-lg p-5 shadow-sm">
            <h2 class="text-lg font-semibold text-gray-800 mb-2">Batas Absen Keluar</h2>
            <p class="text-gray-600 text-sm">{{ $absen['batas_keluar'] ?? '-' }}</p>
        </div>
    </div>

    <div class="bg-white border border-gray-200 rounded-lg p-6 shadow-sm max-w-xl">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Edit Waktu Absen</h2>
        <form action="#" method="GET">
            <div class="grid grid-cols-1 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Jam Masuk</label>
                    <input type="time" name="jam_masuk" value="{{ $absen['jam_masuk'] ?? '' }}"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 text-sm focus:ring-2 focus:ring-blue-500">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Batas Absen Masuk</label>
                    <input type="time" name="batas_masuk" value="{{ $absen['batas_masuk'] ?? '' }}"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 text-sm focus:ring-2 focus:ring-blue-500">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Jam Keluar</label>
                    <input type="time" name="jam_keluar" value="{{ $absen['jam_keluar'] ?? '' }}"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 text-sm focus:ring-2 focus:ring-blue-500">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Batas Absen Keluar</label>
                    <input type="time" name="batas_keluar" value="{{ $absen['batas_keluar'] ?? '' }}"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 text-sm focus:ring-2 focus:ring-blue-500">
                </div>
            </div>

            <button type="submit"
                class="mt-6 bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg font-medium shadow-sm">
                Simpan
            </button>
        </form>
    </div>
</div>
@endsection

@push('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">