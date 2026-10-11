@extends('layouts.app')

@section('title', 'Kontak')

@section('content')
<section class="mx-auto grid max-w-5xl gap-10 lg:grid-cols-[.8fr_1.2fr]">
    <div>
        <p class="text-sm font-semibold uppercase tracking-[.2em] text-indigo-300">Kontak</p>
        <h1 class="mt-3 text-4xl font-extrabold tracking-tight sm:text-5xl">Mari <span class="text-indigo-300">terhubung.</span></h1>
        <p class="mt-5 leading-7 text-slate-400">Gunakan formulir ini untuk mencoba validasi input Laravel. Formulir belum mengirim email atau menyimpan pesan ke database.</p>
        <div class="mt-8 space-y-4 text-sm text-slate-300">
            <p class="flex items-center gap-3"><i class="fa-solid fa-user w-5 text-indigo-300"></i> Iqbal Alqadri Borotan</p>
            <p class="flex items-center gap-3"><i class="fa-solid fa-graduation-cap w-5 text-indigo-300"></i> Ilmu Komputer · UNIMED</p>
            <p class="flex items-center gap-3"><i class="fa-solid fa-id-card w-5 text-indigo-300"></i> 4253550026</p>
        </div>
    </div>
    <div class="rounded-3xl border border-white/10 bg-panel p-6 sm:p-8">
        @if (session('success'))
            <div role="status" class="mb-6 rounded-xl border border-emerald-400/20 bg-emerald-400/10 p-4 text-sm text-emerald-200">{{ session('success') }}</div>
        @endif
        @if ($errors->any())
            <div role="alert" class="mb-6 rounded-xl border border-red-400/20 bg-red-400/10 p-4 text-sm text-red-200">
                <p class="mb-2 font-semibold">Periksa kembali input Anda:</p>
                <ul class="list-inside list-disc space-y-1">@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
            </div>
        @endif
        <form action="{{ route('contact.send') }}" method="POST" class="space-y-5">
            @csrf
            <div>
                <label for="name" class="mb-2 block text-sm font-medium text-slate-300">Nama</label>
                <input id="name" name="name" type="text" value="{{ old('name') }}" required maxlength="100" autocomplete="name" class="w-full rounded-xl border border-white/10 bg-ink px-4 py-3 text-sm outline-none transition placeholder:text-slate-600 focus:border-indigo-400" placeholder="Nama Anda">
                @error('name')<p class="mt-2 text-sm text-red-300">{{ $message }}</p>@enderror
            </div>
            <div>
                <label for="email" class="mb-2 block text-sm font-medium text-slate-300">Email</label>
                <input id="email" name="email" type="email" value="{{ old('email') }}" required maxlength="150" autocomplete="email" class="w-full rounded-xl border border-white/10 bg-ink px-4 py-3 text-sm outline-none transition placeholder:text-slate-600 focus:border-indigo-400" placeholder="nama@email.com">
                @error('email')<p class="mt-2 text-sm text-red-300">{{ $message }}</p>@enderror
            </div>
            <div>
                <label for="message" class="mb-2 block text-sm font-medium text-slate-300">Pesan</label>
                <textarea id="message" name="message" rows="5" required maxlength="2000" class="w-full resize-y rounded-xl border border-white/10 bg-ink px-4 py-3 text-sm outline-none transition placeholder:text-slate-600 focus:border-indigo-400" placeholder="Tuliskan pesan Anda...">{{ old('message') }}</textarea>
                @error('message')<p class="mt-2 text-sm text-red-300">{{ $message }}</p>@enderror
            </div>
            <button type="submit" class="w-full rounded-xl bg-indigo-500 px-5 py-3 font-bold text-white transition hover:bg-indigo-400">Kirim pesan <i class="fa-solid fa-paper-plane ml-2"></i></button>
        </form>
    </div>
</section>
@endsection
