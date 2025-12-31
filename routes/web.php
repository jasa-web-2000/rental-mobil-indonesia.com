<?php

use App\Http\Controllers\LandingPage\ArchiveLocationController;
use App\Http\Controllers\LandingPage\ContactController;
use App\Http\Controllers\LandingPage\ContactFormController;
use App\Http\Controllers\LandingPage\GalleryController;
use App\Http\Controllers\LandingPage\HomeController;
use App\Http\Controllers\LandingPage\SearchFormController;
use App\Http\Controllers\LandingPage\SingleLocationController;
use App\Http\Controllers\Sitemap\ArchiveLocationSitemapController;
use App\Http\Controllers\Sitemap\IndexSitemapController;
use App\Http\Controllers\Sitemap\PageSitemapController;
use App\Http\Controllers\Sitemap\SingleLocationSitemapController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');

Route::prefix('lokasi')->group(function () {
    Route::get('/', ArchiveLocationController::class)->name('location.archive');
    Route::post('/', SearchFormController::class)->name('location.search.form');
});

Route::prefix('rental-mobil-{location}')->group(function () {
    Route::get('/', SingleLocationController::class)->name('location.show');
    Route::get('/thumbnail.jpg', SingleLocationController::class)->name('location.show.thumbnail');
});

Route::get('/galeri', GalleryController::class)->name('gallery');

Route::prefix('/kontak')->group(function () {
    Route::get('/', ContactController::class)->name('contact');
    Route::post('/', ContactFormController::class)->name('contact.form');
});

Route::get('/sitemap.xml', IndexSitemapController::class)->name('sitemap.index');
Route::get('/page-sitemap.xml', PageSitemapController::class)->name('sitemap.page');
Route::get('/lokasi/{page}/rental-sitemap.xml', ArchiveLocationSitemapController::class)
    ->whereNumber('page')
    ->name('sitemap.archive');
