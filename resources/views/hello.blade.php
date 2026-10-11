@extends('layouts.app')

@section('title', 'Salam')

@section('content')
<section class="mx-auto max-w-3xl py-12 text-center">
    <div class="mx-auto grid h-20 w-20 place-items-center rounded-3xl bg-indigo-400/10 text-3xl text-indigo-200"><i class="fa-solid fa-hand"></i></div>
    <p class="mt-8 text-sm font-semibold uppercase tracking-[.2em] text-indigo-300">Dynamic route</p>
    <h1 class="mt-3 text-4xl font-extrabold sm:text-5xl">Halo, <span class="text-indigo-300">{{ $nama }}</span>!</h1>
    <p class="mt-5 text-slate-400">Nama pada halaman ini berasal dari parameter URL <code class="rounded bg-white/10 px-2 py-1 text-slate-200">/hello/{nama}</code>.</p>
    <a href="{{ route('home') }}" class="mt-8 inline-flex rounded-xl bg-indigo-500 px-5 py-3 text-sm font-bold hover:bg-indigo-400">Kembali ke beranda</a>
</section>
@endsection
