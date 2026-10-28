<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Dashboard') · {{ config('app.name', 'IngLearn') }}</title>

    <link rel="icon" type="image/jpeg" href="{{ asset('storage/favicon/favicon.jpeg') }}">

    @fonts
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Single source of truth for the line-icon set, read by JS-rendered UI (exercise runner). --}}
    <script type="application/json" id="icon-paths">
        {!! json_encode(\App\Support\Icons::PATHS, JSON_HEX_TAG | JSON_HEX_AMP | JSON_UNESCAPED_SLASHES) !!}
    </script>
</head>

<body class="min-h-screen bg-slate-50 text-slate-800 antialiased">
    <div class="mx-auto flex min-h-screen w-full max-w-[1600px]">
        {{-- Sidebar (desktop) --}}
        <aside class="sticky top-0 hidden h-screen w-64 shrink-0 flex-col border-r border-slate-200 bg-white px-4 py-6 lg:flex">
            <a href="{{ route('dashboard') }}" class="flex items-center gap-3 rounded-xl px-2 py-1">
                <span class="grid h-10 w-10 place-items-center rounded-xl bg-emerald-600 text-white">
                    <x-icon name="book-open" class="h-5 w-5" />
                </span>
                <span>
                    <span class="block text-lg font-bold leading-tight tracking-tight text-slate-900">IngLearn</span>
                    <span class="block text-[13px] font-medium text-slate-400">Belajar bahasa Inggris</span>
                </span>
            </a>

            <nav class="mt-8 space-y-1.5">
                <a href="{{ route('dashboard') }}"
                    class="nav-link {{ request()->routeIs('dashboard') ? 'nav-link-active' : '' }}">
                    <x-icon name="home" class="h-[18px] w-[18px]" /> Dashboard
                </a>
                <a href="{{ route('levels.index') }}"
                    class="nav-link {{ request()->routeIs('levels.*') || request()->routeIs('modules.*') ? 'nav-link-active' : '' }}">
                    <x-icon name="layers" class="h-[18px] w-[18px]" /> Level Belajar
                </a>
                <a href="{{ route('placement.show') }}"
                    class="nav-link {{ request()->routeIs('placement.*') ? 'nav-link-active' : '' }}">
                    <x-icon name="compass" class="h-[18px] w-[18px]" /> Tes Penempatan
                </a>
            </nav>

            <div class="mt-8 rounded-2xl border border-amber-100 bg-amber-50/70 p-4">
                <div class="flex items-center gap-2.5">
                    <span class="grid h-9 w-9 place-items-center rounded-xl bg-amber-100 text-amber-600">
                        <x-icon name="flame" class="h-5 w-5" />
                    </span>
                    <div>
                        <p class="text-lg font-bold leading-none text-slate-900">
                            {{ auth()->user()->current_streak_count }} hari
                        </p>
                        <p class="text-[13px] font-medium text-amber-600">Beruntun harian</p>
                    </div>
                </div>
                <p class="mt-2 text-[13px] text-slate-500">Belajar setiap hari agar apinya tetap menyala.</p>
            </div>

            <div class="mt-auto space-y-3">
                <div class="flex items-center gap-3 rounded-2xl border border-slate-200 bg-slate-50 p-3">
                    <span
                        class="grid h-9 w-9 shrink-0 place-items-center rounded-full bg-slate-900 text-xs font-bold text-white">{{ strtoupper(substr(auth()->user()->name, 0, 1)) }}</span>
                    <div class="min-w-0">
                        <p class="truncate text-sm font-semibold text-slate-800">{{ auth()->user()->name }}</p>
                        <p class="truncate text-xs text-slate-400">{{ auth()->user()->email }}</p>
                    </div>
                </div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn-secondary w-full">
                        <x-icon name="logout" class="h-4 w-4" /> Keluar
                    </button>
                </form>
            </div>
        </aside>

        <div class="flex min-w-0 flex-1 flex-col">
            {{-- Top bar (mobile) --}}
            <header
                class="sticky top-0 z-40 flex items-center justify-between border-b border-slate-200 bg-white/90 px-4 py-3 backdrop-blur lg:hidden">
                <a href="{{ route('dashboard') }}" class="flex items-center gap-2.5">
                    <span class="grid h-8 w-8 place-items-center rounded-lg bg-emerald-600 text-white">
                        <x-icon name="book-open" class="h-[18px] w-[18px]" />
                    </span>
                    <span class="text-base font-bold tracking-tight text-slate-900">IngLearn</span>
                </a>
                <div class="flex items-center gap-3">
                    <span class="chip border-amber-100 bg-amber-50 text-amber-700">
                        <x-icon name="flame" class="h-3.5 w-3.5" /> {{ auth()->user()->current_streak_count }}
                    </span>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" aria-label="Keluar"
                            class="grid h-9 w-9 place-items-center rounded-lg text-slate-400 transition hover:bg-slate-100 hover:text-slate-600">
                            <x-icon name="logout" class="h-[18px] w-[18px]" />
                        </button>
                    </form>
                </div>
            </header>

            <main class="mx-auto w-full max-w-6xl flex-1 px-4 pb-28 pt-6 sm:px-6 lg:px-8 lg:pb-14">
                @include('partials.flash')
                @yield('content')
            </main>

            {{-- Bottom navigation (mobile) --}}
            <nav
                class="fixed inset-x-0 bottom-0 z-40 border-t border-slate-200 bg-white/95 backdrop-blur lg:hidden">
                <div class="mx-auto grid max-w-md grid-cols-3 gap-1 px-2 py-2">
                    <a href="{{ route('dashboard') }}"
                        class="flex flex-col items-center gap-1 rounded-xl px-2 py-2 text-[12px] font-semibold transition {{ request()->routeIs('dashboard') ? 'bg-emerald-50 text-emerald-700' : 'text-slate-500' }}">
                        <x-icon name="home" class="h-5 w-5" /> Dashboard
                    </a>
                    <a href="{{ route('levels.index') }}"
                        class="flex flex-col items-center gap-1 rounded-xl px-2 py-2 text-[12px] font-semibold transition {{ request()->routeIs('levels.*') || request()->routeIs('modules.*') ? 'bg-emerald-50 text-emerald-700' : 'text-slate-500' }}">
                        <x-icon name="layers" class="h-5 w-5" /> Level
                    </a>
                    <a href="{{ route('placement.show') }}"
                        class="flex flex-col items-center gap-1 rounded-xl px-2 py-2 text-[12px] font-semibold transition {{ request()->routeIs('placement.*') ? 'bg-emerald-50 text-emerald-700' : 'text-slate-500' }}">
                        <x-icon name="compass" class="h-5 w-5" /> Tes
                    </a>
                </div>
            </nav>
        </div>
    </div>

    <div id="toast-host"
        class="pointer-events-none fixed bottom-24 left-1/2 z-50 flex w-[90%] max-w-sm -translate-x-1/2 flex-col items-center gap-2 lg:bottom-8">
    </div>

    @stack('scripts')
</body>

</html>
