@extends('layouts.sidebar') <!-- Jika kamu menggunakan layout, ganti sesuai layoutmu -->
@section('title', 'Dashboard - Absensi Siswa')

@section('content')
<div class="flex min-h-screen">
    <!-- Main Content -->
    <div class="flex-1 p-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Card Total Siswa -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Total Siswa</h3>
                        <p class="text-3xl font-bold text-gray-900">{{ $totalSiswa ?? '400' }}</p>
                    </div>
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-400 to-purple-500 rounded-full flex items-center justify-center">
                        <i class="fas fa-graduation-cap text-white text-2xl"></i>
                    </div>
                </div>
            </div>

            <!-- Card Kehadiran -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Hadir Hari Ini</h3>
                        <p class="text-3xl font-bold text-gray-900">{{ $hadirHariIni ?? '400' }}</p>
                    </div>
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-400 to-purple-500 rounded-full flex items-center justify-center">
                        <i class="fas fa-user-graduate text-white text-2xl"></i>
                    </div>
                </div>
            </div>

            <!-- Card Jenis Kelamin -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                <h3 class="text-lg font-semibold text-gray-800 mb-4">Jenis Kelamin</h3>
                <div class="flex items-center justify-between">
                    <div class="space-y-3">
                        <div class="flex items-center">
                            <div class="w-3 h-3 bg-pink-400 rounded-full mr-3"></div>
                            <div>
                                <p class="text-sm text-gray-600">Perempuan</p>
                                <p class="font-semibold text-gray-900">{{ $perempuan ?? '200' }}</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="w-3 h-3 bg-teal-400 rounded-full mr-3"></div>
                            <div>
                                <p class="text-sm text-gray-600">Laki-laki</p>
                                <p class="font-semibold text-gray-900">{{ $lakiLaki ?? '200' }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-24 h-24">
                        <canvas id="genderChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('genderChart').getContext('2d');
    const genderChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            datasets: [{
                data: [{{ $perempuan ?? '200' }}, {{ $lakiLaki ?? '200' }}],
                backgroundColor: ['#F472B6', '#4DD0E1'],
                borderWidth: 0,
                cutout: '60%'
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: true,
            plugins: {
                legend: {
                    display: false
                },
                tooltip: {
                    enabled: false
                }
            }
        }
    });
</script>
@endpush

@push('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
@endpush
