@extends('app')

@section('content')
    <article>

        <x-background-hero>
            <h1 class="leading-tight">{{ $title }} Untuk Hari Ini</h1>
        </x-background-hero>

        <div class="my-7"></div>

        @include('components.location.single.index')
    </article>
@endsection
