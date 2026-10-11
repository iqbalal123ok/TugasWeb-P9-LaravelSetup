@extends('layouts.app')

@section('title', 'Tentang')

@section('content')
<section class="mx-auto max-w-4xl">
    <p class="text-sm font-semibold uppercase tracking-[.2em] text-indigo-300">Tentang saya</p>
    <h1 class="mt-3 text-4xl font-extrabold tracking-tight sm:text-5xl">Profil <span class="text-indigo-300">Mahasiswa</span></h1>
    <p class="mt-5 max-w-2xl leading-7 text-slate-400">Halaman ini menampilkan informasi profil mahasiswa sebagai contoh pengiriman data dari controller ke Blade view pada Laravel.</p>
    <div class="mt-9 overflow-hidden rounded-3xl border border-white/10 bg-panel">
        <div class="bg-gradient-to-r from-indigo-500/20 to-transparent p-7 sm:p-9">
            <div class="flex items-center gap-5">
                <div class="grid h-16 w-16 place-items-center rounded-2xl bg-indigo-400/15 text-2xl text-indigo-200"><i class="fa-solid fa-user"></i></div>
                <div><h2 class="text-2xl font-bold">{{ $profile['name'] }}</h2><p class="mt-1 text-sm text-indigo-200">{{ $profile['program'] }}</p></div>
            </div>
        </div>
        <dl class="divide-y divide-white/10 px-7 sm:px-9">
            <div class="grid gap-1 py-5 sm:grid-cols-[180px_1fr]"><dt class="text-sm text-slate-500">Nama lengkap</dt><dd class="font-medium">{{ $profile['name'] }}</dd></div>
            <div class="grid gap-1 py-5 sm:grid-cols-[180px_1fr]"><dt class="text-sm text-slate-500">NIM</dt><dd class="font-medium">{{ $profile['nim'] }}</dd></div>
            <div class="grid gap-1 py-5 sm:grid-cols-[180px_1fr]"><dt class="text-sm text-slate-500">Kelas</dt><dd class="font-medium">{{ $profile['class'] }}</dd></div>
            <div class="grid gap-1 py-5 sm:grid-cols-[180px_1fr]"><dt class="text-sm text-slate-500">Program studi</dt><dd class="font-medium">{{ $profile['program'] }}</dd></div>
            <div class="grid gap-1 py-5 sm:grid-cols-[180px_1fr]"><dt class="text-sm text-slate-500">Perguruan tinggi</dt><dd class="font-medium">{{ $profile['university'] }}</dd></div>
        </dl>
    </div>
    <a href="{{ route('home') }}" class="mt-7 inline-flex items-center gap-2 text-sm font-semibold text-indigo-300 hover:text-indigo-200"><i class="fa-solid fa-arrow-left"></i> Kembali ke beranda</a>
</section>
@endsection
