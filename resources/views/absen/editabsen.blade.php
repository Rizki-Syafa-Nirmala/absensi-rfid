@extends('layouts.sidebar')

@section('content')
<div class="w-full p-6">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Edit Waktu Absen</h1>

    <div class="bg-white border border-gray-200 rounded-2xl shadow-md p-6 max-w-2xl mx-auto">
        <form action="{{ route('absen.update', $absen->id) }}" method="POST" class="space-y-5">
            @csrf
            @method('PUT')  

            {{-- Jam Masuk --}}
            <div>
                <label for="jam_masuk" class="block text-sm font-medium text-gray-700">Jam Masuk</label>
                <input type="time" id="jam_masuk" name="jam_masuk" value="{{ $absen->jam_masuk }}"
                    class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm">
            </div>

            {{-- Batas Masuk --}}
            <div>
                <label for="batas_masuk" class="block text-sm font-medium text-gray-700">Batas Masuk</label>
                <input type="time" id="batas_masuk" name="batas_masuk" value="{{ $absen->batas_masuk }}"
                    class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm">
            </div>

            {{-- Jam Pulang --}}
            <div>
                <label for="jam_pulang" class="block text-sm font-medium text-gray-700">Jam Pulang</label>
                <input type="time" id="jam_pulang" name="jam_pulang" value="{{ $absen->jam_pulang }}"
                    class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm">
            </div>

            {{-- Batas Pulang --}}
            <div>
                <label for="batas_pulang" class="block text-sm font-medium text-gray-700">Batas Pulang</label>
                <input type="time" id="batas_pulang" name="batas_pulang" value="{{ $absen->batas_pulang }}"
                    class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm">
            </div>

            {{-- Tombol Aksi --}}
            <div class="flex items-center justify-end gap-3">
                <a href="{{ route('absen') }}"
                    class="px-4 py-2 rounded-lg border border-gray-300 text-gray-600 hover:bg-gray-100 text-sm font-medium transition">
                    Batal
                </a>
                <button type="submit"
                    class="px-5 py-2 rounded-lg bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium shadow transition">
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
