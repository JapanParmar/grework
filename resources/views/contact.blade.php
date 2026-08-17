@extends('layouts.app')

@section('title', 'Contact Us & Dealership Form | Grewok – Fit For Forever')

@section('content')
<!-- Header Section -->
<section class="bg-brand-navy text-white py-14">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-3xl font-extrabold tracking-tight">Connect With Grewok</h1>
        <p class="text-slate-300 mt-2 text-sm max-w-xl mx-auto">Contact our sales team, request quotation support, or apply to join our dealer network.</p>
    </div>
</section>

<!-- Main Details & Form Grid -->
<section class="py-20 bg-brand-light" x-data="{ formType: '{{ request('type', 'general') }}' }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-start">
            
            <!-- Details Panel (lg:col-span-5) -->
            <div class="lg:col-span-5 space-y-8">
                <!-- Address Details Card -->
                <div class="bg-white rounded-3xl border border-slate-100 p-8 shadow-sm space-y-6">
                    <h3 class="font-extrabold text-brand-navy text-lg border-b border-slate-100 pb-4">Gujarat Sales Head Office</h3>
                    
                    <div class="space-y-4 text-xs font-semibold text-slate-600">
                        <div class="flex items-start gap-3">
                            <div class="w-8 h-8 rounded-lg bg-red-50 text-brand-red flex items-center justify-center flex-shrink-0">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            </div>
                            <div class="leading-relaxed">
                                <span class="block text-[10px] text-slate-400 uppercase font-bold mb-0.5">Physical Address</span>
                                <address class="not-italic text-brand-navy">
                                    3-Seller, Arbuda Estate,<br>
                                    Nr. Nidhi Co. Op. Bank, Ambica Hotel,<br>
                                    CTM Char Rasta N.H. 08,<br>
                                    Ahmedabad - 380026, Gujarat, India
                                </address>
                            </div>
                        </div>
                        
                        <div class="flex items-start gap-3">
                            <div class="w-8 h-8 rounded-lg bg-blue-50 text-brand-navy flex items-center justify-center flex-shrink-0">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L22 8m-2 11H4a2 2 0 01-2-2V7a2 2 0 012-2h16a2 2 0 012 2v10a2 2 0 01-2 2z"></path></svg>
                            </div>
                            <div>
                                <span class="block text-[10px] text-slate-400 uppercase font-bold mb-0.5">Email Address</span>
                                <a href="mailto:grewokhardware@gmail.com" class="text-brand-navy hover:text-brand-red transition-brand">grewokhardware@gmail.com</a>
                            </div>
                        </div>
                        
                        <div class="flex items-start gap-3">
                            <div class="w-8 h-8 rounded-lg bg-slate-100 text-slate-700 flex items-center justify-center flex-shrink-0">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path></svg>
                            </div>
                            <div>
                                <span class="block text-[10px] text-slate-400 uppercase font-bold mb-0.5">Official Website</span>
                                <a href="http://www.grewokindia.com" target="_blank" class="text-brand-navy hover:text-brand-red transition-brand">www.grewokindia.com</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="pt-4 border-t border-slate-100">
                        <a href="https://wa.me/919999999999?text=Hello%20Grewok!%20I%20have%20an%20inquiry." target="_blank"
                           class="w-full flex items-center justify-center gap-2.5 bg-emerald-500 hover:bg-emerald-600 text-white font-bold py-3.5 rounded-xl shadow-lg shadow-emerald-500/20 transition-brand text-xs uppercase tracking-wider">
                            <!-- WA -->
                            <svg class="w-5.5 h-5.5" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946C.06 5.348 5.397.01 12.008.01c3.202.001 6.212 1.246 8.477 3.514 2.266 2.268 3.507 5.28 3.505 8.484-.004 6.657-5.34 11.997-11.953 11.997-2.005-.001-3.973-.502-5.73-1.45L0 24zm6.59-4.846c1.6.95 3.188 1.449 4.825 1.451 5.436 0 9.859-4.42 9.863-9.864.002-2.637-1.023-5.116-2.887-6.98C16.584 1.9 14.11 .876 11.477.876c-5.437 0-9.862 4.42-9.866 9.864-.001 1.902.501 3.757 1.455 5.378L2.005 22l6.009-1.576c1.625.962 3.15 1.43 4.633 1.43z"/></svg>
                            <span>Chat on WhatsApp</span>
                        </a>
                    </div>
                </div>

                <!-- Google Maps Embed -->
                <div class="bg-white rounded-3xl border border-slate-100 overflow-hidden shadow-sm aspect-video relative">
                    <!-- Standard Google Map pointing to CTM Char Rasta, Ahmedabad -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3673.344400781717!2d72.6366579149666!3d22.9928399850028!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e865f12df4973%3A0xe5c75bf6ad005f56!2sCTM%20Char%20Rasta%2C%20Ahmedabad%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1655000000000!5m2!1sen!2sin" 
                            class="w-full h-full border-0 absolute inset-0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            <!-- Forms Panel (lg:col-span-7) -->
            <div class="lg:col-span-7 bg-white rounded-3xl border border-slate-100 p-8 lg:p-12 shadow-sm">
                <!-- Alpine Form Tab Switcher -->
                <div class="flex border-b border-slate-100 pb-6 mb-8 gap-4">
                    <button @click="formType = 'general'" 
                            class="pb-3 text-sm font-bold transition-brand border-b-2 focus:outline-none"
                            :class="formType === 'general' ? 'border-brand-red text-brand-navy' : 'border-transparent text-slate-400 hover:text-slate-600'">
                        General Enquiry
                    </button>
                    <button @click="formType = 'dealer'" 
                            class="pb-3 text-sm font-bold transition-brand border-b-2 focus:outline-none"
                            :class="formType === 'dealer' ? 'border-brand-red text-brand-navy' : 'border-transparent text-slate-400 hover:text-slate-600'">
                        Become a Dealer
                    </button>
                </div>

                <!-- A. General Enquiry Form -->
                <div x-show="formType === 'general'" x-cloak>
                    <form action="#" method="POST" onsubmit="alert('Thank you! Your inquiry has been submitted. Our sales coordinator will contact you shortly.'); this.reset(); return false;" class="space-y-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-[10px] font-bold uppercase tracking-wider text-slate-500 mb-1.5">Your Name</label>
                                <input type="text" required placeholder="Enter full name" class="w-full bg-slate-50 border border-slate-200 focus:border-brand-navy rounded-xl py-3 px-4 text-xs font-semibold outline-none transition-brand">
                            </div>
                            <div>
                                <label class="block text-[10px] font-bold uppercase tracking-wider text-slate-500 mb-1.5">Email Address</label>
                                <input type="email" required placeholder="Enter email address" class="w-full bg-slate-50 border border-slate-200 focus:border-brand-navy rounded-xl py-3 px-4 text-xs font-semibold outline-none transition-brand">
                            </div>
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-[10px] font-bold uppercase tracking-wider text-slate-500 mb-1.5">Phone Number</label>
                                <input type="tel" required placeholder="Enter 10-digit number" class="w-full bg-slate-50 border border-slate-200 focus:border-brand-navy rounded-xl py-3 px-4 text-xs font-semibold outline-none transition-brand">
                            </div>
                            <div>
                                <label class="block text-[10px] font-bold uppercase tracking-wider text-slate-500 mb-1.5">State</label>
                                <select required class="w-full bg-slate-50 border border-slate-200 focus:border-brand-navy rounded-xl py-3 px-4 text-xs font-semibold outline-none transition-brand cursor-pointer">
                                    <option value="">Select Location</option>
                                    <option value="Gujarat">Gujarat</option>
                                    <option value="Maharashtra">Maharashtra</option>
                                    <option value="Chhattisgarh">Chhattisgarh</option>
                                    <option value="Rajasthan">Rajasthan</option>
                                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                                    <option value="Karnataka">Karnataka</option>
                                    <option value="Telangana">Telangana</option>
                                    <option value="Other">Other State</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label class="block text-[10px] font-bold uppercase tracking-wider text-slate-500 mb-1.5">How can we help you?</label>
                            <textarea required rows="4" placeholder="Mention product interest, catalogue requests, or technical specs inquiry..." class="w-full bg-slate-50 border border-slate-200 focus:border-brand-navy rounded-xl py-3 px-4 text-xs font-semibold outline-none transition-brand resize-none"></textarea>
                        </div>

                        <button type="submit" class="w-full bg-brand-navy hover:bg-brand-navy-dark text-white font-bold py-3.5 rounded-xl shadow-lg transition-brand text-xs uppercase tracking-wider">
                            Submit Inquiry
                        </button>
                    </form>
                </div>

                <!-- B. Become a Dealer Form -->
                <div x-show="formType === 'dealer'" x-cloak>
                    <form action="#" method="POST" onsubmit="alert('Application submitted! Our distribution team will review your business credentials and get in touch in 2 business days.'); this.reset(); return false;" class="space-y-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-[10px] font-bold uppercase tracking-wider text-slate-500 mb-1.5">Proprietor / Contact Name</label>
                                <input type="text" required placeholder="Enter primary contact name" class="w-full bg-slate-50 border border-slate-200 focus:border-brand-navy rounded-xl py-3 px-4 text-xs font-semibold outline-none transition-brand">
                            </div>
                            <div>
                                <label class="block text-[10px] font-bold uppercase tracking-wider text-slate-500 mb-1.5">Shop / Firm Name</label>
                                <input type="text" required placeholder="Enter firm registration name" class="w-full bg-slate-50 border border-slate-200 focus:border-brand-navy rounded-xl py-3 px-4 text-xs font-semibold outline-none transition-brand">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div>
                                <label class="block text-[10px] font-bold uppercase tracking-wider text-slate-500 mb-1.5">Mobile Number</label>
                                <input type="tel" required placeholder="Enter mobile" class="w-full bg-slate-50 border border-slate-200 focus:border-brand-navy rounded-xl py-3 px-4 text-xs font-semibold outline-none transition-brand">
                            </div>
                            <div>
                                <label class="block text-[10px] font-bold uppercase tracking-wider text-slate-500 mb-1.5">Serving State</label>
                                <select required class="w-full bg-slate-50 border border-slate-200 focus:border-brand-navy rounded-xl py-3.5 px-4 text-xs font-semibold outline-none transition-brand cursor-pointer">
                                    <option value="">Select State</option>
                                    <option value="Gujarat">Gujarat</option>
                                    <option value="Maharashtra">Maharashtra</option>
                                    <option value="Chhattisgarh">Chhattisgarh</option>
                                    <option value="Rajasthan">Rajasthan</option>
                                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                                    <option value="Karnataka">Karnataka</option>
                                    <option value="Telangana">Telangana</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-[10px] font-bold uppercase tracking-wider text-slate-500 mb-1.5">Serving City / Region</label>
                                <input type="text" required placeholder="e.g. Pune / Nagpur" class="w-full bg-slate-50 border border-slate-200 focus:border-brand-navy rounded-xl py-3 px-4 text-xs font-semibold outline-none transition-brand">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-[10px] font-bold uppercase tracking-wider text-slate-500 mb-1.5">Firm GST Number (Optional)</label>
                                <input type="text" placeholder="24XXXXXXXXXXXXX" class="w-full bg-slate-50 border border-slate-200 focus:border-brand-navy rounded-xl py-3 px-4 text-xs font-semibold outline-none transition-brand uppercase">
                            </div>
                            <div>
                                <label class="block text-[10px] font-bold uppercase tracking-wider text-slate-500 mb-1.5">Type of Business</label>
                                <select required class="w-full bg-slate-50 border border-slate-200 focus:border-brand-navy rounded-xl py-3.5 px-4 text-xs font-semibold outline-none transition-brand cursor-pointer">
                                    <option value="retailer">Retail Showroom</option>
                                    <option value="wholesaler">Hardware Wholesaler</option>
                                    <option value="builder">Builder / Modular Kitchen Manufacturer</option>
                                    <option value="contractor">Interior Contractor</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label class="block text-[10px] font-bold uppercase tracking-wider text-slate-500 mb-1.5">Brief Business Profile</label>
                            <textarea required rows="3" placeholder="Describe your current store size, monthly turnover, or major brands you represent..." class="w-full bg-slate-50 border border-slate-200 focus:border-brand-navy rounded-xl py-3 px-4 text-xs font-semibold outline-none transition-brand resize-none"></textarea>
                        </div>

                        <button type="submit" class="w-full bg-brand-red hover:bg-brand-red-dark text-white font-bold py-3.5 rounded-xl shadow-lg shadow-brand-red/25 transition-brand text-xs uppercase tracking-wider">
                            Apply for Dealership
                        </button>
                    </form>
                </div>

            </div>
            
        </div>
        
    </div>
</section>
@endsection
