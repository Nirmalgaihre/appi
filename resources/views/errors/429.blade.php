<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>429 Too Many Requests | Annapurna Polytechnic Institute</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>body { font-family: 'Inter', sans-serif; }</style>
</head>
<body class="bg-[#f3f4f6] flex items-center justify-center min-h-screen p-4">
    <div class="max-w-[850px] w-full bg-white shadow-sm border border-slate-200 rounded-2xl overflow-hidden flex flex-col md:flex-row">
        
        <!-- Status Section -->
        <div class="md:w-1/3 bg-amber-50 border-b md:border-b-0 md:border-r border-amber-100 p-10 flex flex-col items-center justify-center text-center">
            <div class="w-16 h-16 bg-amber-100 rounded-full flex items-center justify-center mb-4">
                <svg class="w-8 h-8 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            <span class="text-[10px] font-bold tracking-[0.3em] text-amber-500 uppercase leading-tight">System Cooling</span>
            <h2 class="text-xs font-semibold text-slate-600 mt-2 italic">Annapurna Polytechnic Institute</h2>
        </div>

        <!-- Content Section -->
        <div class="md:w-2/3 p-12 flex flex-col justify-center">
            <span class="text-amber-600 font-bold tracking-tighter text-5xl mb-2">429</span>
            <h1 class="text-2xl font-bold text-slate-900 mb-4 tracking-tight">Too Many Requests</h1>
            <p class="text-slate-500 leading-relaxed mb-8">
                The server is receiving too many requests from your connection. To ensure stability for all users at <span class="text-slate-800 font-medium">Annapurna 3, Kaski</span>, please wait a moment before trying again.
            </p>
            
            <div class="flex flex-col sm:flex-row items-center gap-6">
                <button onclick="window.location.reload()" class="w-full sm:w-auto bg-amber-600 hover:bg-amber-700 text-white px-8 py-3 rounded-lg text-sm font-semibold transition-all shadow-md">
                    Refresh Page
                </button>
                <p class="text-xs text-slate-400">Wait ~60 seconds</p>
            </div>
        </div>
    </div>
</body>
</html>