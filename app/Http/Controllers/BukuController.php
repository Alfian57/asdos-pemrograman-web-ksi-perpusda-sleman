<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class BukuController extends Controller
{
    public function index(): View
    {
        return view('buku', [
            'bukuTersedia' => true,
            'bukuList' => [
                'Laskar Pelangi',
                'Bumi Manusia',
                'Filosofi Teras',
            ],
        ]);
    }

    public function buku(): View
    {
        return $this->index();
    }
}
