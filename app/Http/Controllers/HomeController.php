<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;

class HomeController extends Controller
{
    /**
     * Display the home page
     * Menggabungkan Model, View, dan Controller (MVC)
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Mengambil data dari Model
        $destinations = Destination::getAllDestinations();

        // Menggunakan function count sesuai ketentuan UTS no.4
        $totalDestinations = Destination::countDestinations();

        // Data untuk halaman home
        $data = [
            'title' => 'Home',
            'description' => 'Halaman ini dibuat oleh 2301010022 - ENDAH KOMARIYAH LESTARI (GENAP)',
            'destinations' => $destinations,
            'total' => $totalDestinations
        ];

        return view('home', $data);
    }
}