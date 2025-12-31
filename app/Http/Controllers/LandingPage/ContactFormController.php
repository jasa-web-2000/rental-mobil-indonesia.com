<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;

class ContactFormController extends Controller
{
    public function __invoke(ContactFormRequest $request)
    {

        $validated = $request->validated();

        $province = province()->where('id', $request->province)->first();
        $regency = regency()->where('id', $request->regency)->first();
        $district = district()->where('id', $request->district)->first();

        if ($validated) {
            $message = "
Halo admin " . web()->title . ", saya ingin memesan rental mobil!

*Nama*: " . $validated['name'] . "
*Asal*: " . ($district?->name ? $district?->name . ", " : "") . ($regency?->name ? $regency?->name . ", " : "") . "PROVINSI {$province?->name} 
*Driver*: {$validated['driver']}
*Durasi*: {$validated['day']} hari

{$request->url()}";

            return redirect()->to(whatsapp(null, $message));
        }

        return redirect()->back()->withErrors($request->errors());
    }
}
