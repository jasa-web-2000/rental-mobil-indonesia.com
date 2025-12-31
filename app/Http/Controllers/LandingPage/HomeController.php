<?php

namespace App\Http\Controllers\LandingPage;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function __invoke()
    {
        return view('pages.home', [
            'page' => 'Beranda',
            'title' => "Rental Mobil Murah se-Indonesia Unit Lengkap",
            'description' => 'Rental mobil murah se-Indonesia dengan unit lengkap. Tersedia mobil manual / matic dan plus sopir. ' . web()->tagline . " CV. Idola Tebo Wisata",
            // 'thumbnail' => [
            //     'url' => asset(web()->defaultLogo),
            //     'width' => 672,
            //     'height' => 672,
            //     'alt' => "Logo " . web()->title,
            // ],
        ]);
    }
}
