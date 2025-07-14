@extends('layouts.sidebar')

@section('content')
<div class="w-full p-6">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Tambah User Baru</h1>

    <div class="bg-white rounded-2xl shadow-lg p-8 max-w-xl space-y-6">
        <form action="#" method="POST" class="space-y-6">
            {{-- @csrf --}}

            <div>
                <label for="name" class="block text-sm font-semibold text-gray-700 mb-1">Nama Lengkap</label>
                <input type="text" id="name" name="name"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none"
                    placeholder="Masukkan nama lengkap">
            </div>

            <div>
                <label for="email" class="block text-sm font-semibold text-gray-700 mb-1">Email</label>
                <input type="email" id="email" name="email"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none"
                    placeholder="contoh@email.com">
            </div>

            <div>
                <label for="password" class="block text-sm font-semibold text-gray-700 mb-1">Password</label>
                <input type="password" id="password" name="password"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none"
                    placeholder="••••••••">
            </div>

            <div>
                <label for="role" class="block text-sm font-semibold text-gray-700 mb-1">Role</label>
                <select id="role" name="role"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none">
                    <option value="">Pilih Role</option>
                    <option value="admin">Admin</option>
                    <option value="guru">Operator</option>
                </select>
            </div>

            <div class="flex justify-end space-x-3 pt-4">
                <a href="{{ route('user.list') }}"
                   class="text-gray-500 hover:text-gray-700 text-sm font-medium transition">Batal</a>
                <button type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-lg text-sm font-medium transition-all">
                    Simpan
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

@push('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
@endpush
