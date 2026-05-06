@extends('layouts.admin')

@section('title', 'Add New Staff')

@section('content')
<div class="max-w-2xl mx-auto">
    <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
        <div class="p-6 bg-[#1d0647] text-white">
            <h3 class="text-xs font-black uppercase tracking-widest">Register New Staff Member</h3>
        </div>
        <div class="p-6 space-y-6">

    <!-- Staff Category Create -->
    <div>
        <p class="text-sm font-bold text-gray-800 mb-2 border-l-4 border-blue-500 pl-2">
            Staff Category थप्ने तरिका:
        </p>
        <ul class="text-[13px] text-gray-600 space-y-2">
            <li>१. ब्राउजरमा यो लिङ्कमा  
                <a href="https://api.edu.np/admin/staff/categories" target="_blank" class="text-blue-600 hover:underline font-semibold">
                    [यहाँ क्लिक गर्नुहोस्]
                </a> वा <b>"admin/staff/categories"</b> मा जानुहोस्।
            </li>
            <li>२. नयाँ श्रेणी थप्नका लागि <b>"Add New Category"</b> मा क्लिक गर्नुहोस्।</li>
            <li>३. Category को नाम लेख्नुहोस्। 
                <br>
                <span class="text-gray-500 italic">
                    (उदा: Plant Instructor, Animal Instructor, Coordinator, Accountant, Administration, Assistant Instructor, Office Assistant, Driver, Supporting Staff आदि)
                </span>
            </li>
            <li>४. विवरण रुजु गरेर <b>"Save"</b> गर्नुहोस्।</li>
        </ul>
    </div>

    <hr class="border-gray-100">

    <!-- Staff Registration Note -->
    <div>
        <p class="text-sm font-bold text-gray-800 mb-2 border-l-4 border-green-500 pl-2">
            नोट:
        </p>
        <p class="text-[13px] text-gray-600">
            माथि क्याटेगोरी थपिसकेपछि मात्र स्टाफ रेजिष्ट्रेसन फारममा यी पदहरू <b>"Staff Category Select"</b> मेनुमा देखा पर्नेछन्।
        </p>
    </div>

</div>
        <form action="{{ route('staff.store') }}" method="POST" enctype="multipart/form-data" class="p-8 space-y-5">
            @csrf
            <div>
                <label class="text-[10px] font-black uppercase text-slate-400 ml-1">Full Name</label>
                <input type="text" name="staff_name" required
                    class="w-full bg-slate-50 border-2 border-transparent focus:border-indigo-500 focus:bg-white rounded-xl p-3 text-sm outline-none transition-all">
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="text-[10px] font-black uppercase text-slate-400 ml-1">Category</label>
                    <select name="staff_category" required
                        class="w-full bg-slate-50 border-2 border-transparent focus:border-indigo-500 focus:bg-white rounded-xl p-3 text-sm outline-none transition-all">
                        @foreach($categories as $c)
                        <option value="{{ $c->id }}">{{ $c->title }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label class="text-[10px] font-black uppercase text-slate-400 ml-1">Phone Number</label>
                    <input type="text" name="staff_phone"
                        class="w-full bg-slate-50 border-2 border-transparent focus:border-indigo-500 focus:bg-white rounded-xl p-3 text-sm outline-none transition-all">
                </div>
            </div>

            <div>
                <label class="text-[10px] font-black uppercase text-slate-400 ml-1">Email Address</label>
                <input type="email" name="staff_email"
                    class="w-full bg-slate-50 border-2 border-transparent focus:border-indigo-500 focus:bg-white rounded-xl p-3 text-sm outline-none transition-all">
            </div>

            <div>
                <label class="text-[10px] font-black uppercase text-slate-400 ml-1">Profile Photo</label>
                <input type="file" name="staff_img" class="w-full text-xs text-slate-500 mt-2">
            </div>

            <div class="pt-4">
                <button type="submit"
                    class="w-full bg-[#1d0647] text-white font-black py-4 rounded-2xl text-xs uppercase tracking-[0.2em] shadow-xl hover:bg-black transition-all">
                    Save Staff Member
                </button>
            </div>
        </form>
    </div>
</div>
@endsection