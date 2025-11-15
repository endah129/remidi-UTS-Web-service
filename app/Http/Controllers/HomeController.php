<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;

class HomeController extends Controller
{
    /**
     * Display the home page
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Mengambil data dari Model
        $destinations = Destination::getAllDestinations();

        // Menghitung total destinasi
        $totalDestinations = Destination::countDestinations();

        // Data untuk halaman home
        $data = [
            'title' => 'Home',
            'description' => 'Halaman ini dibuat oleh 2301010051 - ENDAH KOMARIYAH LESTARI',
            'destinations' => $destinations,
            'total' => $totalDestinations
        ];

        return view('home', $data);
    }
}
