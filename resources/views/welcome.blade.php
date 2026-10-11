@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<section class="grid items-center gap-12 lg:grid-cols-[1.2fr_.8fr]">
    <div>
        <span class="inline-flex items-center gap-2 rounded-full border border-indigo-400/30 bg-indigo-400/10 px-4 py-2 text-xs font-semibold tracking-wide text-indigo-200">
            <span class="h-2 w-2 rounded-full bg-emerald-400"></span> TUGAS RUTIN 9 · LARAVEL SETUP
        </span>
        <h1 class="mt-7 text-4xl font-extrabold leading-tight tracking-tight sm:text-5xl lg:text-6xl">
            Membangun web dengan <span class="text-indigo-300">Laravel.</span>
        </h1>
        <p class="mt-5 max-w-2xl leading-7 text-slate-400">Halaman beranda dinamis yang menampilkan profil mahasiswa, data kelas, dan materi pembelajaran menggunakan Blade Template.</p>
        <div class="mt-8 flex flex-wrap gap-3">
            <a href="{{ route('about') }}" class="rounded-xl bg-indigo-500 px-5 py-3 text-sm font-bold text-white shadow-lg shadow-indigo-500/20 transition hover:bg-indigo-400">Lihat Profil <i class="fa-solid fa-arrow-right ml-2"></i></a>
            <a href="{{ route('contact') }}" class="rounded-xl border border-white/15 px-5 py-3 text-sm font-semibold text-slate-200 transition hover:bg-white/5">Hubungi Saya</a>
        </div>
    </div>
    <div class="rounded-3xl border border-white/10 bg-gradient-to-br from-indigo-500/15 to-slate-900 p-6 shadow-2xl shadow-black/20 sm:p-8">
        <div class="flex items-center gap-4 border-b border-white/10 pb-6">
            <div class="grid h-16 w-16 place-items-center rounded-2xl bg-indigo-400/15 text-2xl text-indigo-200"><i class="fa-solid fa-user-graduate"></i></div>
            <div>
                <p class="text-sm text-slate-400">Mahasiswa</p>
                <h2 class="text-xl font-bold">{{ $name }}</h2>
                <p class="mt-1 text-sm text-indigo-200">{{ $class }}</p>
            </div>
        </div>
        <dl class="mt-6 space-y-4">
            <div class="flex justify-between gap-4"><dt class="text-sm text-slate-400">NIM</dt><dd class="text-right text-sm font-semibold">{{ $nim }}</dd></div>
            <div class="flex justify-between gap-4"><dt class="text-sm text-slate-400">Program Studi</dt><dd class="text-right text-sm font-semibold">Ilmu Komputer</dd></div>
            <div class="flex justify-between gap-4"><dt class="text-sm text-slate-400">Universitas</dt><dd class="text-right text-sm font-semibold">UNIMED</dd></div>
        </dl>
    </div>
</section>

<section class="mt-16">
    <div class="mb-6 flex flex-col gap-2 sm:flex-row sm:items-end sm:justify-between">
        <div><p class="text-sm font-semibold uppercase tracking-[.2em] text-indigo-300">Learning path</p><h2 class="mt-2 text-2xl font-bold">Materi yang dipelajari</h2></div>
        <p class="text-sm text-slate-500">Daftar materi dikirim dari controller.</p>
    </div>
    @if (count($courses) > 0)
        <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-5">
            @foreach ($courses as $index => $course)
                <div class="rounded-2xl border border-white/10 bg-panel p-5 transition hover:-translate-y-1 hover:border-indigo-400/40">
                    <div class="mb-5 flex h-10 w-10 items-center justify-center rounded-xl bg-indigo-400/10 font-bold text-indigo-200">{{ str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) }}</div>
                    <h3 class="font-bold">{{ $course }}</h3>
                    <p class="mt-2 text-sm text-slate-500">Materi pengembangan web</p>
                </div>
            @endforeach
        </div>
    @else
        <p class="rounded-xl border border-amber-400/20 bg-amber-400/10 p-4 text-amber-200">Belum ada materi yang ditambahkan.</p>
    @endif
</section>

<section class="mt-12 rounded-2xl border border-white/10 bg-white/[.03] p-6 sm:flex sm:items-center sm:justify-between sm:p-8">
    <div><h2 class="text-lg font-bold">Coba route parameter</h2><p class="mt-1 text-sm text-slate-400">Route bonus menampilkan salam berdasarkan nama di URL.</p></div>
    <a href="{{ route('hello', ['nama' => 'Mahasiswa']) }}" class="mt-4 inline-flex items-center gap-2 text-sm font-semibold text-indigo-300 hover:text-indigo-200 sm:mt-0">Buka /hello/Mahasiswa <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
</section>
@endsection
