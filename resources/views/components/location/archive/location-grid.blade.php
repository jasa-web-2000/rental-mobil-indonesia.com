@php
    $featured = [
        [
            'icon' => 'M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z',
            'detail' => 'Jadwal fleksibel',
        ],
        [
            'icon' =>
                'M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z',
            'detail' => 'Plus driver',
        ],
        [
            'icon' =>
                'M8.25 18.75a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 0 1-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 0 0-3.213-9.193 2.056 2.056 0 0 0-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 0 0-10.026 0 1.106 1.106 0 0 0-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12',
            'detail' => 'Banyak pilihan mobil/bus',
        ],
    ];

@endphp
<div class="bg-white p-5 rounded-lg shadow-lg border-b-8 border-b-primary !text-left">
    <div class="relative">
        <img class="w-full rounded-md aspect-video bg-primary/25 brightness-100 hover:brightness-90" loading="lazy"
            src="{{ $thumbnail }}" alt="{{ $title }}" title="{{ $title }}" width="800" height="450" />
        <span
            class="absolute top-0 left-0 bg-primary text-slate-300 font-semibold p-1 px-2 text-xs rounded-br-lg rounded-tl-lg">
            Unggulan
        </span>
    </div>
    <h3 class="my-4 text-[17px] line-clamp-2" title="{{ $title }}">
        {{ $title }}
    </h3>
    <div class="!text-sm ">

        <div class="">
            @foreach ($featured as $item)
                <div class="flex space-x-2 items-center mb-1.5 line-clamp-1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-3.5 text-primary">
                        <path stroke-linecap="round" stroke-linejoin="round" d="{{ $item['icon'] }}" />
                    </svg>

                    <p class="text-sm">{{ $item['detail'] }}</p>
                </div>
            @endforeach
        </div>

        <p class="mt-4 mb-2 line-clamp-3">
            Pesan {{ $title }} anda sekarang juga bersama kami.
        </p>
        <a class="underline opacity-75" href="{{ $url }}" title="{{ $title }}">
            Baca selengkapnya...
        </a>
        <div class="w-full mt-4">
            <a href='{{ whatsapp(null, "Halo admin.\nSaya ingin tanya tentang " . $title . "\n\n" . $url) }}'
                title="{{ $title }}" class="btn-primary w-full" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 0 1-2.555-.337A5.972 5.972 0 0 1 5.41 20.97a5.969 5.969 0 0 1-.474-.065 4.48 4.48 0 0 0 .978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25Z" />
                </svg>
                Jadwalkan rental
            </a>
        </div>
    </div>
</div>
