@extends('layouts.app')

@section('content')
<div class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="bg-white rounded-2xl shadow-lg p-8 w-full max-w-md">
        <div class="flex mb-8">
            <button type="button" onclick="window.location.href='{{ route('login') }}'" 
                class="flex-1 text-center py-3 font-semibold {{ request()->routeIs('login') ? 'text-blue-600 border-b-2 border-blue-600' : 'text-gray-400 hover:text-blue-600' }}">
                Login
            </button>
            <button type="button" onclick="window.location.href='{{ route('register') }}'" 
                class="flex-1 text-center py-3 font-semibold {{ request()->routeIs('register') ? 'text-blue-600 border-b-2 border-blue-600' : 'text-gray-400 hover:text-blue-600' }}">
                Register
            </button>
        </div>

        <!-- Form Login -->
        <form method="POST" action="{{ route('login') }}" class="space-y-4">
            @csrf
            <div class="relative">
                <input 
                    id="email" 
                    name="email" 
                    type="email" 
                    value="{{ old('email') }}"
                    required 
                    placeholder="Email"
                    class="w-full px-4 py-4 pr-12 bg-gray-100 border-0 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:bg-white transition-all">
                <div class="absolute inset-y-0 right-0 pr-4 flex items-center">
                    <i class="fas fa-envelope text-gray-400"></i>
                </div>
            </div>
            <div class="relative">
                <input 
                    id="password" 
                    name="password" 
                    type="password" 
                    required 
                    placeholder="Password"
                    class="w-full px-4 py-4 pr-12 bg-gray-100 border-0 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:bg-white transition-all">
                <div class="absolute inset-y-0 right-0 pr-4 flex items-center">
                    <button type="button" onclick="togglePassword('password', 'password-icon')" class="text-gray-400 hover:text-gray-600 focus:outline-none">
                        <i id="password-icon" class="fas fa-eye-slash"></i>
                    </button>
                </div>
            </div>

            <div class="text-right mb-4">
                <a href="#" onclick="alert('Fitur lupa password belum tersedia.')" class="text-sm text-gray-500 hover:text-gray-700">
                    Forgot your password?
                </a>
            </div>

            @if ($errors->any())
                <div class="bg-red-100 border border-red-300 text-red-700 text-sm rounded-lg px-4 py-3">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <button type="submit"
                class="w-full bg-blue-600 text-white py-4 rounded-xl font-semibold hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all">
                Login
            </button>
        </form>
    </div>
</div>
@endsection

@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
@endpush

@push('scripts')
<script>
    function togglePassword(fieldId, iconId) {
        const input = document.getElementById(fieldId);
        const icon = document.getElementById(iconId);

        if (input.type === 'password') {
            input.type = 'text';
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye');
        } else {
            input.type = 'password';
            icon.classList.remove('fa-eye');
            icon.classList.add('fa-eye-slash');
        }
    }

    setTimeout(function() {
        const errorBox = document.querySelector('.bg-red-100');
        if (errorBox) {
            errorBox.style.transition = 'opacity 0.5s ease';
            errorBox.style.opacity = '0';
            setTimeout(() => errorBox.remove(), 500);
        }
    }, 5000);
</script>
@endpush
