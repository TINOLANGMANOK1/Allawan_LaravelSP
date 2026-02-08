<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Student Portal')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 text-slate-800">
    <nav class="bg-emerald-800 p-4 text-white shadow-sm">
        <div class="container mx-auto flex justify-between items-center">
            {{-- Logo removed, just clean text --}}
            <h1 class="font-bold text-xl uppercase tracking-wider">Student Portal</h1>
            <div class="space-x-6 text-sm font-medium">
                <a href="/home" class="hover:text-emerald-200 transition">Home</a>
                <a href="/students" class="hover:text-emerald-200 transition">Students</a>
                <a href="/students/create" class="hover:text-emerald-200 transition">Add Student</a>
            </div>
        </div>
    </nav>

    <main class="container mx-auto mt-10 p-8 bg-white rounded-xl shadow-sm border border-emerald-100">
        @yield('content')
    </main>
</body>
</html>