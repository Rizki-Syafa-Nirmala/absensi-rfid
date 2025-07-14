@extends('layouts.sidebar')

@section('content')
<div class="w-full max-w-screen-xl bg-gray-50 flex flex-col box-border p-6">
    <h1 class="text-3xl font-bold font-poppins text-gray-800 mb-8">Edit Data Siswa</h1>

    {{-- Form --}}
    <form action="#" method="POST" class="space-y-5 max-w-2xl">
        @csrf
        <div>
            <label class="block text-base font-medium text-gray-700 mb-1">Nama Lengkap</label>
            <input
                type="text"
                name="nama_lengkap"
                placeholder="Masukkan nama lengkap"
                class="w-full border border-gray-300 rounded-lg px-4 py-2 text-sm focus:ring-2 focus:ring-blue-500 focus:outline-none">
        </div>
        <div>
            <label class="block text-base font-medium text-gray-700 mb-1">NIS</label>
            <input
                type="text"
                name="nis"
                placeholder="Masukkan NIS"
                class="w-full border border-gray-300 rounded-lg px-4 py-2 text-sm focus:ring-2 focus:ring-blue-500 focus:outline-none">
        </div>
        <div>
            <label class="block text-base font-medium text-gray-700 mb-1">Kelas</label>
            <input
                type="text"
                name="kelas"
                placeholder="Contoh: 7A"
                class="w-full border border-gray-300 rounded-lg px-4 py-2 text-sm focus:ring-2 focus:ring-blue-500 focus:outline-none">
        </div>
        <div>
            <label class="block text-base font-medium text-gray-700 mb-1">No HP Orang Tua</label>
            <input
                type="text"
                name="no_hp"
                placeholder="08xxxxxxxxxx"
                class="w-full border border-gray-300 rounded-lg px-4 py-2 text-sm focus:ring-2 focus:ring-blue-500 focus:outline-none">
        </div>
        <div class="pt-2">
            <button
                type="submit"
                class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg font-medium text-sm transition-all">
                Simpan
            </button>
        </div>
    </form>
</div>
@endsection

@push('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
@endpush
