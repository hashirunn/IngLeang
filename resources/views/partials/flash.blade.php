@if (session('status'))
    <div data-flash
        class="mb-5 animate-slide-in rounded-xl border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm font-medium text-emerald-800">
        {{ session('status') }}
    </div>
@endif

@if (session('error'))
    <div data-flash
        class="mb-5 animate-slide-in rounded-xl border border-rose-200 bg-rose-50 px-4 py-3 text-sm font-medium text-rose-800">
        {{ session('error') }}
    </div>
@endif

@if (session('info'))
    <div data-flash
        class="mb-5 animate-slide-in rounded-xl border border-sky-200 bg-sky-50 px-4 py-3 text-sm font-medium text-sky-800">
        {{ session('info') }}
    </div>
@endif
