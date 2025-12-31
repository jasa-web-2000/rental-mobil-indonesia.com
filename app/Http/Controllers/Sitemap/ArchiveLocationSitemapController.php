<?php

namespace App\Http\Controllers\Sitemap;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArchiveLocationSitemapController extends Controller
{
    public function __invoke(int $page)
    {
        $allLocation = collect([...province(), ...regency(), ...district()]);

        $locationCount = (int) ceil($allLocation->count() / 1000);

        if ($page < 1 || $page > $locationCount) {
            abort(404);
        }

        $result = $allLocation->slice((1000 * ($page - 1)), 1000)->map(function ($item) {
            return route('location.show', [
                'location' => Str::slug(Str::replace(['KOTA ', 'KABUPATEN ', 'kota-', 'kabupaten-'], '', $item->name)),
            ]);
        });

        return xml($result);
    }
}