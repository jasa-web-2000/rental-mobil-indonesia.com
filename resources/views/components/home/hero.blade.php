{{-- <x-background-hero> --}}

<div class="relative [&_p]:text-lg" id="hero">
    <div class="hero-gradient" style="background-image: url({{ asset('/images/general/background-hero.webp') }});">
    </div>
    <div
        class="my-container max-w-[500px] md:max-w-7xl py-mine xl:py-36 text-center md:text-left relative z-10 gap-5 md:gap-10 grid md:grid-cols-2 items-center">
        <div class="">
            <h1 class="mb-5 leading-11 md:leading-[70px]">Rental Mobil<br>
                <span class="relative !z-1 whitespace-nowrap">
                    <svg aria-hidden="true" viewBox="0 0 418 42"
                        class="fill-primary absolute -bottom-2 left-0 w-full -z-1">
                        <path
                            d="M203.371.916c-26.013-2.078-76.686 1.963-124.73 9.946L67.3 12.749C35.421 18.062 18.2 21.766 6.004 25.934 1.244 27.561.828 27.778.874 28.61c.07 1.214.828 1.121 9.595-1.176 9.072-2.377 17.15-3.92 39.246-7.496C123.565 7.986 157.869 4.492 195.942 5.046c7.461.108 19.25 1.696 19.17 2.582-.107 1.183-7.874 4.31-25.75 10.366-21.992 7.45-35.43 12.534-36.701 13.884-2.173 2.308-.202 4.407 4.442 4.734 2.654.187 3.263.157 15.593-.78 35.401-2.686 57.944-3.488 88.365-3.143 46.327.526 75.721 2.23 130.788 7.584 19.787 1.924 20.814 1.98 24.557 1.332l.066-.011c1.201-.203 1.53-1.825.399-2.335-2.911-1.31-4.893-1.604-22.048-3.261-57.509-5.556-87.871-7.36-132.059-7.842-23.239-.254-33.617-.116-50.627.674-11.629.54-42.371 2.494-46.696 2.967-2.359.259 8.133-3.625 26.504-9.81 23.239-7.825 27.934-10.149 28.304-14.005.417-4.348-3.529-6-16.878-7.066Z">
                        </path>
                    </svg>
                    Indonesia
                </span>
            </h1>
            <p class="text-text-description-white">Rental mobil murah se-Indonesia dengan unit lengkap, layanan plus
                sopir, dan include bbm. Jadwalkan rental bersama {{ web()->cv }}.</p>
            <div class="mt-7 flex gap-5 items-center justify-center md:justify-start [&>*]:w-auto">
                <a href="{{ whatsapp() }}" target="_blank" rel="nofollow noindex" title="whatsapp"
                    class="btn-secondary !bg-background-secondary text-text-description-black hover:text-text-description-white">
                    {{ phoneNumber() }}
                </a>
                <a href="{{ route('location.archive') }}#cari-rute" rel="nofollow noindex" title="whatsapp"
                    class="btn-secondary">

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="mr-3">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                    </svg>
                    Cari...
                </a>
            </div>
        </div>
        <div class="relative max-w-md w-full mx-auto md:ml-auto mt-14 md:mt-0 [&_p]:line-clamp-1! **:text-left!">
            <div class="relative w-full [&_img]:rounded-lg [&_img]:shadow-lg">
                <img src="{{ asset('images/general/hero.jpg') }}" alt="{{ web()->title }}"
                    class="absolute w-9/12 h-[130%] top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2">
                <div class="w-full h-[250px] bg-[#2b2b51] rounded-lg shadow-lg"></div>
            </div>
            <div class="absolute top-4 right-4 bg-white/85 p-4 rounded-lg shadow-lg flex items-center space-x-3">
                <img src="{{ asset('images/general/man.png') }}" alt="User" class="w-10 h-10 rounded-full">
                <div>
                    <p class="text-sm! font-semibold text-gray-800">Darius Gea</p>
                    <p class="text-xs! ">“Mobil nyaman dan bersih.”</p>
                </div>
            </div>
            <div class="absolute bottom-4 left-4 bg-white/85 p-4 rounded-lg shadow-lg flex items-center space-x-3"><img
                    src="{{ asset('images/general/woman.png') }}" alt="User" class="w-10 h-10 rounded-full">
                <div>
                    <p class="text-sm! font-semibold text-gray-800">Tantri</p>
                    <p class="text-xs! ">“Harga lumayan terjangkau.”</p>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- </x-background-hero> --}}
