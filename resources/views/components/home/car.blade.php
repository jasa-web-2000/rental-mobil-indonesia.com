<div class="my-container">

    <x-sub-heading subTitle='Daftar Mobil dan Bus yang Dirental'
        description='Kami memiliki banyak pilihan mobil dan bus untul anda rental.' />
    <div class="text-center bg-background-primary p-5 shadow rounded-md">
        <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-5">
            @foreach (car() as $item)
                <div class="shadow-lg p-5 rounded-lg bg-primary relative scroll-mt-10" id="{{ Str::slug($item[0]) }}">
                    <img class="w-full h-auto aspect-video brightness-90 hover:brightness-100 duration-200 object-cover rounded-lg bg-white"
                        loading="lazy" src="{{ $thumbnail ?? asset('images/car/' . Str::slug($item[0])) }}.jpg"
                        alt="{{ $item[0] }}" title="{{ $item[0] }}">
                    <span
                        class="absolute top-5 left-5 bg-slate-700 text-slate-300 font-semibold p-1 px-2 text-xs rounded-br-lg rounded-tl-lg">
                        {{ rupiah($item[1]) }} / 12 jam
                    </span>
                    <div class="text-left">
                        <h3 class="text-text-title-white! light my-4 text-[17px] line-clamp-2">
                            {{ Str::title($item[0]) }}
                        </h3>

                        <p class="text-sm text-text-description-white! mb-3">Rental {{ Str::title($item[0]) }}, harga
                            include:</p>
                        <ul class="">
                            @php
                                $featured = [
                                    [
                                        'icon' =>
                                            'M16.5 6v.75m0 3v.75m0 3v.75m0 3V18m-9-5.25h5.25M7.5 15h3M3.375 5.25c-.621 0-1.125.504-1.125 1.125v3.026a2.999 2.999 0 0 1 0 5.198v3.026c0 .621.504 1.125 1.125 1.125h17.25c.621 0 1.125-.504 1.125-1.125v-3.026a2.999 2.999 0 0 1 0-5.198V6.375c0-.621-.504-1.125-1.125-1.125H3.375Z',
                                        'detail' => 'Free bbm',
                                    ],
                                    [
                                        'icon' =>
                                            'M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z',
                                        'detail' => 'Plus driver',
                                    ],
                                    [
                                        'icon' =>
                                            'M6 6.878V6a2.25 2.25 0 0 1 2.25-2.25h7.5A2.25 2.25 0 0 1 18 6v.878m-12 0c.235-.083.487-.128.75-.128h10.5c.263 0 .515.045.75.128m-12 0A2.25 2.25 0 0 0 4.5 9v.878m13.5-3A2.25 2.25 0 0 1 19.5 9v.878m0 0a2.246 2.246 0 0 0-.75-.128H5.25c-.263 0-.515.045-.75.128m15 0A2.25 2.25 0 0 1 21 12v6a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 18v-6c0-.98.626-1.813 1.5-2.122',
                                        'detail' => 'Mobil ber-ac',
                                    ],
                                    [
                                        'icon' =>
                                            'M12 18.75a6 6 0 0 0 6-6v-1.5m-6 7.5a6 6 0 0 1-6-6v-1.5m6 7.5v3.75m-3.75 0h7.5M12 15.75a3 3 0 0 1-3-3V4.5a3 3 0 1 1 6 0v8.25a3 3 0 0 1-3 3Z',
                                        'detail' => 'Audio Karaoke',
                                    ],
                                ];
                            @endphp
                            @foreach ($featured as $f)
                                <li class="flex space-x-2 items-center mb-1.5 line-clamp-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-3.5 text-text-title-white">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="{{ $f['icon'] }}" />
                                    </svg>

                                    <p class="text-sm text-text-description-white">{{ $f['detail'] }}</p>
                                </li>
                            @endforeach
                        </ul>

                        <div class="w-full mt-4">
                            <a href='{{ whatsapp(null, "Halo admin.\nSaya ingin tanya tentang rental " . Str::title($item[0]) . "\n\n" . url()->full()) }}'
                                title="Jadwalkan {{ Str::title($item[0]) }}"
                                class="btn-secondary bg-background-secondary text-text-description-black hover:text-text-description-white w-full"
                                target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 0 1-2.555-.337A5.972 5.972 0 0 1 5.41 20.97a5.969 5.969 0 0 1-.474-.065 4.48 4.48 0 0 0 .978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25Z" />
                                </svg>
                                Jadwalkan rental
                            </a>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </div>

</div>
