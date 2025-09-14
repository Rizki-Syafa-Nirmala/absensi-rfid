@extends('layouts.sidebar')

@section('content')
<div class="w-full max-w-3xl mx-auto bg-gray-50 flex flex-col p-6 md:p-10 min-h-screen space-y-6">
    <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-8">Edit Data Siswa</h1>

    {{-- Form --}}
    <form action="{{ route('updatesiswa', $siswa->id) }}" method="POST" class="space-y-6">
        @csrf
        @method('PUT')

        <div>
            <label class="block text-base font-medium text-gray-700 mb-2">Nama Lengkap</label>
            <input type="text" name="nama" placeholder="Masukkan nama lengkap"
                value="{{ $siswa->nama ?? '' }}"
                class="w-full border border-gray-300 rounded-xl px-4 py-3 text-sm md:text-base focus:ring-2 focus:ring-blue-500 focus:outline-none transition-all">
        </div>

        <div>
            <label class="block text-base font-medium text-gray-700 mb-2">NIS</label>
            <input type="text" name="nis" placeholder="Masukkan NIS"
                value="{{ $siswa->nis ?? '' }}"
                class="w-full border border-gray-300 rounded-xl px-4 py-3 text-sm md:text-base focus:ring-2 focus:ring-blue-500 focus:outline-none transition-all">
        </div>

        <div>
            <label class="block text-base font-medium text-gray-700 mb-2">Kelas</label>
            <select name="kelas_id"
                class="w-full border border-gray-300 rounded-xl px-4 py-3 text-sm md:text-base focus:ring-2 focus:ring-blue-500 focus:outline-none transition-all">
                @foreach ($daftarkelas as $kelas)
                    <option value="{{ $kelas->id }}" {{ $siswa->kelas_id == $kelas->id ? 'selected' : '' }}>
                        {{ $kelas->nama_kelas }}
                    </option>
                @endforeach
            </select>
        </div>

        <div>
            <label class="block text-base font-medium text-gray-700 mb-2">Jenis Kelamin</label>
            <div class="flex flex-col sm:flex-row items-start sm:items-center space-y-2 sm:space-y-0 sm:space-x-8">
                <label class="inline-flex items-center">
                    <input type="radio" name="jenis_kelamin" value="L" {{ $siswa->jenis_kelamin == 'L' ? 'checked' : '' }}
                        class="text-blue-600 focus:ring-blue-500 border-gray-300">
                    <span class="ml-2 text-sm text-gray-700">Laki-laki</span>
                </label>
                <label class="inline-flex items-center">
                    <input type="radio" name="jenis_kelamin" value="P" {{ $siswa->jenis_kelamin == 'P' ? 'checked' : '' }}
                        class="text-blue-600 focus:ring-blue-500 border-gray-300">
                    <span class="ml-2 text-sm text-gray-700">Perempuan</span>
                </label>
            </div>
        </div>

        <div>
            <label class="block text-base font-medium text-gray-700 mb-2">No HP Orang Tua</label>
            <input type="text" name="no_hp" placeholder="08xxxxxxxxxx"
                value="{{ $siswa->no_hp ?? '' }}"
                class="w-full border border-gray-300 rounded-xl px-4 py-3 text-sm md:text-base focus:ring-2 focus:ring-blue-500 focus:outline-none transition-all">
        </div>

        <div>
            <label class="block text-base font-medium text-gray-700 mb-2">No Kartu Absen</label>
            <input type="text" name="uid" placeholder="Masukkan nomor kartu" value="{{ $siswa->uid ?? '' }}"
                class="w-full border border-gray-300 rounded-xl px-4 py-3 text-sm md:text-base focus:ring-2 focus:ring-blue-500 focus:outline-none transition-all">
        </div>

        <div class="pt-4">
            <button type="submit"
                class="w-full md:w-auto bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-xl font-medium text-base transition-all">
                Simpan
            </button>
        </div>
    </form>
</div>
@endsection

@push('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
@endpush
