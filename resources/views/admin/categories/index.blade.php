@extends('admin.layouts.app')

@section('title', 'Manage Categories | Grewok Admin Control Panel')
@section('page_title', 'Hardware Categories Management')
@section('page_subtitle', 'Organize product lines into categories and subcategories.')

@section('content')

<div x-data="{
    modalOpen: false,
    editingCategory: null,
    formId: '',
    originalId: '',
    formName: '',
    formDescription: '',
    formImage: '',
    formSubcategories: '',

    openAddModal() {
        this.editingCategory = false;
        this.formId = '';
        this.originalId = '';
        this.formName = '';
        this.formDescription = '';
        this.formImage = '';
        this.formSubcategories = '';
        this.modalOpen = true;
    },

    openEditModal(cat) {
        this.editingCategory = true;
        this.formId = cat.id;
        this.originalId = cat.id;
        this.formName = cat.name;
        this.formDescription = cat.description;
        this.formImage = cat.image || '';
        this.formSubcategories = (cat.subcategories || []).join(', ');
        this.modalOpen = true;
    }
}">

    <!-- Top Action Bar -->
    <div class="flex items-center justify-between mb-8">
        <div>
            <h3 class="font-bold text-white text-base">Active Categories</h3>
            <p class="text-xs text-slate-400">Total Categories: {{ count($categories) }}</p>
        </div>

        <button @click="openAddModal()" class="bg-brand-red hover:bg-brand-red-dark text-white text-xs font-bold py-2.5 px-4 rounded-xl shadow-lg shadow-brand-red/20 transition-all flex items-center gap-2">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4"></path></svg>
            <span>Add New Category</span>
        </button>
    </div>

    <!-- Category Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($categories as $catId => $cat)
        <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6 flex flex-col justify-between hover:border-slate-700 transition-all shadow-sm">
            <div>
                <div class="flex items-center justify-between mb-4">
                    <div x-data="{ loaded: false }" class="relative w-12 h-12 rounded-xl bg-slate-800 border border-slate-700 overflow-hidden flex-shrink-0">
                        <div x-show="!loaded" class="absolute inset-0 skeleton-shimmer-dark"></div>
                        <img src="{{ $cat['image'] ?? '/images/hero-kitchen.png' }}" alt="{{ $cat['name'] }}" @load="loaded = true" :class="loaded ? 'opacity-100' : 'opacity-0'" class="w-full h-full object-cover transition-opacity duration-300">
                    </div>
                    <span class="text-[10px] font-mono font-bold bg-slate-800 text-slate-400 px-2.5 py-1 rounded-lg border border-slate-700">
                        {{ $catId }}
                    </span>
                </div>

                <h4 class="font-extrabold text-white text-base mb-2">{{ $cat['name'] }}</h4>
                <p class="text-xs text-slate-400 leading-relaxed line-clamp-2 mb-4">{{ $cat['description'] }}</p>

                <!-- Subcategories -->
                @if(isset($cat['subcategories']) && count($cat['subcategories']) > 0)
                <div class="mb-4">
                    <span class="block text-[9px] uppercase font-bold text-slate-500 mb-1.5">Subcategories:</span>
                    <div class="flex flex-wrap gap-1.5">
                        @foreach($cat['subcategories'] as $sub)
                        <span class="text-[10px] bg-slate-950 border border-slate-800 text-slate-300 font-semibold px-2 py-0.5 rounded">
                            {{ $sub }}
                        </span>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>

            <div class="pt-4 border-t border-slate-800 flex items-center justify-between">
                <a href="{{ route('products.category', $catId) }}" target="_blank" class="text-xs font-semibold text-slate-400 hover:text-sky-400">View Public Listing &rarr;</a>
                
                <div class="flex items-center gap-2">
                    <button @click="openEditModal({{ json_encode($cat) }})" class="p-2 text-slate-400 hover:text-white hover:bg-slate-800 rounded-lg transition-all" title="Edit Category">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                    </button>

                    <form action="{{ route('admin.categories.delete', $catId) }}" method="POST" onsubmit="return confirm('Delete category {{ $cat['name'] }}?')">
                        @csrf
                        <button type="submit" class="p-2 text-slate-400 hover:text-red-400 hover:bg-slate-800 rounded-lg transition-all" title="Delete Category">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Category Create / Edit Modal -->
    <div class="fixed inset-0 z-50 overflow-y-auto" x-show="modalOpen" x-cloak>
        <div class="fixed inset-0 bg-slate-950/80 backdrop-blur-sm" @click="modalOpen = false"></div>
        
        <div class="relative min-h-screen flex items-center justify-center p-4">
            <div class="relative bg-slate-900 border border-slate-800 w-full max-w-lg rounded-3xl p-6 sm:p-8 shadow-2xl space-y-6">
                
                <div class="flex items-center justify-between border-b border-slate-800 pb-4">
                    <h3 class="font-extrabold text-lg text-white" x-text="editingCategory ? 'Edit Category' : 'Create Category'"></h3>
                    <button @click="modalOpen = false" class="text-slate-400 hover:text-white p-1">&times;</button>
                </div>

                <form action="{{ route('admin.categories.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                    @csrf
                    <input type="hidden" name="original_id" x-model="originalId">

                    <div>
                        <label class="block text-[10px] font-extrabold uppercase tracking-wider text-slate-400 mb-2">Category Name *</label>
                        <input type="text" name="name" x-model="formName" required placeholder="e.g. Architectural Handles"
                               class="w-full bg-slate-950 border border-slate-800 focus:border-brand-red rounded-xl py-3 px-4 text-xs text-white outline-none font-medium">
                    </div>

                    <div>
                        <label class="block text-[10px] font-extrabold uppercase tracking-wider text-slate-400 mb-2">Category ID / Slug *</label>
                        <input type="text" name="id" x-model="formId" required placeholder="e.g. architectural-handles"
                               class="w-full bg-slate-950 border border-slate-800 focus:border-brand-red rounded-xl py-3 px-4 text-xs text-white outline-none font-medium">
                    </div>

                    <div>
                        <label class="block text-[10px] font-extrabold uppercase tracking-wider text-slate-400 mb-2">Description *</label>
                        <textarea name="description" x-model="formDescription" rows="3" required placeholder="Brief category description..."
                                  class="w-full bg-slate-950 border border-slate-800 focus:border-brand-red rounded-xl p-3 text-xs text-white outline-none font-medium"></textarea>
                    </div>

                    <div>
                        <label class="block text-[10px] font-extrabold uppercase tracking-wider text-slate-400 mb-2">Subcategories (Comma-separated)</label>
                        <input type="text" name="subcategories_str" x-model="formSubcategories" placeholder="Pull Handles, Mortise Handles, Cabinet Knobs"
                               class="w-full bg-slate-950 border border-slate-800 focus:border-brand-red rounded-xl py-3 px-4 text-xs text-white outline-none font-medium">
                    </div>

                    <div>
                        <label class="block text-[10px] font-extrabold uppercase tracking-wider text-slate-400 mb-2">Upload Category Cover Image</label>
                        <input type="file" name="image" accept="image/*"
                               class="w-full bg-slate-950 border border-slate-800 focus:border-brand-red rounded-xl p-2.5 text-xs text-slate-300 file:mr-4 file:py-1 file:px-3 file:rounded-lg file:border-0 file:text-xs file:font-bold file:bg-brand-red file:text-white">
                    </div>

                    <div>
                        <label class="block text-[10px] font-extrabold uppercase tracking-wider text-slate-400 mb-2">OR Cover Image URL</label>
                        <input type="text" name="image_url" x-model="formImage" placeholder="/images/hero-kitchen.png"
                               class="w-full bg-slate-950 border border-slate-800 focus:border-brand-red rounded-xl py-3 px-4 text-xs text-white outline-none font-medium">
                    </div>

                    <div class="pt-4 border-t border-slate-800 flex items-center justify-end gap-3">
                        <button type="button" @click="modalOpen = false" class="px-5 py-2.5 bg-slate-800 text-slate-300 font-bold rounded-xl text-xs">Cancel</button>
                        <button type="submit" class="px-6 py-2.5 bg-brand-red hover:bg-brand-red-dark text-white font-bold rounded-xl text-xs uppercase tracking-wider">Save Category</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

</div>

@endsection
