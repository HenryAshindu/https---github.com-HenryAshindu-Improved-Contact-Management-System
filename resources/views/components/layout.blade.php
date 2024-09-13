<!DOCTYPE html>
<html lang="en" class="h-full bg-white">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Management System</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/js/app.js', 'resources/css/app.css',])
</head>
<body class="bg-gray-100 h-full">
    <x-nav-bar></x-nav-bar>
    
    <main class="text-center p-10 bg-gray-100">
        {{ $slot }}
    </main>
    
</body>
</html>