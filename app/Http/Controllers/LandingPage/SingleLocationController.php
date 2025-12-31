<?php

namespace App\Http\Controllers\LandingPage;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ThumbnailController;

class SingleLocationController extends Controller
{
    public function __invoke($location)
    {
        $newLocation = location($location);

        if (!$newLocation) {
            abort(404);
        }

        $name = Str::title(Str::replace('-', ' ', $location));

        if (request()->routeIs('location.show.thumbnail')) {
            $thumbnail = new ThumbnailController;
            return $thumbnail("Rental Mobil/Bus " . $name);
        }

        $recomendation = collect([
            ...province()->random(4),
            ...regency()->random(6),
            ...district()->random(4)
        ]);

        $thumbnailUrl = route('location.show.thumbnail', [
            'location' => $location,
        ]);

        $title = "Rental Mobil " . $name . "";


        return view('pages.location.single', [
            'page' => $title,
            'title' => "$title Whatsapp " . phoneNumber(),
            'description' => "$title hari ini dengan sistem plus driver, harga mulai " . rupiah($this->productSchema($title)['offers']['lowPrice']),
            'location' => $name,
            'recomendation' => $recomendation->shuffle()->take(11),
            'thumbnail' => [
                'url' => $thumbnailUrl,
                'width' => 1600,
                'height' => 900,
                'alt' => $location,
            ],
            'productSchema' => $this->productSchema($title),
        ]);
    }

    /**
     * @param string $title
     */
    public function productSchema($title)
    {
        $car = collect(car());
        return [
            'offers' => [
                'lowPrice' => $car->min([1]),
                'highPrice' => $car->max([1]),
            ],
            'reviewBody' => $title . ' dan sangat rekomendasi. Saya kemarin menggunakan jasa rental mobil dari ' . web()->title . ' dan sangat puas dengan pelayanannya.',
        ];
    }
}
