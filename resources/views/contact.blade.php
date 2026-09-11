@extends('layouts.app')

@section('title', 'Connect & Dealership | Grewok — Fit For Forever')

@section('content')
<div class="max-w-[1200px] mx-auto px-4 sm:px-6 lg:px-8 pt-8 pb-24" x-data="{ formType: '{{ request('type', 'general') }}' }">

    <!-- ── Header ── -->
    <div class="mb-10 text-center max-w-2xl mx-auto">
        <div class="flex items-center justify-center gap-2 text-[12px] text-[#4f4c4a] track-tight-12 mb-2 font-medium">
            <a href="{{ route('home') }}" class="hover:text-black transition-shop">Home</a>
            <span>&bull;</span>
            <span class="text-black font-bold">Contact & Dealership</span>
        </div>
        <h1 class="text-3xl sm:text-4xl font-bold text-black tracking-tight leading-tight mb-2">
            Connect With Grewok
        </h1>
        <p class="text-[15px] text-[#4f4c4a] track-tight-14 font-normal">
            Direct sales consultations, wholesale inquiries, and dealership network applications.
        </p>
    </div>

    <!-- ── Two Column Presentation ── -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
        
        <!-- Left: Office & Quick Touchpoints (lg:col-span-5) -->
        <div class="lg:col-span-5 space-y-6">
            <div class="bg-[#ffffff] rounded-card-shop border border-[#ebebeb] shadow-shop-card p-8 space-y-6">
                <h3 class="text-[18px] font-bold text-black track-tight-20 border-b border-[#ebebeb] pb-4">Head Office & Distribution</h3>

                <div class="space-y-4 text-[13px] text-[#221f1d] track-tight-14">
                    <div>
                        <span class="text-[11px] font-bold uppercase tracking-wider text-[#4f4c4a] block mb-1">Physical Address</span>
                        <p class="leading-relaxed font-normal">
                            3-Seller, Arbuda Estate, Nr. Nidhi Co. Op. Bank, Ambica Hotel, CTM Char Rasta, Ahmedabad - 380026, Gujarat
                        </p>
                    </div>

                    <div>
                        <span class="text-[11px] font-bold uppercase tracking-wider text-[#4f4c4a] block mb-1">Email Inquiries</span>
                        <a href="mailto:grewokhardware@gmail.com" class="text-black hover:text-[#5433eb] transition-shop font-bold underline">grewokhardware@gmail.com</a>
                    </div>

                    <div>
                        <span class="text-[11px] font-bold uppercase tracking-wider text-[#4f4c4a] block mb-1">Official Web</span>
                        <a href="https://www.grewokindia.com" target="_blank" class="text-black hover:text-[#5433eb] transition-shop font-bold">www.grewokindia.com</a>
                    </div>
                </div>

                <div class="pt-2">
                    <a href="https://wa.me/919999999999?text=Hello%20Grewok!%20I%20have%20an%20inquiry." target="_blank"
                       class="w-full h-12 rounded-full bg-black text-white text-[14px] font-bold hover:bg-[#332f2d] transition-shop flex items-center justify-center gap-2 shadow-sm">
                        <span>Chat Directly on WhatsApp</span>
                    </a>
                </div>
            </div>

            <!-- Google Maps Card -->
            <div class="bg-[#ffffff] rounded-card-shop border border-[#ebebeb] shadow-shop-card p-3 overflow-hidden aspect-video relative">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3673.344400781717!2d72.6366579149666!3d22.9928399850028!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e865f12df4973%3A0xe5c75bf6ad005f56!2sCTM%20Char%20Rasta%2C%20Ahmedabad%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1655000000000!5m2!1sen!2sin" 
                        class="w-full h-full rounded-inner-shop border border-[#ebebeb]" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>

        <!-- Right: Inquiry Form (lg:col-span-7) -->
        <div class="lg:col-span-7 bg-[#ffffff] rounded-card-shop border border-[#ebebeb] shadow-shop-card p-8 sm:p-12">
            <!-- Tabs -->
            <div class="flex items-center gap-3 border-b border-[#ebebeb] pb-4 mb-6">
                <button @click="formType = 'general'" 
                        class="px-5 py-2 rounded-full text-[13px] font-bold transition-shop focus:outline-none border"
                        :class="formType === 'general' ? 'bg-black text-white border-black' : 'bg-[#f9fafb] text-[#4f4c4a] border-[#d1d5db] hover:text-black'">
                    General Enquiry
                </button>
                <button @click="formType = 'dealer'" 
                        class="px-5 py-2 rounded-full text-[13px] font-bold transition-shop focus:outline-none border"
                        :class="formType === 'dealer' ? 'bg-[#5433eb] text-white border-[#5433eb] shadow-violet-submit' : 'bg-[#f9fafb] text-[#4f4c4a] border-[#d1d5db] hover:text-black'">
                    Become a Dealer
                </button>
            </div>

            <!-- General Form -->
            <div x-show="formType === 'general'" x-cloak>
                <form action="#" method="POST" onsubmit="alert('Thank you! Your inquiry has been submitted.'); this.reset(); return false;" class="space-y-4">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-[11px] font-bold uppercase tracking-wider text-[#4f4c4a] mb-1.5">Your Name</label>
                            <input type="text" required placeholder="Full Name" class="w-full h-11 bg-[#f9fafb] rounded-full border border-[#d1d5db] focus:border-black focus:bg-white px-5 text-[14px] text-black font-medium placeholder-[#666666] outline-none transition-shop">
                        </div>
                        <div>
                            <label class="block text-[11px] font-bold uppercase tracking-wider text-[#4f4c4a] mb-1.5">Email</label>
                            <input type="email" required placeholder="Email Address" class="w-full h-11 bg-[#f9fafb] rounded-full border border-[#d1d5db] focus:border-black focus:bg-white px-5 text-[14px] text-black font-medium placeholder-[#666666] outline-none transition-shop">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-[11px] font-bold uppercase tracking-wider text-[#4f4c4a] mb-1.5">Phone</label>
                            <input type="tel" required placeholder="Mobile Number" class="w-full h-11 bg-[#f9fafb] rounded-full border border-[#d1d5db] focus:border-black focus:bg-white px-5 text-[14px] text-black font-medium placeholder-[#666666] outline-none transition-shop">
                        </div>
                        <div>
                            <label class="block text-[11px] font-bold uppercase tracking-wider text-[#4f4c4a] mb-1.5">State</label>
                            <select required class="w-full h-11 bg-[#f9fafb] rounded-full border border-[#d1d5db] focus:border-black focus:bg-white px-4 text-[14px] text-black font-medium outline-none transition-shop cursor-pointer">
                                <option value="">Select Region</option>
                                <option value="Gujarat">Gujarat</option>
                                <option value="Maharashtra">Maharashtra</option>
                                <option value="Rajasthan">Rajasthan</option>
                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                <option value="Chhattisgarh">Chhattisgarh</option>
                                <option value="Karnataka">Karnataka</option>
                                <option value="Telangana">Telangana</option>
                                <option value="Other">Other Region</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label class="block text-[11px] font-bold uppercase tracking-wider text-[#4f4c4a] mb-1.5">Message / Requirements</label>
                        <textarea required rows="3" placeholder="Tell us how we can assist..." class="w-full bg-[#f9fafb] rounded-[20px] border border-[#d1d5db] focus:border-black focus:bg-white p-4 text-[14px] text-black font-medium placeholder-[#666666] outline-none transition-shop resize-none"></textarea>
                    </div>

                    <button type="submit" class="w-full h-12 rounded-full bg-black text-white text-[14px] font-bold hover:bg-[#332f2d] transition-shop mt-2 shadow-sm">
                        Send Message
                    </button>
                </form>
            </div>

            <!-- Dealer Application Form -->
            <div x-show="formType === 'dealer'" x-cloak>
                <form action="#" method="POST" onsubmit="alert('Thank you for applying! Our distribution manager will connect with you within 48 hours.'); this.reset(); return false;" class="space-y-4">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-[11px] font-bold uppercase tracking-wider text-[#4f4c4a] mb-1.5">Contact Person</label>
                            <input type="text" required placeholder="Proprietor / Manager" class="w-full h-11 bg-[#f9fafb] rounded-full border border-[#d1d5db] focus:border-black focus:bg-white px-5 text-[14px] text-black font-medium placeholder-[#666666] outline-none transition-shop">
                        </div>
                        <div>
                            <label class="block text-[11px] font-bold uppercase tracking-wider text-[#4f4c4a] mb-1.5">Firm / Store Name</label>
                            <input type="text" required placeholder="Company Name" class="w-full h-11 bg-[#f9fafb] rounded-full border border-[#d1d5db] focus:border-black focus:bg-white px-5 text-[14px] text-black font-medium placeholder-[#666666] outline-none transition-shop">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                        <div>
                            <label class="block text-[11px] font-bold uppercase tracking-wider text-[#4f4c4a] mb-1.5">Mobile</label>
                            <input type="tel" required placeholder="Phone" class="w-full h-11 bg-[#f9fafb] rounded-full border border-[#d1d5db] focus:border-black focus:bg-white px-5 text-[14px] text-black font-medium placeholder-[#666666] outline-none transition-shop">
                        </div>
                        <div>
                            <label class="block text-[11px] font-bold uppercase tracking-wider text-[#4f4c4a] mb-1.5">State</label>
                            <select required class="w-full h-11 bg-[#f9fafb] rounded-full border border-[#d1d5db] focus:border-black focus:bg-white px-4 text-[14px] text-black font-medium outline-none transition-shop cursor-pointer">
                                <option value="">Select Region</option>
                                <option value="Gujarat">Gujarat</option>
                                <option value="Maharashtra">Maharashtra</option>
                                <option value="Rajasthan">Rajasthan</option>
                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                <option value="Chhattisgarh">Chhattisgarh</option>
                                <option value="Karnataka">Karnataka</option>
                                <option value="Telangana">Telangana</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-[11px] font-bold uppercase tracking-wider text-[#4f4c4a] mb-1.5">City</label>
                            <input type="text" required placeholder="e.g. Pune" class="w-full h-11 bg-[#f9fafb] rounded-full border border-[#d1d5db] focus:border-black focus:bg-white px-5 text-[14px] text-black font-medium placeholder-[#666666] outline-none transition-shop">
                        </div>
                    </div>

                    <div>
                        <label class="block text-[11px] font-bold uppercase tracking-wider text-[#4f4c4a] mb-1.5">Business Type</label>
                        <select required class="w-full h-11 bg-[#f9fafb] rounded-full border border-[#d1d5db] focus:border-black focus:bg-white px-4 text-[14px] text-black font-medium outline-none transition-shop cursor-pointer">
                            <option value="retailer">Retail Hardware Store</option>
                            <option value="wholesaler">Hardware Wholesaler / Distributor</option>
                            <option value="builder">Modular Kitchen & Wardrobe Manufacturer</option>
                            <option value="architect">Architect / Interior Studio</option>
                        </select>
                    </div>

                    <button type="submit" class="w-full h-12 rounded-full bg-[#5433eb] text-white text-[14px] font-bold shadow-violet-submit hover:opacity-95 transition-shop mt-2">
                        Submit Dealership Application
                    </button>
                </form>
            </div>
        </div>

    </div>

</div>
@endsection
