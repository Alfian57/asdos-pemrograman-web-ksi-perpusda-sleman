<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class BerandaController extends Controller
{
    public function beranda(): View
    {
        return view('beranda');
    }

    public function index(): View
    {
        return $this->beranda();
    }

    public function tentangKami(): View
    {
        return view('tentang-kami');
    }
}
