@php
    $featured = [
        [
            'icon' =>
                'M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 0 1 3 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 0 0-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 0 1-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 0 0 3 15h-.75M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm3 0h.008v.008H18V10.5Zm-12 0h.008v.008H6V10.5Z',
            'subSubTitle' => 'Harga Rental Kompetitif',
            'description' =>
                'Nikmati layanan rental mobil dengan harga kompetitif di seluruh Indonesia. Transparan, tanpa biaya tersembunyi, dan tetap mengutamakan kenyamanan serta keamanan.',
        ],
        [
            'icon' =>
                'm2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25',
            'subSubTitle' => 'Tersedia di Seluruh Indonesia',
            'description' =>
                'Layanan rental mobil tersedia di berbagai kota besar dan daerah di Indonesia. Cocok untuk perjalanan bisnis, wisata, maupun kebutuhan harian.',
        ],
        [
            'icon' => 'M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z',
            'subSubTitle' => 'Fleksibel 24 Jam',
            'description' =>
                'Rental mobil tersedia 24 jam dengan waktu sewa fleksibel. Pilih durasi harian, mingguan, atau bulanan sesuai kebutuhan Anda.',
        ],
        [
            'icon' =>
                'M2.25 13.5h3.86a2.25 2.25 0 0 1 2.012 1.244l.256.512a2.25 2.25 0 0 0 2.013 1.244h3.218a2.25 2.25 0 0 0 2.013-1.244l.256-.512a2.25 2.25 0 0 1 2.013-1.244h3.859m-19.5.338V18a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18v-4.162c0-.224-.034-.447-.1-.661L19.24 5.338a2.25 2.25 0 0 0-2.15-1.588H6.911a2.25 2.25 0 0 0-2.15 1.588L2.35 13.177a2.25 2.25 0 0 0-.1.661Z',
            'subSubTitle' => 'Mobil Nyaman & Ber-AC',
            'description' =>
                'Armada mobil kami selalu dalam kondisi prima, bersih, dan ber-AC. Memberikan kenyamanan maksimal untuk perjalanan dekat maupun jauh.',
        ],
        [
            'icon' =>
                'M15.75 5.25a3 3 0 0 1 3 3m3 0a6 6 0 0 1-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1 1 21.75 8.25Z',
            'subSubTitle' => 'Pilihan Lepas Kunci & Dengan Sopir',
            'description' =>
                'Tersedia opsi rental mobil lepas kunci atau dengan sopir profesional. Sesuaikan layanan dengan kebutuhan dan kenyamanan Anda.',
        ],
        [
            'icon' =>
                'M16.5 6v.75m0 3v.75m0 3v.75m0 3V18m-9-5.25h5.25M7.5 15h3M3.375 5.25c-.621 0-1.125.504-1.125 1.125v3.026a2.999 2.999 0 0 1 0 5.198v3.026c0 .621.504 1.125 1.125 1.125h17.25c.621 0 1.125-.504 1.125-1.125v-3.026a2.999 2.999 0 0 1 0-5.198V6.375c0-.621-.504-1.125-1.125-1.125H3.375Z',
            'subSubTitle' => 'Pemesanan Online Mudah',
            'description' =>
                'Proses booking cepat dan praktis secara online melalui WhatsApp. Tanpa ribet, konfirmasi cepat, dan siap digunakan kapan saja.',
        ],
    ];

@endphp
<div class="relative">
    <div class="hero-gradient"></div>
    <div class="relative my-container text-center py-20">
        <x-sub-heading type="light" subTitle='Keunggulan Kami sebagai Penyedia Rental'
            description='Rental terbaik No. 1 dengan beberapa keunggulan seperti.' />

        <div
            class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-5 sm:gap-x-6 lg:gap-x-8 gap-y-7 sm:gap-y-8 lg:gap-y-10">
            @foreach ($featured as $item)
                <div class="!bg-white rounded-lg shadow-lg p-5 md:p-8 text-left group">
                    <div
                        class="grid place-items-center text-text-title-white group-hover:bg-primary simple-gradient h-12 w-12 rounded-md md:rounded-lg shadow shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6 stroke-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="{{ $item['icon'] }}" />
                        </svg>

                    </div>
                    <h3 class="mt-5 mb-2">{{ $item['subSubTitle'] }}</h3>
                    <p class="opacity-95">{{ $item['description'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</div>
