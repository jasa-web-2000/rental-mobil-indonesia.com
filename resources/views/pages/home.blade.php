@extends('app')

@section('content')
    @include('components.home.hero')

    {{-- <div class="-mt-16 xl:-mt-20 relative">
        <x-location.archive.search />
    </div> --}}

    <div class="my-space"></div>

    <x-home.car />

    <div class="my-space"></div>

    <x-location.archive.index />

    <div class="my-space"></div>

    <x-home.featured />

    <div class="my-space"></div>

    <x-gallery.index />

    <div class="my-space "></div>

    <x-home.cta />

    <x-home.faq />

    <div class="my-space"></div>

    <x-contact.index />
@endsection
