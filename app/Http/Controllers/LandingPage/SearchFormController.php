<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Requests\SearchFormRequest;

class SearchFormController extends Controller
{
    public function __invoke(SearchFormRequest $request)
    {
        $validated = $request->validated();

        $location = $validated['district'] ?? $validated['regency'] ?? $validated['province'];

        $province = province()->where('id', $location)->first();
        $regency = regency()->where('id', $location)->first();
        $district = district()->where('id', $location)->first();


        $finalLocation = $district ?? $regency ?? $province;
        $params = [
            'location' => Str::slug(Str::replace(['KOTA ', 'KABUPATEN ', 'kota-', 'kabupaten-'], '', $finalLocation->name)),
        ];

        return redirect()->to(route('location.show', $params));
    }
}
