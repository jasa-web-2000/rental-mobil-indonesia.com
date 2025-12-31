@extends('app')

@section('content')
    <div class="[&>div]:pb-10">
        <x-background-hero>
            <h1>{{ $page }}</h1>
        </x-background-hero>
        <div class="-mt-16 xl:-mt-20 relative">
            <x-location.archive.search />
        </div>
    </div>

    <div class="my-space"></div>

    <x-location.archive.index />
@endsection
