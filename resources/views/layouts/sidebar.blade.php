<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Absensi Siswa')</title>

    {{-- Tailwind CSS CDN (jika tidak pakai Vite) --}}
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- Font Awesome --}}
    @stack('styles')
</head>
<body class="bg-gray-50">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-white shadow-lg">
            <div class="p-6">
                <h1 class="text-xl font-bold text-gray-800 mb-6">Absensi Siswa</h1>

                <!-- Navigation -->
                <nav class="space-y-2">
                    <!-- Dashboard -->
                    <a href="{{ route('dashboard') }}" class="flex items-center px-4 py-2 rounded-lg {{ request()->routeIs('dashboard') ? 'bg-blue-600 text-white' : 'text-gray-700 hover:bg-gray-100' }}">
                        <i class="fas fa-th-large mr-3"></i>
                        <span>Dashboards</span>
                    </a>

                    <!-- Tools Section -->
                    <div class="mt-6">
                        <h3 class="px-4 py-2 text-sm font-medium text-gray-500 uppercase tracking-wider">Tools</h3>
                        <div class="mt-2 space-y-1">
                                <a href="{{ route('siswa') }}" class="flex items-center px-4 py-2 rounded-lg 
                                {{ request()->routeIs('siswa', 'tambahsiswa') ? 'bg-blue-600 text-white' : 'text-gray-700 hover:bg-gray-100' }}">
                                    <i class="fas fa-users mr-3"></i>
                                    <span>Siswa</span>
                                </a>
                                <!-- Submenu Riwayat Absen -->
                                <div class="ml-8 mt-1">
                                    <a href="{{ route('riwayatabsen.semua') }}"
                                        class="block px-4 py-2 rounded-md text-sm 
                                            {{ request()->routeIs('riwayatabsen.semua') ? 'bg-blue-500 text-white' : 'text-gray-600 hover:bg-gray-100' }}">
                                        Riwayat Absen
                                    </a>
                                </div>
                            <a href="{{ route('kelas') }}" 
                                class="flex items-center px-4 py-2 rounded-lg {{ request()->routeIs('kelas') ? 'bg-blue-600 text-white' : 'text-gray-700 hover:bg-gray-100' }}">
                                <i class="fas fa-chalkboard mr-3"></i>
                                <span>Kelas</span>
                            </a>
                            <a href="{{ route('absen') }}" 
                                class="flex items-center px-4 py-2 rounded-lg {{ request()->routeIs('absen') ? 'bg-blue-600 text-white' : 'text-gray-700 hover:bg-gray-100' }}">
                                <i class="fas fa-calendar-check mr-3"></i>
                                <span>Absen</span>
                            </a>
                        </div>
                    </div>

                    <!-- Manage Section -->
                    <div class="mt-6">
                        <h3 class="px-4 py-2 text-sm font-medium text-gray-500 uppercase tracking-wider">Manage</h3>
                        <div class="mt-2 space-y-1">
                            <a href="{{ route('user.list') }}" 
                                class="flex items-center px-4 py-2 rounded-lg {{ request()->routeIs('user.list') ? 'bg-blue-600 text-white' : 'text-gray-700 hover:bg-gray-100' }}">
                                <i class="fas fa-user mr-3"></i>
                                <span>User</span>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1">
            @yield('content')
        </main>
    </div>

    {{-- Chart.js + script lain --}}
    @stack('scripts')
</body>
</html>
