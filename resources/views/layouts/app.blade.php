<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Absensi Siswa' }}</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Google Fonts: Poppins & Roboto -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">


    <!-- Apply Poppins to entire body -->
    <style>
    body {
        font-family: 'Roboto', sans-serif;
    }

    .font-poppins {
        font-family: 'Poppins', sans-serif;
    }

    .font-roboto {
        font-family: 'Roboto', sans-serif;
    }
    </style>

</head>
<body class="min-h-screen bg-gray-50">
    @yield('content')

    @yield('scripts')
</body>
</html>
