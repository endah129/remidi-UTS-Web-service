<?php

namespace App\Http\Controllers;

use App\Models\Author;

class AboutController extends Controller
{
    public function index()
    {
        $authors = Author::getAllAuthors();
        return view('about', compact('authors'));
    }
}
