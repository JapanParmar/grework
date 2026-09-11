<!DOCTYPE html>
<html lang="en" class="h-full bg-slate-950">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | Grewok Control Panel</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="h-full font-sans text-slate-100 antialiased flex items-center justify-center p-4 relative overflow-hidden bg-slate-950">

    <!-- Decorative background glow -->
    <div class="absolute top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-brand-red/20 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute bottom-1/4 left-1/3 w-80 h-80 bg-brand-navy rounded-full blur-3xl opacity-40 pointer-events-none"></div>

    <div class="w-full max-w-md relative z-10">
        
        <!-- Logo & Header -->
        <div class="text-center mb-8">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-brand-navy rounded-2xl border border-slate-700 shadow-2xl mb-4">
                <svg class="w-10 h-10 text-white" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.3 22 21.62 17.88 21.96 12.67H12V15.33H19.22C18.66 17.7 16.53 19.33 12 19.33C7.94 19.33 4.67 16.06 4.67 12C4.67 7.94 7.94 4.67 12 4.67C15.22 4.67 17.96 6.74 18.9 9.6H21.75C20.69 5.17 16.73 2 12 2Z" fill="currentColor"/>
                    <rect x="11" y="11" width="10" height="2.5" fill="#E31C25"/>
                </svg>
            </div>
            <h1 class="text-2xl font-black tracking-tight text-white">Grewok Admin Portal</h1>
            <p class="text-xs text-slate-400 mt-1">Authenticate to access product catalog & enquiry controls</p>
        </div>

        <!-- Login Card -->
        <div class="bg-slate-900/80 backdrop-blur-xl border border-slate-800 rounded-3xl p-8 shadow-2xl">
            
            @if($errors->any())
            <div class="mb-6 p-4 bg-red-950/80 border border-red-500/50 rounded-2xl text-red-300 text-xs font-semibold">
                {{ $errors->first() }}
            </div>
            @endif

            @if(session('error'))
            <div class="mb-6 p-4 bg-red-950/80 border border-red-500/50 rounded-2xl text-red-300 text-xs font-semibold">
                {{ session('error') }}
            </div>
            @endif

            @if(session('success'))
            <div class="mb-6 p-4 bg-emerald-950/80 border border-emerald-500/50 rounded-2xl text-emerald-300 text-xs font-semibold">
                {{ session('success') }}
            </div>
            @endif

            <form action="{{ route('admin.login.submit') }}" method="POST" class="space-y-5">
                @csrf
                <div>
                    <label class="block text-[10px] font-extrabold uppercase tracking-wider text-slate-400 mb-2">Username or Email</label>
                    <input type="text" name="email" value="{{ old('email', 'admin@grewok.com') }}" required 
                           class="w-full bg-slate-950/80 border border-slate-800 focus:border-brand-red rounded-xl py-3 px-4 text-xs text-white outline-none transition-all font-medium">
                </div>

                <div>
                    <label class="block text-[10px] font-extrabold uppercase tracking-wider text-slate-400 mb-2">Password</label>
                    <input type="password" name="password" value="grewok@admin" required 
                           class="w-full bg-slate-950/80 border border-slate-800 focus:border-brand-red rounded-xl py-3 px-4 text-xs text-white outline-none transition-all font-medium">
                </div>

                <button type="submit" class="w-full bg-brand-red hover:bg-brand-red-dark text-white font-bold py-3.5 px-6 rounded-xl shadow-lg shadow-brand-red/25 transition-all text-xs uppercase tracking-wider">
                    Sign In to Admin Panel
                </button>
            </form>

            <!-- Predefined credentials box for user convenience -->
            <div class="mt-6 p-4 bg-slate-950/60 border border-slate-800/80 rounded-2xl text-center">
                <span class="block text-[10px] uppercase font-bold text-slate-400 tracking-wider mb-1">Default Login Credentials</span>
                <div class="text-xs font-semibold text-slate-300">
                    <span>Email: <code class="text-brand-red font-mono font-bold bg-slate-900 px-1.5 py-0.5 rounded">admin@grewok.com</code></span>
                    <span class="mx-1">&bull;</span>
                    <span>Pass: <code class="text-brand-red font-mono font-bold bg-slate-900 px-1.5 py-0.5 rounded">grewok@admin</code></span>
                </div>
            </div>

        </div>

        <div class="text-center mt-6 text-xs text-slate-500">
            <a href="{{ route('home') }}" class="hover:text-white transition-all">&larr; Back to Grewok Homepage</a>
        </div>

    </div>

</body>
</html>
