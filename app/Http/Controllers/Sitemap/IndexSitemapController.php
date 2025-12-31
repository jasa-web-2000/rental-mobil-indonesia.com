<?php

namespace App\Http\Controllers\Sitemap;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexSitemapController extends Controller
{
    public function __invoke()
    {
        $allLocation = collect([...province(), ...regency(), ...district()]);
        $locationCount = (int) ceil($allLocation->count() / 1000);

        $locationSitemap = [];
        for ($page = 1; $page <= $locationCount; $page++) {
            $locationSitemap[$page] = route('sitemap.archive', ['page' => $page]);
        }

        $result = [route('sitemap.index'), route('sitemap.page'), ...$locationSitemap];

        return xml($result);
    }
}
