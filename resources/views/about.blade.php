@extends('layouts.app')

@section('title', 'About Us | Grewok – Fit For Forever | Elite Furniture Hardware')

@section('content')
<!-- Header Banner -->
<section class="bg-brand-navy text-white py-16 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-r from-brand-navy-dark to-brand-navy opacity-90 z-0"></div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-3xl sm:text-4xl font-extrabold tracking-tight">Our Story & Core Values</h1>
        <p class="text-slate-300 mt-2 text-sm max-w-xl mx-auto">Established in 2015 with a commitment to providing hardware that remains Fit For Forever.</p>
    </div>
</section>

<!-- Company Story Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">
            <div class="lg:col-span-7">
                <span class="text-xs uppercase font-extrabold tracking-widest text-brand-red">Established 2015</span>
                <h2 class="text-3xl font-extrabold text-brand-navy mt-2 mb-6">A Trusted Heritage in Quality Hardware</h2>
                
                <div class="space-y-6 text-slate-600 text-sm leading-relaxed">
                    <p>
                        Grewok was founded in 2015 with a clear vision: to introduce high-precision, premium quality cabinet and wardrobe hardware to the rapidly evolving Indian modular furniture market. Over the years, Grewok has grown into a highly trusted name among architects, interior designers, contractors, and premium furniture manufacturers.
                    </p>
                    <p>
                        We understand that furniture is an investment for a lifetime. Therefore, the mechanical components that hold them together must be built to last. Our tagline, <strong class="text-brand-navy">"Fit For Forever"</strong>, is not just a phrase—it is our engineering promise. From heavy-duty ball-bearing telescopic slides to advanced clip-on 3D hydraulic hinges, Grewok products are built for ultimate smooth motion and longevity.
                    </p>
                    <p>
                        Headquartered in Gujarat, we actively distribute our products across 7 states, ensuring that homeowners in every major region have access to elite modular kitchen and wardrobe organizers.
                    </p>
                </div>
            </div>
            
            <div class="lg:col-span-5 bg-brand-light border border-slate-100 rounded-3xl p-8 shadow-sm">
                <h3 class="font-extrabold text-brand-navy text-lg mb-6 border-b border-slate-200 pb-4">Company Overview</h3>
                <ul class="space-y-4">
                    <li class="flex justify-between items-center text-xs">
                        <span class="font-bold text-slate-500 uppercase tracking-wide">Brand Name</span>
                        <span class="font-extrabold text-brand-navy">Grewok</span>
                    </li>
                    <li class="flex justify-between items-center text-xs">
                        <span class="font-bold text-slate-500 uppercase tracking-wide">Founded</span>
                        <span class="font-extrabold text-brand-navy">2015</span>
                    </li>
                    <li class="flex justify-between items-center text-xs">
                        <span class="font-bold text-slate-500 uppercase tracking-wide">Headquarters</span>
                        <span class="font-extrabold text-brand-navy">Ahmedabad, Gujarat</span>
                    </li>
                    <li class="flex justify-between items-center text-xs">
                        <span class="font-bold text-slate-500 uppercase tracking-wide">Primary Accent</span>
                        <span class="font-extrabold text-brand-red">Deep Navy & Bright Red</span>
                    </li>
                    <li class="flex justify-between items-center text-xs">
                        <span class="font-bold text-slate-500 uppercase tracking-wide">Core Expertise</span>
                        <span class="font-extrabold text-brand-navy text-right">Premium Kitchen & Wardrobe Systems</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Vision, Mission & Quality Sections -->
<section class="py-20 bg-brand-light border-y border-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            
            <!-- Vision -->
            <div class="bg-white rounded-2xl p-8 border border-slate-100 shadow-sm flex flex-col justify-between hover:shadow-md transition-brand">
                <div>
                    <div class="w-12 h-12 rounded-xl bg-brand-navy/5 text-brand-navy flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-brand-red" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                    </div>
                    <h3 class="font-extrabold text-brand-navy text-xl mb-4">Our Vision</h3>
                    <p class="text-slate-500 text-xs leading-relaxed">
                        To be the most preferred and trusted brand in premium furniture hardware solutions across Indian homes, setting global benchmarks in silent motion, space-saving designs, and lifetime endurance.
                    </p>
                </div>
            </div>
            
            <!-- Mission -->
            <div class="bg-white rounded-2xl p-8 border border-slate-100 shadow-sm flex flex-col justify-between hover:shadow-md transition-brand">
                <div>
                    <div class="w-12 h-12 rounded-xl bg-brand-navy/5 text-brand-navy flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-brand-red" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                    <h3 class="font-extrabold text-brand-navy text-xl mb-4">Our Mission</h3>
                    <p class="text-slate-500 text-xs leading-relaxed">
                        To enrich daily living experiences by engineering smooth, smart, and highly functional architectural hardware. We strive to provide premium motion products that maximize space efficiency and enhance the luxury value of every home.
                    </p>
                </div>
            </div>
            
            <!-- Quality Assurance -->
            <div class="bg-white rounded-2xl p-8 border border-slate-100 shadow-sm flex flex-col justify-between hover:shadow-md transition-brand">
                <div>
                    <div class="w-12 h-12 rounded-xl bg-brand-navy/5 text-brand-navy flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-brand-red" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg>
                    </div>
                    <h3 class="font-extrabold text-brand-navy text-xl mb-4">Quality Assurance</h3>
                    <p class="text-slate-500 text-xs leading-relaxed">
                        We deploy rigid quality control parameters at every production step. Grewok products are manufactured from certified virgin steel and Grade 304 Stainless Steel, tested for 80,000 open/close cycles and 48-hour continuous salt spray tests.
                    </p>
                </div>
            </div>
            
        </div>
    </div>
</section>

<!-- Trust Badges & Certifications -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="text-xs uppercase font-extrabold tracking-widest text-brand-red">Guaranteed Performance</span>
        <h2 class="text-3xl font-extrabold text-brand-navy mt-2 mb-16">The Grewok Trust Seals</h2>
        
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            <div class="flex flex-col items-center">
                <div class="w-16 h-16 bg-brand-light rounded-full border border-slate-100 flex items-center justify-center text-brand-navy mb-4 shadow-sm">
                    <!-- Badge 1: Warranty -->
                    <span class="font-extrabold text-sm">10 Yrs</span>
                </div>
                <h4 class="font-bold text-brand-navy text-xs uppercase tracking-wider mb-1">Replacement Warranty</h4>
                <p class="text-[10px] text-slate-500 max-w-[160px] leading-normal">On SS 304 auto hinges and premium soft-close slides.</p>
            </div>
            
            <div class="flex flex-col items-center">
                <div class="w-16 h-16 bg-brand-light rounded-full border border-slate-100 flex items-center justify-center text-brand-navy mb-4 shadow-sm">
                    <!-- Badge 2: Steel -->
                    <span class="font-extrabold text-sm">SS304</span>
                </div>
                <h4 class="font-bold text-brand-navy text-xs uppercase tracking-wider mb-1">Virgin Raw Materials</h4>
                <p class="text-[10px] text-slate-500 max-w-[160px] leading-normal">We do not use recycled or scrap steel. 100% premium virgin grade metals.</p>
            </div>
            
            <div class="flex flex-col items-center">
                <div class="w-16 h-16 bg-brand-light rounded-full border border-slate-100 flex items-center justify-center text-brand-navy mb-4 shadow-sm">
                    <!-- Badge 3: Cycles -->
                    <span class="font-extrabold text-sm">80k+</span>
                </div>
                <h4 class="font-bold text-brand-navy text-xs uppercase tracking-wider mb-1">Cycle Durability Tested</h4>
                <p class="text-[10px] text-slate-500 max-w-[160px] leading-normal">Certified to operate flawlessly under loaded weight cycles.</p>
            </div>
            
            <div class="flex flex-col items-center">
                <div class="w-16 h-16 bg-brand-light rounded-full border border-slate-100 flex items-center justify-center text-brand-navy mb-4 shadow-sm">
                    <!-- Badge 4: Rust -->
                    <span class="font-extrabold text-sm">SGS</span>
                </div>
                <h4 class="font-bold text-brand-navy text-xs uppercase tracking-wider mb-1">Corrosion Resistant</h4>
                <p class="text-[10px] text-slate-500 max-w-[160px] leading-normal">SGS-level tested for standard electroplating and rust resistance.</p>
            </div>
        </div>
    </div>
</section>
@endsection
