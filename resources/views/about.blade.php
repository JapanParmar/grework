@extends('layouts.app')

@section('title', 'About Grewok — Fit For Forever | Engineering Heritage')

@section('content')
<div class="max-w-[1200px] mx-auto px-4 sm:px-6 lg:px-8 pt-8 pb-24">

    <!-- ── Header ── -->
    <div class="mb-10 text-center max-w-2xl mx-auto">
        <div class="flex items-center justify-center gap-2 text-[12px] text-[#4f4c4a] track-tight-12 mb-2 font-medium">
            <a href="{{ route('home') }}" class="hover:text-black transition-shop">Home</a>
            <span>&bull;</span>
            <span class="text-black font-bold">About Grewok</span>
        </div>
        <h1 class="text-3xl sm:text-4xl font-bold text-black tracking-tight leading-tight mb-2">
            Our Story & Engineering Values
        </h1>
        <p class="text-[15px] text-[#4f4c4a] track-tight-14 font-normal">
            Established in 2015 with a singular commitment: hardware that remains Fit For Forever.
        </p>
    </div>

    <!-- ── Heritage Two Column Card ── -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-stretch mb-16">
        <div class="lg:col-span-7 bg-[#ffffff] rounded-card-shop border border-[#ebebeb] shadow-shop-card p-8 sm:p-12 flex flex-col justify-between">
            <div>
                <span class="text-[11px] font-bold uppercase tracking-wider text-[#4f4c4a] block mb-1">Established 2015</span>
                <h2 class="text-2xl font-bold text-black track-tight-20 mb-4">A Decade of Precision Engineering</h2>
                
                <div class="space-y-4 text-[14px] text-[#221f1d] leading-relaxed track-tight-14 font-normal">
                    <p>
                        Grewok was founded in 2015 to introduce European-grade architectural mechanics to India's dynamic modular home sector. Over the past decade, we have partnered with leading modular manufacturers, interior architects, and premium hardware retailers across 7 states.
                    </p>
                    <p>
                        Our motto <strong class="text-black font-bold">"Fit For Forever"</strong> is built on uncompromising materials: 100% virgin-grade steel, Grade 304 Stainless Steel hydraulic dampers, and micro-tolerance ball-bearing slides.
                    </p>
                </div>
            </div>

            <div class="pt-6 mt-6 border-t border-[#ebebeb] flex items-center gap-4">
                <div class="text-[13px] text-[#4f4c4a] font-medium">
                    Headquarters: <span class="text-black font-bold">Ahmedabad, Gujarat</span> &bull; Pan-India Distribution
                </div>
            </div>
        </div>

        <!-- Right Quick Overview Stats -->
        <div class="lg:col-span-5 bg-[#ffffff] rounded-card-shop border border-[#ebebeb] shadow-shop-card p-8 sm:p-12 flex flex-col justify-between">
            <h3 class="text-[16px] font-bold text-black track-tight-16 mb-4 border-b border-[#ebebeb] pb-3">Benchmark Metrics</h3>

            <div class="space-y-4">
                <div class="flex items-center justify-between py-2 border-b border-[#ebebeb]">
                    <span class="text-[13px] text-[#4f4c4a] font-medium">Founded</span>
                    <span class="text-[14px] font-bold text-black">2015</span>
                </div>
                <div class="flex items-center justify-between py-2 border-b border-[#ebebeb]">
                    <span class="text-[13px] text-[#4f4c4a] font-medium">Replacement Warranty</span>
                    <span class="text-[14px] font-bold text-black">10 Years</span>
                </div>
                <div class="flex items-center justify-between py-2 border-b border-[#ebebeb]">
                    <span class="text-[13px] text-[#4f4c4a] font-medium">Cycle Stress Testing</span>
                    <span class="text-[14px] font-bold text-black">80,000 Cycles</span>
                </div>
                <div class="flex items-center justify-between py-2 border-b border-[#ebebeb]">
                    <span class="text-[13px] text-[#4f4c4a] font-medium">Raw Material Grade</span>
                    <span class="text-[14px] font-bold text-[#5433eb]">100% Virgin Metal</span>
                </div>
                <div class="flex items-center justify-between py-2">
                    <span class="text-[13px] text-[#4f4c4a] font-medium">Regions Active</span>
                    <span class="text-[14px] font-bold text-black">7 Indian States</span>
                </div>
            </div>

            <div class="pt-4">
                <a href="{{ route('products.all') }}" class="w-full h-11 rounded-full bg-black hover:bg-[#332f2d] text-white text-[13px] font-bold transition-shop flex items-center justify-center gap-2 shadow-sm">
                    Browse All Collections
                </a>
            </div>
        </div>
    </div>

    <!-- ── Vision, Mission, Quality (3 Cards) ── -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-16">
        <!-- Vision -->
        <div class="bg-[#ffffff] rounded-card-shop border border-[#ebebeb] shadow-shop-card p-8 flex flex-col justify-between hover-float transition-shop">
            <div>
                <span class="w-10 h-10 rounded-full bg-[#f2f4f5] border border-[#ebebeb] flex items-center justify-center text-black mb-4 font-bold text-[14px]">
                    01
                </span>
                <h3 class="text-[18px] font-bold text-black track-tight-20 mb-2">Our Vision</h3>
                <p class="text-[13px] text-[#4f4c4a] leading-relaxed track-tight-14 font-normal">
                    Setting benchmarks in silent movement, space optimization, and mechanical longevity for every modern Indian living space.
                </p>
            </div>
        </div>

        <!-- Mission -->
        <div class="bg-[#ffffff] rounded-card-shop border border-[#ebebeb] shadow-shop-card p-8 flex flex-col justify-between hover-float transition-shop">
            <div>
                <span class="w-10 h-10 rounded-full bg-[#f2f4f5] border border-[#ebebeb] flex items-center justify-center text-black mb-4 font-bold text-[14px]">
                    02
                </span>
                <h3 class="text-[18px] font-bold text-black track-tight-20 mb-2">Our Mission</h3>
                <p class="text-[13px] text-[#4f4c4a] leading-relaxed track-tight-14 font-normal">
                    Empowering architects and cabinet fabricators with reliable, heavy-gauge hardware that never degrades or requires premature maintenance.
                </p>
            </div>
        </div>

        <!-- Quality Guarantee -->
        <div class="bg-[#ffffff] rounded-card-shop border border-[#ebebeb] shadow-shop-card p-8 flex flex-col justify-between hover-float transition-shop">
            <div>
                <span class="w-10 h-10 rounded-full bg-[#f2f4f5] border border-[#ebebeb] flex items-center justify-center text-black mb-4 font-bold text-[14px]">
                    03
                </span>
                <h3 class="text-[18px] font-bold text-black track-tight-20 mb-2">Quality Guarantee</h3>
                <p class="text-[13px] text-[#4f4c4a] leading-relaxed track-tight-14 font-normal">
                    Tested for extreme humidity, corrosion, and continuous cycles. Every batch undergoes strict dimensional check inspections.
                </p>
            </div>
        </div>
    </div>

</div>
@endsection
