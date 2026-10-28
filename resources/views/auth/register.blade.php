<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Daftar · {{ config('app.name', 'IngLearn') }}</title>
    <link rel="icon" type="image/jpeg" href="{{ asset('storage/favicon/favicon.jpeg') }}">
    @fonts
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-slate-50 text-slate-800 antialiased">
    <div class="grid min-h-screen lg:grid-cols-2">
        {{-- Brand panel --}}
        <div class="relative hidden overflow-hidden bg-gradient-to-br from-slate-900 via-emerald-950 to-slate-900 p-12 text-white lg:flex lg:flex-col">
            <div class="absolute -right-16 -top-16 h-72 w-72 rounded-full bg-emerald-400/20 blur-3xl"></div>

            <a href="#" class="relative flex items-center gap-3">
                <span class="grid h-11 w-11 place-items-center rounded-2xl bg-white text-emerald-700 shadow-lg">
                    <x-icon name="book-open" class="h-5 w-5" />
                </span>
                <span class="text-xl font-bold tracking-tight">IngLearn</span>
            </a>

            <div class="relative mt-auto">
                <h1 class="max-w-md text-4xl font-bold leading-tight">
                    Mulai perjalanan bahasa Inggrismu hari ini.
                </h1>
                <p class="mt-4 max-w-widest text-white/70">
                    Kerjakan tes penempatan singkat, dapatkan level yang cocok, lalu belajar
                    modul demi modul dengan latihan yang langsung dinilai.
                </p>
                <ul class="mt-8 space-y-3 text-sm text-white/80">
                    <li class="flex items-center gap-3">
                        <span class="grid h-6 w-6 shrink-0 place-items-center rounded-full bg-emerald-400/25 text-emerald-200">
                            <x-icon name="check" class="h-3.5 w-3.5" />
                        </span>
                        Materi + pembahasan lengkap
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="grid h-6 w-6 shrink-0 place-items-center rounded-full bg-emerald-400/25 text-emerald-200">
                            <x-icon name="check" class="h-3.5 w-3.5" />
                        </span>
                        Latihan listening & speaking
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="grid h-6 w-6 shrink-0 place-items-center rounded-full bg-emerald-400/25 text-emerald-200">
                            <x-icon name="check" class="h-3.5 w-3.5" />
                        </span>
                        Nilai dan streak harian
                    </li>
                </ul>
            </div>
        </div>

        {{-- Form panel --}}
        <div class="flex items-center justify-center px-5 py-10 sm:px-10">
            <div class="w-full max-w-md animate-fade-up">
                <span class="grid h-11 w-11 place-items-center rounded-2xl bg-emerald-600 text-white lg:hidden">
                    <x-icon name="book-open" class="h-5 w-5" />
                </span>
                <h1 class="mt-4 text-3xl font-bold tracking-tight text-slate-900">Buat akun</h1>
                <p class="muted mt-1">Gratis, tanpa role lain — hanya kamu dan materinya.</p>

                <form method="POST" action="{{ route('register.store') }}" class="card mt-6 space-y-4 p-6 sm:p-7">
                    @csrf

                    <div>
                        <label for="name" class="mb-1.5 block text-xs font-medium text-slate-500">Nama</label>
                        <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus
                            class="input" placeholder="Nama panggilanmu">
                        @error('name')
                            <p class="mt-1.5 text-xs font-medium text-rose-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="email" class="mb-1.5 block text-xs font-medium text-slate-500">Email</label>
                        <input id="email" type="email" name="email" value="{{ old('email') }}" required class="input"
                            placeholder="nama@email.com">
                        @error('email')
                            <p class="mt-1.5 text-xs font-medium text-rose-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="password" class="mb-1.5 block text-xs font-medium text-slate-500">Password</label>
                        <input id="password" type="password" name="password" required class="input"
                            placeholder="Minimal 8 karakter">
                        @error('password')
                            <p class="mt-1.5 text-xs font-medium text-rose-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="password_confirmation" class="mb-1.5 block text-xs font-medium text-slate-500">Ulangi password</label>
                        <input id="password_confirmation" type="password" name="password_confirmation" required
                            class="input" placeholder="••••••••">
                    </div>

                    <button type="submit" class="btn-primary w-full">
                        Daftar & mulai tes penempatan <x-icon name="arrow-right" class="h-4 w-4" />
                    </button>
                </form>

                <p class="mt-6 text-center text-sm text-slate-500">
                    Sudah punya akun?
                    <a href="{{ route('login') }}" class="font-semibold text-emerald-600 hover:underline">Masuk</a>
                </p>
            </div>
        </div>
    </div>
</body>

</html>
