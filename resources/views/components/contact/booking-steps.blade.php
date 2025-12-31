@php
    $steps = [
        [
            'title' => 'Isi Formulir Pemesanan',
            'detail' => 'Masukkan data pemesan dan detail pesanan dalam <a href="#formulir">formulir!</a>',
        ],
        [
            'title' => 'Konfirmasi & Pembayaran DP',
            'detail' => 'Lakukan pembayaran dp dan konfirmasi kepada admin!',
        ],
        [
            'title' => 'Penjemputan & Perjalanan',
            'detail' => 'Mobil siap di lokasi atau anda ambil sendiri ke garasi kami!',
        ],
    ];

@endphp

<div class="grid col-span-full gap-6! sm:grid-cols-2 md:grid-cols-3">
    @foreach ($steps as $item)
        <div
            class="{{ $loop->index == 2 ? 'sm:col-span-full! md:col-span-1!' : '' }} bg-white p-5 rounded-lg shadow-lg border-b-8 border-b-primary !text-left">
            <h4 class="simple-gradient text-3xl text-text-title-white size-12 grid place-items-center rounded-full">
                {{ $loop->iteration }}
            </h4>
            <h3 class="my-4 text-[17px] line-clamp-2" title="{{ $item['title'] }}">
                {{ $item['title'] }}
            </h3>
            <div class="!text-sm ">
                <p class="text-sm">{!! $item['detail'] !!}</p>
            </div>
        </div>
    @endforeach
</div>
