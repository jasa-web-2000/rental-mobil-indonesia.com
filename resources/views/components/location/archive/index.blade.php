@php
    $randomLocation = [...province(), ...regency()->shuffle()->take(40), ...regency()->shuffle()->take(40)];
    $location = collect($randomLocation)->shuffle()->take(12);
@endphp

<div class="my-container text-center">
    <x-sub-heading subTitle='Lokasi Rental Mobil/Bus Unggulan'
        description='Kami memiliki beberapa lokasi rental unggulan yang mungkin anda suka.' />

    <div
        class="grid grid-cols-1 min-[490px]:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-5 sm:gap-x-6 md:gap-x-7 lg:gap-x-8 gap-y-7 sm:gap-y-8 md:gap-y-9 lg:gap-y-10 {{-- md:[&>div]:nth-[2]:hidden lg:[&>div]:nth-[4]:hidden xl:[&>div:nth-child(2)]:!block xl:[&>div:nth-child(4)]:!block --}}">
        @foreach ($location as $item)
            @php
                $params = [
                    'location' => Str::slug(
                        Str::replace(['KOTA ', 'KABUPATEN '], '', Str::replace('-', ' ', $item->name)),
                    ),
                ];
            @endphp
            <x-location.archive.location-grid title="Rental Mobil {{ Str::title($item->name) }}"
                url="{{ route('location.show', $params) }}" thumbnail="{{ route('location.show.thumbnail', $params) }}" />
        @endforeach
        
    </div>
</div>
