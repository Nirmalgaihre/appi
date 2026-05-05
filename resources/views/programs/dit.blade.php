@extends('layouts.app')

@section('title', 'Diploma in Agriculture (Plant Science) - Annapurna Polytechnic Institute')
@section('meta_description', 'Full curriculum and semester-wise breakdown for the Diploma in Agriculture (Plant Science) at Annapurna Polytechnic Institute.')

@section('content')
<div class="bg-[#F8FAFC] min-h-screen py-12">
    <div class="max-w-[1400px] mx-auto px-6">
        <!-- Header -->
        <div class="mb-12 border-b-2 border-slate-800 pb-6">
            <h1 class="text-3xl font-bold text-slate-900 uppercase tracking-tight">Diploma in Agriculture (Plant Science)</h1>
            <p class="text-slate-600 font-medium mt-1">Full Curriculum Structure & Semester Breakdown | पूर्ण पाठ्यक्रम संरचना र सेमेस्टर विवरण</p>
        </div>

        <!-- Info Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
            <div class="bg-white p-6 border border-slate-200 shadow-sm">
                <h2 class="text-lg font-bold text-slate-800 border-b pb-2 mb-4 uppercase text-xs tracking-widest">Introduction | परिचय</h2>
                <p class="text-sm text-slate-600 leading-relaxed">
                    This program is designed to produce skilled mid-level technical human resources in the field of agriculture. Students gain expertise in crop production, soil management, and agricultural extension to support sustainable farming practices.
                    <br><span class="text-slate-500 italic mt-2 block">यस कार्यक्रमले कृषि क्षेत्रमा दक्ष मध्यम स्तरको जनशक्ति उत्पादन गर्ने लक्ष्य राखेको छ।</span>
                </p>
            </div>
            <div class="bg-white p-6 border border-slate-200 shadow-sm">
                <h2 class="text-lg font-bold text-slate-800 border-b pb-2 mb-4 uppercase text-xs tracking-widest">Core Learning | मुख्य सिकाई</h2>
                <ul class="grid grid-cols-2 gap-2 text-xs font-bold text-slate-700">
                    <li class="flex items-center gap-2"><i class="fa-solid fa-seedling text-[#302171]"></i> Agronomy & Seeds</li>
                    <li class="flex items-center gap-2"><i class="fa-solid fa-leaf text-[#302171]"></i> Horticulture</li>
                    <li class="flex items-center gap-2"><i class="fa-solid fa-vial text-[#302171]"></i> Soil Management</li>
                    <li class="flex items-center gap-2"><i class="fa-solid fa-bug text-[#302171]"></i> Plant Protection</li>
                    <li class="flex items-center gap-2"><i class="fa-solid fa-microscope text-[#302171]"></i> Agri Statistics</li>
                    <li class="flex items-center gap-2"><i class="fa-solid fa-users text-[#302171]"></i> Social Mobilization</li>
                </ul>
            </div>
        </div>

        @php
        $syllabus = [
            'First Year' => [
                'Semester I' => [
                    ['1101SH', 'Nepali'], ['1102SH', 'English I'], ['1103SH', 'Mathematics I'],
                    ['AG1104SH', 'Physics I'], ['AG1105SH', 'Chemistry I'], ['AG1106SH', 'Zoology I'],
                    ['AG1107SH', 'Botany I']
                ],
                'Semester II' => [
                    ['1201SH', 'English II'], ['1202SH', 'Mathematics II'], ['AG1203SH', 'Physics II'],
                    ['AG1204SH', 'Chemistry II'], ['AG1205SH', 'Zoology II'], ['AG1206SH', 'Botany II'],
                    ['EG1211CT', 'Computer Application']
                ]
            ],
            'Second Year' => [
                'Semester I' => [
                    ['AG2101PS', 'Fundamentals of Horticulture'], ['AG2102PS', 'Agro-metrology & Env. Science'],
                    ['AG2103PS', 'Irrigation & Farm Structures'], ['AG2104PS', 'Fundamentals of Agronomy'],
                    ['AG2105PS', 'Agriculture Entomology'], ['AG2106PS', 'Fundamentals of Soil Science'],
                    ['AG2101AS', 'Introductory Animal Husbandry']
                ],
                'Semester II' => [
                    ['AG2201PS', 'Soil Fertility Management'], ['AG2202PS', 'Cereal Crop Production'],
                    ['AG2203PS', 'Plant Pathology & Mushroom'], ['AG2204PS', 'Vegetable & Spice Crop Production'],
                    ['AG2205PS', 'Fundamentals of Aquaculture'], ['AG2206PS', 'Agri-Economics & Farm Management'],
                    ['AG2207PS', 'Industrial Crops']
                ]
            ],
            'Third Year' => [
                'Semester I' => [
                    ['AG3101PS', 'Medicinal Plants and NTFP'], ['AG3102PS', 'Grain Legumes and Oilseed Crops'],
                    ['AG3103PS', 'Fruit Crop Production'], ['AG3104PS', 'Post-Harvest Technology'],
                    ['AG3105PS', 'Agriculture Extension & Comm.'], ['AG3106PS', 'Agribusiness, Marketing & Coop.'],
                    ['AG3107PS', 'Ornamental Horticulture'], ['AG3108PS', 'Seed Technology']
                ],
                'Semester II' => [
                    ['AG3201PS', 'Elementary Agriculture Statistics'], ['AG3202PS', 'Social Mobilization & Community Dev.'],
                    ['EG3201MG', 'Entrepreneurship Development'], ['AG3204PS', 'Internship (Farm Practice Training)']
                ]
            ]
        ];
        @endphp

        @foreach($syllabus as $year => $semesters)
        <div class="mb-12">
            <h2 class="text-xl font-extrabold text-slate-800 mb-6 flex items-center gap-3">
                <span class="bg-slate-800 text-white px-3 py-1 text-sm rounded">{{ $year }}</span>
                <div class="h-px bg-slate-200 flex-1"></div>
            </h2>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                @foreach($semesters as $semesterName => $courses)
                <div class="bg-white border border-slate-200 shadow-sm flex flex-col">
                    <div class="bg-slate-50 px-5 py-3 border-b border-slate-200">
                        <h3 class="text-slate-700 text-xs font-bold uppercase tracking-wider">{{ $semesterName }}</h3>
                    </div>
                    <div class="flex-1">
                        <table class="w-full text-left border-collapse">
                            <tbody class="divide-y divide-slate-100">
                                @foreach($courses as $course)
                                <tr class="hover:bg-slate-50 transition-colors">
                                    <td class="px-5 py-3 text-[10px] font-mono font-bold text-slate-400 w-32 border-r border-slate-50">{{ $course[0] }}</td>
                                    <td class="px-5 py-3 text-xs font-semibold text-slate-700">{{ $course[1] }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
