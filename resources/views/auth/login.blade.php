<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Masuk · {{ config('app.name', 'IngLearn') }}</title>
    <link rel="icon" type="image/jpeg" href="{{ asset('storage/favicon/favicon.jpeg') }}">
    @fonts
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-slate-50 text-slate-800 antialiased">
    <div class="grid min-h-screen lg:grid-cols-2">
        {{-- Brand panel --}}
        <div class="relative hidden overflow-hidden bg-gradient-to-br from-slate-900 via-emerald-950 to-slate-900 p-12 text-white lg:flex lg:flex-col">
            <div class="absolute -left-16 -top-16 h-64 w-64 rounded-full bg-emerald-500/15 blur-2xl"></div>
            <div class="absolute -bottom-24 -right-10 h-80 w-80 rounded-full bg-teal-500/15 blur-3xl"></div>

            <a href="#" class="relative flex items-center gap-3">
                <span class="grid h-11 w-11 place-items-center rounded-2xl bg-white text-emerald-700 shadow-lg">
                    <x-icon name="book-open" class="h-5 w-5" />
                </span>
                <span class="text-xl font-bold tracking-tight">IngLearn</span>
            </a>

            <div class="relative mt-auto">
                <h1 class="max-w-md text-4xl font-bold leading-tight">
                    Belajar bahasa Inggris dari nol sampai mahir.
                </h1>
                <p class="mt-4 max-w-md text-white/70">
                    Tiga level, 45 modul, ratusan latihan interaktif: pilihan ganda, isi kosong,
                    benar-salah, matching, listening, dan speaking — langsung dinilai.
                </p>
                <div class="mt-8 flex flex-wrap gap-2">
                    <span class="rounded-full border border-white/15 bg-white/10 px-3 py-1.5 text-xs font-medium text-white/85 backdrop-blur">Beginner · A1-A2</span>
                    <span class="rounded-full border border-white/15 bg-white/10 px-3 py-1.5 text-xs font-medium text-white/85 backdrop-blur">Intermediate · B1-B2</span>
                    <span class="rounded-full border border-white/15 bg-white/10 px-3 py-1.5 text-xs font-medium text-white/85 backdrop-blur">Advanced · C1-C2</span>
                </div>
            </div>

            <p class="relative mt-10 text-xs text-white/50">Mengacu pada kurikulum CEFR — {{ config('app.name') }}</p>
        </div>

        {{-- Form panel --}}
        <div class="flex items-center justify-center px-5 py-10 sm:px-10">
            <div class="w-full max-w-md animate-fade-up">
                <div class="mb-8 lg:hidden">
                    <span class="grid h-11 w-11 place-items-center rounded-2xl bg-emerald-600 text-white">
                        <x-icon name="book-open" class="h-5 w-5" />
                    </span>
                    <h1 class="mt-4 text-2xl font-bold tracking-tight text-slate-900">Selamat datang kembali</h1>
                    <p class="muted mt-1">Masuk untuk melanjutkan latihanmu.</p>
                </div>

                <div class="hidden lg:block">
                    <h1 class="text-3xl font-bold tracking-tight text-slate-900">Masuk</h1>
                    <p class="muted mt-1">Lanjutkan progres belajarmu hari ini.</p>
                </div>

                <form method="POST" action="{{ route('login.store') }}" class="card mt-6 space-y-4 p-6 sm:p-7">
                    @csrf

                    <div>
                        <label for="email" class="mb-1.5 block text-xs font-medium text-slate-500">Email</label>
                        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                            class="input" placeholder="nama@email.com">
                        @error('email')
                            <p class="mt-1.5 text-xs font-medium text-rose-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="password" class="mb-1.5 block text-xs font-medium text-slate-500">Password</label>
                        <input id="password" type="password" name="password" required class="input"
                            placeholder="••••••••">
                        @error('password')
                            <p class="mt-1.5 text-xs font-medium text-rose-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <label class="flex items-center gap-2 text-sm text-slate-500">
                        <input type="checkbox" name="remember" class="h-4 w-4 rounded border-slate-300 text-emerald-600 focus:ring-emerald-400">
                        Ingat saya
                    </label>

                    <button type="submit" class="btn-primary w-full">
                        Masuk <x-icon name="arrow-right" class="h-4 w-4" />
                    </button>

                    <div class="rounded-xl border border-dashed border-slate-300 bg-slate-50 p-3 text-xs text-slate-500">
                        <span class="font-semibold text-slate-700">Akun demo:</span> demo@inglearn.test · password
                    </div>
                </form>

                <p class="mt-6 text-center text-sm text-slate-500">
                    Belum punya akun?
                    <a href="{{ route('register') }}" class="font-semibold text-emerald-600 hover:underline">Daftar gratis</a>
                </p>
            </div>
        </div>
    </div>
</body>

</html>
