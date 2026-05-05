<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Annapurna Polytechnic</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-slate-50 flex items-center justify-center min-h-screen p-6">
    <div class="max-w-md w-full text-center">
        <div class="mb-8">
            <div class="inline-flex items-center justify-center w-20 h-20 rounded-full bg-white shadow-sm border border-slate-100 mb-4">
                @yield('icon')
            </div>
            <h1 class="text-6xl font-black text-slate-200 mb-2">@yield('code')</h1>
            <h2 class="text-2xl font-bold text-slate-800 uppercase tracking-tight">@yield('title')</h2>
        </div>
        
        <p class="text-slate-500 mb-10 leading-relaxed">
            @yield('message')
        </p>

        <div class="flex flex-col gap-3">
            <a href="{{ url('/') }}" class="bg-[#004a99] text-white px-6 py-3 rounded-xl font-bold hover:bg-blue-800 transition shadow-lg">
                <i class="fa-solid fa-house mr-2"></i> Return to Homepage
            </a>
            <button onclick="window.location.reload()" class="text-slate-400 text-sm font-semibold hover:text-slate-600 transition">
                <i class="fa-solid fa-rotate-right mr-2"></i> Try Refreshing
            </button>
        </div>
        
        <p class="mt-12 text-[10px] text-slate-300 uppercase tracking-[0.2em] font-bold">
            Annapurna Polytechnic Institute • Infrastructure Dept.
        </p>
    </div>
</body>
</html>