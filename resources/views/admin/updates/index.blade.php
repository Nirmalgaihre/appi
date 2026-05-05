@extends('layouts.admin')

@section('title', 'System Updates')

@section('content')
<div class="max-w-4xl mx-auto">
    <!-- Header Section -->
    <div class="mb-6 flex justify-between items-end border-b border-gray-100 pb-4">
        <div>
            <h2 class="text-xl font-bold text-gray-800">Software Changelog</h2>
            <p class="text-xs text-gray-500 uppercase tracking-widest">Annapurna Polytechnic Institute CMS</p>
        </div>
        <div class="text-right">
            <span class="text-[10px] font-bold text-gray-400 uppercase block">Current Build</span>
            <span class="text-sm font-bold text-[#004a99]">v1.3.0 (Stable)</span>
        </div>
    </div>

    <!-- Quick Version Summary -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 mb-6">
        <div class="bg-white p-4 rounded-xl border border-gray-200 shadow-sm text-center">
            <i class="fa-solid fa-code-branch text-[#004a99] mb-2"></i>
            <p class="text-[10px] font-bold text-gray-400 uppercase">Version</p>
            <p class="text-sm font-bold text-gray-800">1.3.0</p>
        </div>
        <div class="bg-white p-4 rounded-xl border border-gray-200 shadow-sm text-center">
            <i class="fa-solid fa-calendar-check text-emerald-500 mb-2"></i>
            <p class="text-[10px] font-bold text-gray-400 uppercase">Released</p>
            <p class="text-sm font-bold text-emerald-600">May 4, 2026</p>
        </div>
        <div class="bg-white p-4 rounded-xl border border-gray-200 shadow-sm text-center">
            <i class="fa-solid fa-rocket text-orange-500 mb-2"></i>
            <p class="text-[10px] font-bold text-gray-400 uppercase">Deployment</p>
            <p class="text-sm font-bold text-orange-600">WEBSITE LIVE</p>
        </div>
        <div class="bg-white p-4 rounded-xl border border-gray-200 shadow-sm text-center">
            <i class="fa-solid fa-microchip text-purple-500 mb-2"></i>
            <p class="text-[10px] font-bold text-gray-400 uppercase">Engine</p>
            <p class="text-sm font-bold text-gray-700">PHP 8.4 / L13</p>
        </div>
    </div>

    <!-- Main Updates List -->
    <div class="space-y-6">
        
        <!-- NEW DEPLOYMENT: Public Website -->
        <div class="bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden border-l-4 border-orange-500">
            <div class="px-6 py-4 bg-orange-50/50 border-b border-gray-100 flex justify-between items-center">
                <h3 class="text-xs font-bold text-orange-700 uppercase flex items-center gap-2">
                    <i class="fa-solid fa-globe"></i> Major Update: Public Website Live
                </h3>
                <span class="text-[10px] bg-orange-100 text-orange-700 px-2 py-0.5 rounded font-bold uppercase">New Deployment</span>
            </div>
            <div class="p-6">
                <h4 class="text-sm font-bold text-gray-800 mb-4">Complete Frontend Re-imagining</h4>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-3">
                        <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">User Experience</p>
                        <div class="flex items-start gap-3">
                            <span class="p-1 bg-orange-50 text-orange-600 rounded text-[10px]"><i class="fa-solid fa-bolt"></i></span>
                            <span class="text-xs text-gray-600 leading-relaxed"><strong>Tailwind UI:</strong> Fully responsive interface optimized for mobile and student access.</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <span class="p-1 bg-orange-50 text-orange-600 rounded text-[10px]"><i class="fa-solid fa-images"></i></span>
                            <span class="text-xs text-gray-600 leading-relaxed"><strong>Multimedia Hub:</strong> Deployment of Masonry-style Photo & Video galleries.</span>
                        </div>
                    </div>
                    <div class="space-y-3">
                        <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">Frontend Modules</p>
                        <div class="flex items-start gap-3">
                            <span class="p-1 bg-indigo-50 text-indigo-600 rounded text-[10px]"><i class="fa-solid fa-newspaper"></i></span>
                            <span class="text-xs text-gray-600 leading-relaxed"><strong>Notice Board:</strong> Public-facing digital board for exams and notices.</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <span class="p-1 bg-indigo-50 text-indigo-600 rounded text-[10px]"><i class="fa-solid fa-address-book"></i></span>
                            <span class="text-xs text-gray-600 leading-relaxed"><strong>Staff Directory:</strong> Public profiles for faculty with hierarchical ordering.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Previous Technical Update -->
        <div class="bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden opacity-90">
            <div class="px-6 py-4 bg-[#004a99]/5 border-b border-[#004a99]/10 flex justify-between items-center">
                <h3 class="text-xs font-bold text-[#004a99] uppercase flex items-center gap-2">
                    <i class="fa-solid fa-star"></i> Technical Release: v1.2.0
                </h3>
            </div>
            
            <div class="p-6">
                <h4 class="text-sm font-bold text-gray-800 mb-4">Enhanced Multimedia & Security</h4>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-3">
                        <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">New Features</p>
                        <div class="flex items-start gap-3">
                            <span class="p-1 bg-blue-50 text-[#004a99] rounded text-[10px]"><i class="fa-solid fa-plus"></i></span>
                            <span class="text-xs text-gray-600 leading-relaxed"><strong>Gallery Skeletons:</strong> Alpine.js shimmer effects for smoother loading.</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <span class="p-1 bg-blue-50 text-[#004a99] rounded text-[10px]"><i class="fa-solid fa-palette"></i></span>
                            <span class="text-xs text-gray-600 leading-relaxed"><strong>CTEVT Branding:</strong> Gandaki Province Office UI color synchronization.</span>
                        </div>
                    </div>
                    <div class="space-y-3">
                        <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">Technical Changes</p>
                        <div class="flex items-start gap-3">
                            <span class="p-1 bg-emerald-50 text-emerald-600 rounded text-[10px]"><i class="fa-solid fa-shield"></i></span>
                            <span class="text-xs text-gray-600 leading-relaxed">Updated middleware for administrative access control.</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <span class="p-1 bg-emerald-50 text-emerald-600 rounded text-[10px]"><i class="fa-solid fa-wrench"></i></span>
                            <span class="text-xs text-gray-600 leading-relaxed">Optimized StudentController certificate generation logic.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Developer Signature -->
    <div class="mt-6 p-6 bg-gray-900 rounded-xl text-white shadow-lg border-l-4 border-[#004a99]">
        <div class="flex items-start gap-5">
            <div class="p-3 bg-gray-800 rounded-lg shrink-0">
                <i class="fa-solid fa-user-gear text-[#004a99] text-xl"></i>
            </div>
            <div>
                <p class="text-[10px] font-bold text-gray-500 uppercase tracking-widest">Lead Developer & System Architect</p>
                <p class="text-sm font-medium mt-1 leading-relaxed text-gray-300">
                    Version updates are maintained and deployed by **Nirmal Gaihre**. For custom feature requests or technical bugs, reach out through the official dev portals.
                </p>
                <div class="mt-5 flex flex-wrap gap-x-6 gap-y-3 text-[11px]">
                    <a href="https://nirmalgaihre.com.np" target="_blank" class="flex items-center gap-2 hover:text-blue-400 transition">
                        <i class="fa-solid fa-globe text-[#004a99]"></i> Portfolio
                    </a>
                    <a href="https://www.facebook.com/nirmalgaihre.com.np" target="_blank" class="flex items-center gap-2 hover:text-blue-400 transition">
                        <i class="fa-brands fa-facebook text-[#004a99]"></i> Facebook
                    </a>
                    <a href="mailto:gaihrenirmal2021@gmail.com" class="flex items-center gap-2 hover:text-blue-400 transition">
                        <i class="fa-solid fa-envelope text-[#004a99]"></i> gaihrenirmal2021@gmail.com
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection