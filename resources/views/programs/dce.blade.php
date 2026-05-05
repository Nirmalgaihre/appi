@extends('layouts.app')

@section('title', 'Diploma in Agriculture (Animal Science) - Annapurna Polytechnic Institute')
@section('meta_description', 'Explore the curriculum structure and semester-wise breakdown for the Diploma in Agriculture (Animal Science) at Annapurna Polytechnic Institute.')

@section('content')
<div class="bg-[#F8FAFC] min-h-screen py-12">
    <div class="max-w-[1400px] mx-auto px-6">
        <!-- Header -->
        <div class="mb-12 border-b-2 border-slate-800 pb-6">
            <h1 class="text-3xl font-bold text-slate-900 uppercase tracking-tight">Diploma in Agriculture (Animal Science)</h1>
            <p class="text-slate-600 font-medium mt-1">Full Curriculum Structure & Semester Breakdown | पूर्ण पाठ्यक्रम संरचना र सेमेस्टर विवरण</p>
        </div>

        <!-- Introduction Section -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
            <div class="bg-white p-6 border border-slate-200 shadow-sm">
                <h2 class="text-lg font-bold text-slate-800 border-b pb-2 mb-4 uppercase text-xs tracking-widest">Introduction | परिचय</h2>
                <p class="text-sm text-slate-600 leading-relaxed">
                    The Animal Science program focuses on producing skilled Junior Technicians (JT) capable of diagnosing animal diseases, improving livestock health, and managing animal production systems including poultry, dairy, and fisheries.
                    <br><span class="text-slate-500 italic mt-2 block">यस कार्यक्रमले पशु स्वास्थ्य, उत्पादन र व्यवस्थापनमा दक्ष प्राविधिक जनशक्ति उत्पादन गर्ने लक्ष्य राखेको छ।</span>
                </p>
            </div>
            <div class="bg-white p-6 border border-slate-200 shadow-sm">
                <h2 class="text-lg font-bold text-slate-800 border-b pb-2 mb-4 uppercase text-xs tracking-widest">What You'll Learn | तपाईंले के सिक्नुहुनेछ</h2>
                <ul class="grid grid-cols-2 gap-2 text-xs font-bold text-slate-700">
                    <li class="flex items-center gap-2"><i class="fa-solid fa-cow text-[#302171]"></i> Livestock Management</li>
                    <li class="flex items-center gap-2"><i class="fa-solid fa-stethoscopes text-[#302171]"></i> Animal Health</li>
                    <li class="flex items-center gap-2"><i class="fa-solid fa-egg text-[#302171]"></i> Poultry Production</li>
                    <li class="flex items-center gap-2"><i class="fa-solid fa-dna text-[#302171]"></i> Animal Breeding</li>
                    <li class="flex items-center gap-2"><i class="fa-solid fa-fish text-[#302171]"></i> Aquaculture</li>
                    <li class="flex items-center gap-2"><i class="fa-solid fa-shield-dog text-[#302171]"></i> Zoonosis & Safety</li>
                </ul>
            </div>
        </div>

        @php
        $animalScienceSyllabus = [
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
                    ['AG2102AS', 'Introduction to Animal Production System'], ['AG2103AS', 'Introductory Animal Nutrition'],
                    ['AG2104AS', 'Animal Production & Management - I'], ['AG2105AS', 'Fodder Production & Pasture Mgmt.'],
                    ['AG2106AS', 'Basic Livestock Health Management - I'], ['AG2107AS', 'Animal Product Technology - I'],
                    ['AG2108AS', 'Introductory Genetics & Animal Breeding']
                ],
                'Semester II' => [
                    ['AG2201AS', 'Animal Production & Management - II'], ['AG2202AS', 'Basic Livestock Health Management - II'],
                    ['AG2203AS', 'Elementary Animal Reproduction'], ['AG2204AS', 'One Health, Zoonosis & Food Safety'],
                    ['AG2205AS', 'Fundamentals of Aquaculture & Fisheries'], ['AG2206AS', 'Introductory Agri Economics & Mgmt.']
                ]
            ],
            'Third Year' => [
                'Semester I' => [
                    ['AG3101AS', 'Introductory Poultry Production & Mgmt.'], ['AG3102AS', 'Introductory Veterinary Lab Techniques'],
                    ['AG3103AS', 'Animal Product Technology - II'], ['AG3104AS', 'Fundamentals of Animal Waste Mgmt.'],
                    ['AG3105AS', 'Livestock Extension & Communication'], ['AG3106AS', 'Agribusiness, Marketing & Cooperative'],
                    ['AG3107AS', 'Introductory Animal Welfare & Jurisprudence'], ['AG3108AS', 'Farm Housing and Biosecurity']
                ],
                'Semester II' => [
                    ['AG3201PS', 'Elementary Agriculture Statistics'], ['AG3202PS', 'Social Mobilization & Community Dev.'],
                    ['EG3201MG', 'Entrepreneurship Development'], ['AG3204AS', 'Internship (Farm Practice Training)']
                ]
            ]
        ];
        @endphp

        @foreach($animalScienceSyllabus as $year => $semesters)
        <div class="mb-12">
            <div class="flex items-center gap-4 mb-6">
                <span class="bg-slate-800 text-white px-4 py-1.5 rounded-full text-sm font-bold uppercase tracking-wider">{{ $year }}</span>
                <div class="h-px bg-slate-200 flex-1"></div>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                @foreach($semesters as $semesterName => $courses)
                <div class="bg-white border border-slate-200 shadow-sm flex flex-col">
                    <div class="bg-slate-50 px-5 py-3 border-b border-slate-200">
                        <h3 class="text-slate-800 text-xs font-bold uppercase tracking-widest">{{ $semesterName }}</h3>
                    </div>
                    <div class="flex-1">
                        <table class="w-full text-left border-collapse">
                            <tbody class="divide-y divide-slate-100">
                                @foreach($courses as $course)
                                <tr class="hover:bg-slate-50 transition-colors">
                                    <td class="px-5 py-3 text-[10px] font-mono font-bold text-slate-400 w-32 border-r border-slate-50">{{ $course[0] }}</td>
                                    <td class="px-5 py-3 text-xs font-semibold text-slate-700 leading-tight">{{ $course[1] }}</td>
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
