<?php

namespace App\Http\Controllers\LandingPage;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProvinceController;

class ArchiveLocationController extends Controller
{
    public function __invoke()
    {
        return view('pages.location.archive', [
            'page' => 'Arsip Lokasi ' . web()->title,
            'title' => 'Arsip Lokasi ' . web()->title,
            'description' => 'Tersedia lengkap ' . Str::lower(web()->tagline),
        ]);
    }
}
