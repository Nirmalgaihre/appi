<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>403 Forbidden | Access Restricted</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>body { font-family: 'Inter', sans-serif; }</style>
</head>
<body class="bg-[#f3f4f6] flex items-center justify-center min-h-screen p-4">
    <div class="max-w-[850px] w-full bg-white shadow-sm border border-slate-200 rounded-2xl overflow-hidden flex flex-col md:flex-row">
        <!-- Security Section -->
        <div class="md:w-1/3 bg-red-50 border-b md:border-b-0 md:border-r border-red-100 p-10 flex flex-col items-center justify-center">
            <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mb-4">
                <svg class="w-8 h-8 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m0 0v2m0-2h2m-2 0H10m11-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            <div class="text-center">
                <span class="text-[10px] font-bold tracking-[0.3em] text-red-400 uppercase">Access Denied</span>
                <h2 class="text-xs font-semibold text-slate-600 mt-2">Security Protocol</h2>
            </div>
        </div>
        <!-- Content Section -->
        <div class="md:w-2/3 p-12 flex flex-col justify-center">
            <span class="text-red-600 font-bold tracking-tighter text-5xl mb-2">403</span>
            <h1 class="text-2xl font-bold text-slate-900 mb-4 tracking-tight">Permission Restricted</h1>
            <p class="text-slate-500 leading-relaxed mb-8">
                You do not have the necessary permissions to view this directory or page. Please contact the administrator of **Annapurna Polytechnic Institute** if you believe this is an error.
            </p>
            <div class="flex items-center gap-6">
                <a href="/" class="bg-red-600 hover:bg-red-700 text-white px-8 py-3 rounded-lg text-sm font-semibold transition-all shadow-md">
                    Contact Admin
                </a>
                <button onclick="history.back()" class="text-sm font-medium text-slate-500 hover:text-slate-900 transition-colors">
                    Go Back
                </button>
            </div>
        </div>
    </div>
</body>
</html>