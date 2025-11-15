<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        // Hardcode sesuai permintaan dosen, tetapi identitas diganti kamu
        $authors = [
            [
                'nim' => '2301010022',
                'name' => 'ENDAH KOMARIYAH LESTARI',
                'bio' => 'Mahasiswi yang berdedikasi tinggi...',
                'image' => '2301010022.jpeg'
            ],
            [
                'nim' => '2301010022',
                'name' => 'ENDAH KOMARIYAH LESTARI',
                'bio' => 'Mahasiswi yang berdedikasi tinggi...',
                'image' => '2301010022.jpeg'
            ]
        ];

        return view('about.about', compact('authors'));
    }
}
