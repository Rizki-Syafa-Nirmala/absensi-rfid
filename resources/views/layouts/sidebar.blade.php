<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Absensi Siswa')</title>

    {{-- Tailwind CSS --}}
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @stack('styles')
</head>
<body class="bg-gray-50">

<div class="flex h-screen overflow-hidden">

    <!-- Sidebar -->
    <aside id="sidebar"
        class="bg-white shadow-lg w-64 fixed inset-y-0 left-0 transform -translate-x-full md:translate-x-0 z-40 transition-transform duration-300">
        <div class="p-6">
            <h1 class="text-2xl font-bold text-gray-800 mb-8">Absensi Siswa</h1>
            <nav class="space-y-2">
                <a href="{{ route('dashboard') }}"
                   class="flex items-center px-4 py-2 rounded-lg transition-colors duration-200
                   {{ request()->routeIs('dashboard') ? 'bg-blue-600 text-white' : 'text-gray-700 hover:bg-gray-100' }}">
                    <i class="fas fa-th-large mr-3"></i>
                    <span>Dashboard</span>
                </a>

                <div class="mt-6">
                    <h3 class="px-4 py-2 text-sm font-semibold text-gray-500 uppercase tracking-wider">Tools</h3>
                    <div class="mt-2 space-y-1">
                        <a href="{{ route('siswa') }}"
                           class="flex items-center px-4 py-2 rounded-lg transition-colors duration-200
                           {{ request()->routeIs('siswa', 'tambahsiswa') ? 'bg-blue-600 text-white' : 'text-gray-700 hover:bg-gray-100' }}">
                            <i class="fas fa-users mr-3"></i>
                            <span>Siswa</span>
                        </a>
                        <a href="{{ route('kelas') }}"
                           class="flex items-center px-4 py-2 rounded-lg transition-colors duration-200
                           {{ request()->routeIs('kelas') ? 'bg-blue-600 text-white' : 'text-gray-700 hover:bg-gray-100' }}">
                            <i class="fas fa-chalkboard mr-3"></i>
                            <span>Kelas</span>
                        </a>
                        <a href="{{ route('absen') }}"
                           class="flex items-center px-4 py-2 rounded-lg transition-colors duration-200
                           {{ request()->routeIs('absen') ? 'bg-blue-600 text-white' : 'text-gray-700 hover:bg-gray-100' }}">
                            <i class="fas fa-calendar-check mr-3"></i>
                            <span>Absen</span>
                        </a>
                        <div class="ml-8 mt-1">
                            <a href="{{ route('riwayatabsen.semua') }}"
                               class="block px-4 py-2 rounded-md text-sm transition-colors duration-200
                               {{ request()->routeIs('riwayatabsen.semua') ? 'bg-blue-500 text-white' : 'text-gray-600 hover:bg-gray-100' }}">
                                Riwayat Absen
                            </a>
                        </div>
                    </div>
                </div>

                <div class="mt-6">
                    <h3 class="px-4 py-2 text-sm font-semibold text-gray-500 uppercase tracking-wider">Manage</h3>
                    <div class="mt-2 space-y-1">
                        <a href="{{ route('user.list') }}"
                           class="flex items-center px-4 py-2 rounded-lg transition-colors duration-200
                           {{ request()->routeIs('user.list') ? 'bg-blue-600 text-white' : 'text-gray-700 hover:bg-gray-100' }}">
                            <i class="fas fa-user mr-3"></i>
                            <span>User</span>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </aside>

    <!-- Overlay (hanya muncul di mobile) -->
    <div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 hidden z-30 md:hidden"></div>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col overflow-auto md:ml-64 transition-all duration-300">
        <!-- Mobile Header -->
        <header class="md:hidden flex items-center justify-between bg-white shadow p-4">
            <h1 class="text-xl font-bold">Absensi Siswa</h1>
            <button id="hamburger-btn" class="text-gray-700 focus:outline-none">
                <i class="fas fa-bars"></i>
            </button>
        </header>

        <main class="p-6">
            @yield('content')
        </main>
    </div>

</div>

<script>
    const btn = document.getElementById('hamburger-btn');
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('overlay');

    btn?.addEventListener('click', () => {
        sidebar.classList.toggle('-translate-x-full');
        overlay.classList.toggle('hidden');
    });

    overlay?.addEventListener('click', () => {
        sidebar.classList.add('-translate-x-full');
        overlay.classList.add('hidden');
    });
</script>

@stack('scripts')
</body>
</html>
