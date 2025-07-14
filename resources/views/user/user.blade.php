@extends('layouts.sidebar')

@section('content')
<div class="w-full p-6">
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Manajemen User</h1>
        <a href="{{ route('user.tambah') }}" 
           class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-sm inline-flex items-center space-x-2">
            <i class="fas fa-plus"></i>
            <span>Tambah User</span>
        </a>
    </div>

    <div class="bg-white border border-gray-200 rounded-lg shadow-sm overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-700">
            <thead class="bg-gray-100 text-gray-800 font-semibold">
                <tr>
                    <th class="px-6 py-4">Nama</th>
                    <th class="px-6 py-4">Email</th>
                    <th class="px-6 py-4">Role</th>
                    <th class="px-6 py-4">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach ($users as $user)
                <tr class="hover:bg-gray-50 transition">
                    <td class="px-6 py-4">{{ $user['name'] }}</td>
                    <td class="px-6 py-4">{{ $user['email'] }}</td>
                    <td class="px-6 py-4 capitalize">{{ $user['role'] }}</td>
                    <td class="px-6 py-4">
                        <a href="{{ route('user.edit', $user['id']) }}"
                           class="inline-flex items-center text-blue-600 hover:text-blue-800 text-sm space-x-1">
                            <i class="fas fa-edit"></i>
                            <span>Edit</span>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

@push('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
@endpush
