<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
    public function index(): View
    {
        $data = [
            'name' => 'Iqbal Alqadri Borotan',
            'nim' => '4253550026',
            'class' => 'PSIK25A',
            'courses' => ['HTML', 'CSS', 'JavaScript', 'PHP', 'Laravel'],
        ];

        return view('welcome', $data);
    }

    public function about(): View
    {
        $profile = [
            'name' => 'Iqbal Alqadri Borotan',
            'nim' => '4253550026',
            'program' => 'Ilmu Komputer',
            'university' => 'Universitas Negeri Medan (UNIMED)',
            'class' => 'PSIK25A',
        ];

        return view('about', compact('profile'));
    }

    public function contact(): View
    {
        return view('contact');
    }

    public function sendContact(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:150'],
            'message' => ['required', 'string', 'max:2000'],
        ]);

        // Tugas ini belum menggunakan layanan email. Data divalidasi dan
        // pesan konfirmasi ditampilkan tanpa menyimpan data kontak.
        return redirect()
            ->route('contact')
            ->with('success', 'Terima kasih, ' . $validated['name'] . '! Formulir berhasil divalidasi.');
    }
}
