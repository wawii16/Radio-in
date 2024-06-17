<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Radio;
use App\Models\Podcast;
use App\Models\Berita;

class HomeController extends Controller
{
    public function index()
    {
        $radios = Radio::all();
        $podcasts = Podcast::all();
        $beritas = Berita::all();
        return view('index', compact('radios', 'podcasts', 'beritas'));
    }
}
