@php

    $testimonial = [
        [developer()->name, $productSchema['reviewBody']],
        [
            'Budi Santoso',
            'Sangat memuaskan, bisa diajak negosiasi dengan baik untuk Mobilnya juga lumayan oke dan nyaman. Next time mungkin kami akan order kembali Terima kasih.',
        ],
        [
            'Siti Aminah',
            'Kami telah menyewa ' .
            $page .
            ' dua kali di sini untuk perjalanan dinas. Pelayanan Ramadan admin fast respon meskipun kami menghubungi admin pada malam hari overall kami sangat puas dan kami merekomendasikan rental ini bagi yang butuh sewa mobil di ' .
            $location .
            '.',
        ],
        [
            'Andi Pratama',
            'Sebetulnya saya mendadak cancel outdoor karena ada kesibukan yang lain, namun untungnya admin menyarankan untuk merubah jadwal saja. Dengan begitu DP yang telah saya bayar pun tidak hangus dan saya tetap bisa menggunakan rental mobil ini.',
        ],
        [
            'Ahmad Fauzi',
            'Mantap dah, mobilnya lumayan nyaman dan bersih, walaupun prosesnya agak sedikit ribet karena harus memberikan data-data pribadi tapi saya rasa ini udah lumayan bagus.',
        ],
        [
            'Agus',
            'Awalnya ragu tapi ini review jujur saya, karena di ' .
            $location .
            ' emang lumayan susah cari rental mobil amanah apalagi jika mencarinya hanya melalui sosial media saja. Adminnya lumayan gercep dan unit yang saya pilih tidak lecet sama sekali. Ini ini testimoni asli bukan bohongan 😁.',
        ],
        [
            'Nur Aisyah',
            'Kemarin tanggal ' .
            Carbon\Carbon::now('Asia/Jakarta')->subDays(3)->translatedFormat('d F Y') .
            ' saya memesan rental mobil Innova plus driver sopirnya sopan dan on time pelayanannya juga bagus banget.',
        ],
    ];

    $faq = [
        [
            'pertanyaan' => 'Berapa Harga ' . $page . '?',
            'jawaban' =>
                'Sebetulnya kami menawarkan beberapa jenis mobil dengan harga yang bervariasi. Tentunya harga menyesuaikan jenis mobil dan situasi. Untuk saat ini kami menawarkan harga mulai dari Rp450.000 hingga Rp3.500.000 per 12 jam. Harga tersebut dapat berubah suatu waktu maka dari itu Anda disarankan untuk menanyakannya langsung kepada admin.',
        ],
        [
            'pertanyaan' => 'Apa ini Rental Mobil Resmi?',
            'jawaban' =>
                'Ya, tentunya kami adalah penyedia jasa rental mobil resmi yang berasal dari kota Padang. Kami melayani mental tidak hanya di Padang saja melainkan di seluruh daerah di Indonesia dengan bekerja sama dengan berbagai penyedia jasa rental yang ada di seluruh Indonesia (tentunya juga resmi). Untuk legalitas kami bisa anda tanyakan langsung kepada admin kami detailnya. Untuk nama legalitas Kami adalah ' .
                web()->cv .
                '.',
        ],
        [
            'pertanyaan' => 'Tersedia Jenis Mobil Apa Saja?',
            'jawaban' =>
                'Kami memiliki beberapa jenis mobil dan bus yang lumayan lengkap. Berikut jenis-jenis mobilnya: ' .
                Str::title(car()->pluck(0)->implode(', ')) .
                '. Semua mobil tentunya sudah dilengkapi dengan fasilitas AC, karoke, dan tidak lupa juga mobil selalu di maintenance setiap waktu.',
        ],
        [
            'pertanyaan' => 'Kapan Saya Bisa Memesan ' . $page . '?',
            'jawaban' =>
                'Anda dapat memesan rental mobil kapan aja, karena kami memiliki banyak mobil dengan tipe yang sama.',
        ],
        [
            'pertanyaan' => 'Apakah Bisa Bayar di akhir?',
            'jawaban' => 'Tidak bisa, Anda harus membayarkan DP minimal 30% dari harga total.',
        ],
        [
            'pertanyaan' => 'Apakah Bisa Meminta Pengembalian Uang?',
            'jawaban' => 'Tidak bisa, jika anda sudah membayar DP dan ingin membatalkan rental maka DP anda hangus.',
        ],
        [
            'pertanyaan' => 'Apakah Bisa Melakukan Perubahan Jadwal?',
            'jawaban' =>
                'Tentu saja bisa, Akan tetapi anda akan dikenakan biaya tambahan sebesar 10% dari harga rental.',
        ],
        [
            'pertanyaan' => 'Apakah Biaya ' . $page . ' sudah Include Tol dan Bensin?',
            'jawaban' =>
                'Tentu saja, harga Sudah termasuk biaya tol dan bensin dalam daerah ' .
                $location .
                ' saja. Jika anda ingin pergi ke luar daerah ' .
                $location .
                ' atau luar kota maka tol dan Bensin akan Anda tanggung sendiri.',
        ],
        [
            'pertanyaan' => 'Bolehkah Memesan Lepas Kunci?',
            'jawaban' => 'Boleh saja, asalkan anda melengkapi data-data pemesanan.',
        ],
        [
            'pertanyaan' => 'Apakah Ada Diskon?',
            'jawaban' =>
                'Untuk diskon Anda bisa dapatkan informasi lebih lanjut pada sosial media kami atau Story WhatsApp admin.',
        ],
    ];

@endphp

<div class="my-container">
    <div class="grid grid-cols-1 md:grid-cols-12 gap-y-10 md:gap-x-10 lg:gap-x-20">
        <div class="md:col-span-8 ">
            <img onclick="window.open('{{ whatsapp() }}', '_blank')" src="{{ $thumbnail['url'] }}"
                class="cursor-pointer rounded-md shadow-md" title="{{ $page }}" alt="{{ $thumbnail['alt'] }}"
                width="{{ $thumbnail['width'] }}" height="{{ $thumbnail['height'] }}">
        </div>


        <div
            class="md:sticky md:top-[60px] h-fit md:col-span-4 p-3 sm:p-5 bg-background-primary rounded-md shadow-md border-b-8 border-primary [&_*]:!text-center">
            <p>Pesan <strong>{{ $page }} sekarang juga!</strong></p>

            <div>
                <a target="_blank" href="{{ whatsapp() }}" rel="nofollow noindex noopener noreferrer"
                    title="Jadwalkan rental" class="btn-primary mt-5 !text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 0 1-2.555-.337A5.972 5.972 0 0 1 5.41 20.97a5.969 5.969 0 0 1-.474-.065 4.48 4.48 0 0 0 .978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25Z" />
                    </svg>
                    Jadwalkan rental
                </a>
            </div>
        </div>

        <div class="md:col-span-8" id="detail">
            <p>Apakah anda sedang membutuhkan <a href="{{ url()->current() }}">{{ $page }}</a>? Baik itu plus
                driver atau pun lepas kunci? Kami kini menawarkan jasa rental mobil atau sewa mobil terbaik dengan harga
                yang murah dan tentunya mobil yang nyaman.
            </p>

            <p>
                Di daerah {{ $location }} terdapat banyak pilihan transportasi yang lumayan bagus salah satunya
                yaitu
                rental mobil.
                Jika anda sedang berada di {{ $location }} dan ingin mencari jasa rental mobil langsung saja
                hubungi kami via
                telepon atau whatsApp nomor <a target="_blank" rel="nofollow noindex noopener noreferrer"
                    href="">{{ phoneNumber() }}</a>.
            </p>

            <h2>Apa Itu {{ $page }}?</h2>

            <p>{{ $page }} adalah solusi transportasi terbaik bagi anda yang menginginkan layanan sewa mobil
                dengan banyak pilihan mobil seperti mobil Avanza, Innova, Fortuner, hingga bus/bis.
            </p>

            <p>Penyewaan mobil baik itu plus driver maupun lepas kunci di daerah {{ $location }} dan sekitar dapat
                dipesan kapanpun dengan durasi normal 12 jam titik dapatkan harga murah dan berkualitas di sekitar Anda
                dengan menghubungi admin.
            </p>

            <h2>Kelebihan Menggunakan Layanan {{ $page }}</h2>

            <p>
                Rental mobil kini menjadi kebutuhan penting bagi sebagian orang terutama ketika sedang ingin melakukan
                perjalanan bisnis ataupun liburan bersama keluarga. Dengan menggunakan layanan rental mobil, Anda bisa
                menikmati perjalanan dengan aman nyaman dan tanpa penumpang lain yang tidak Anda kenal Seperti taksi
                ataupun jasa travel.
            </p>

            <p>
                Alat transportasi tentunya memiliki ke namun untuk jasa Sewa mobil atau rental mobil memiliki keunggulan
                yang tentunya tidak akan anda dapatkan jika menggunakan layanan transportasi lain titik berikut
                kelebihan atau keunggulan menggunakan layanan rental mobil:
            </p>

            <h3>Harga Lebih Murah dan Hemat</h3>

            <p>
                Harga {{ $page }} tentunya lebih murah karena anda akan digunakan tarif per hari atau per 12
                jam berbeda
                dengan transportasi lain mungkin ada yang per kilometer. Dengan layanan rental mobil anda bisa pergi
                kemanapun saya jauh apapun yang penting sesuai dengan durasi pesanan.
            </p>

            <p>
                {{ web()->cv }} Kami menawarkan beberapa pilihan mobil dan bus tentunya dengan harga murah dan bisa
                negosiasi. Harga
                berkisar sekitar {{ rupiah($productSchema['offers']['lowPrice']) }} sampai
                {{ rupiah($productSchema['offers']['highPrice']) }} dalam waktu 12
                jam.
                Harga tersebut telah include beberapa
                fasilitas seperti biaya driver, bbm, dan tol.
            </p>

            <h3>Bisa Pilih Sistem Lepas Kunci & Plus Driver</h3>
            <p>


                Apabila anda menginginkan perjalan yang lebih privat, maka rental mobil lepas kunci adalah pilihan yang
                tepat. Dengan rental mobil tanpa driver anda akan melakukan perjalanan dengan menyetir sendiri dan rute
                sesuai yang diinginkan.
            </p>

            <p>

                Akan tetapi jika anda tidak ingin menyetir sendiri maka anda bisa memesan rental mobil plus driver.
                Dengan
                rental mobil plus driver perjalanan lebih aman karena driver yang kami miliki telah bersertifikat,
                profesional, terpercaya, dan berpengalaman lebih dari 5 tahun.
            </p>
            <p>
                Rental mobil plus driver maupun lepas kunci bisa anda pilih sesuai dengan kebutuhan anda. Silahkan
                sesuaikan kebutuhan dan konsultasikan kepada admin kami.
            </p>

            <h3>Banyak Pilihan Mobil dan Bus yang Dirental</h3>

            <p>
                Untuk saat ini kami memiliki banyak pilihan mobil dan bus yang bisa anda gunakan untuk kebutuhan rental.
                Semua mobil dan bus telah dilengkapi fasilitas AC, bersih, dan terawat.
            </p>

            <p>
                Berikut daftar mobil dan bus yang kami tawarkan untuk disewa:
            </p>

            <div class="grid sm:grid-cols-2 gap-5 mb-5">
                @foreach (car() as $item)
                    <div id="{{ Str::slug($item[0]) }}"
                        class="scroll-mt-5 relative bg-white shadow-lg rounded-lg border-b-4 border-primary overflow-hidden">
                        <span title="Harga {{ rupiah($item[1]) }} / 12 jam"
                            class="absolute top-0 left-0 bg-primary text-slate-300 font-semibold p-1 px-2 text-xs rounded-br-lg rounded-tl-lg">
                            {{ rupiah($item[1]) }} / 12 jam
                        </span>
                        <img class="border-b border-slate-300 aspect-video object-center w-full h-auto"
                            src="{{ asset('images/car/' . Str::slug($item[0])) }}.jpg"
                            alt="Rental {{ Str::title($item[0]) }} {{ $location }}"
                            title="Rental {{ Str::title($item[0]) }} {{ $location }}">

                        <div class="p-4 pb-1!">

                            <h4 class="text-base font-semibold line-clamp-2! mb-3">Rental {{ Str::title($item[0]) }}
                                {{ $location }}</h4>

                            <p class="text-[15px] line-clamp-4!">Info sewa atau rental {{ Str::title($item[0]) }}
                                {{ $location }} dengan harga {{ rupiah($item[1]) }} / 12 jam.</p>
                        </div>
                        @php
                            $messageLocation =
                                'Halo admin ' .
                                web()->cv .
                                ', saya ingin pesan rental mobil ' .
                                Str::title($item[0]) .
                                "\n\n" .
                                url()->current();
                        @endphp
                        <a class="absolute inset-0" href="{{ whatsapp(null, $messageLocation) }}"
                            rel="nofollow noindex noopener noreferrer" target="_blank"></a>

                    </div>
                @endforeach
            </div>

            <h3>Durasi {{ $page }} yang Fleksibel</h3>

            <p>Tentunya jadwal rental memiliki durasi yang berbeda-beda mulai dari per jam per 12 jam per hari per
                minggu bahkan per bulan. Namun pada umumnya kami memberikan durasi per 12 jam. Akan tetapi apabila anda
                ingin memesan dengan menyesuaikan durasi maka anda bisa konsultasi kepada admin kami.</p>

            <h3>Penyedia rental amanah dan resmi</h3>

            <p>Banyak sekali penyedia layanan rental mobil yang tidak amanah atau bahkan hanya memiliki satu mobil
                pribadi. Namun kami dari {{ web()->cv }} memiliki banyak pilihan mobil dan bus atas nama
                perusahaan. {{ web()->cv }} merupakan
                penyedia layanan <a href="{{ route('home') }}">rental mobil</a> terbaik terpercaya, resmi di Indonesia
                (seluruh Indonesia).</p>

            <p>Untuk garasi utama kami ada di kota Padang, Namun kami telah bekerja sama dengan beberapa partner untuk
                mengelola rental mobil di seluruh Kecamatan, kabupaten, Kota, Provinsi yang ada di Indonesia.</p>

            <h2>Layanan Transportasi lain yang Kami Tawarkan</h2>

            <p>Tak hanya <strong>Sewa Mobil {{ $location }}</strong> saja, kami memiliki beberapa layanan
                transportasi lain untuk menunjang perjalanan
                Anda. Berikut beberapa layanan transportasi yang bisa anda pilih:</p>

            <h3>Carter Drop</h3>

            <p>Sebetulnya karakter drop ini sama halnya dengan rental mobil namun jika menggunakan Carter drop maka anda
                hanya Diantar sampai tujuan saja. Bedanya dengan travel, makanan yang satu ini tidak memuat penumpang
                lain ( private seperti rental mobil)</p>

            <h3>Carter Pulang Pergi</h3>

            <p>Sedangkan Carter anda akan diantar ke tujuan dan diantar pulang juga ke alamat asal anda. Tentunya
                harganya akan sedikit lebih mahal dibanding rental mobil biasa dan Carter drop.</p>

            <h3>Travel Reguler Door to Door</h3>

            <p>Sedangkan travel reguler adalah transportasi antar jemput dari rumah langsung namun mobil memuat
                penumpang lain juga. Kelebihan travel reguler adalah harganya paling murah dibanding transportasi lain.
            </p>


            <h2>Rental Mobil Daerah Lain</h2>

            <p>{{ $page }} sebenarnya bisa untuk luar kota namun anda akan menanggung biaya BBM dan tol
                sendiri. Jika anda ingin bepergian ke luar kota maka disarankan Anda memesan rental mobil yang di kota
                tersebut. Berikut rekomendasi daerah yang menyediakan rental mobil atau bus:</p>

            <div class="grid sm:grid-cols-2 gap-5 mb-5">
                @foreach ($recomendation as $item)
                    <div class="relative bg-white shadow-lg rounded-lg border-b-4 border-primary overflow-hidden">
                        @php
                            $params = [
                                'location' => Str::slug(
                                    Str::replace(['KOTA ', 'KABUPATEN '], '', Str::replace('-', ' ', $item->name)),
                                ),
                            ];
                        @endphp
                        <img class="border-b border-slate-300 aspect-video object-center w-full h-auto"
                            src="{{ route('location.show.thumbnail', $params) }}"
                            alt="Rental Mobil {{ $item->name }}" title="Rental Mobil {{ Str::title($item->name) }}">

                        <div class="p-4 pb-1!">

                            <p class="text-base font-semibold line-clamp-2! mb-3">Rental Mobil
                                {{ Str::title($item->name) }}</p>

                            <p class="text-[15px] text-left! line-clamp-4!">Rekomendasi rental mobil/bus
                                {{ Str::title($item->name) }} terbaik No. 1
                            </p>
                        </div>

                        @php
                            $messageLocation =
                                'Halo admin ' .
                                web()->cv .
                                ', saya ingin pesan rental mobil ' .
                                Str::title($item->name) .
                                "\n\n" .
                                route('location.show.thumbnail', $params);
                        @endphp
                        <a class="absolute inset-0" href="{{ whatsapp(null, $messageLocation) }}"
                            rel="nofollow noindex noopener noreferrer" target="_blank"></a>
                    </div>
                @endforeach
            </div>


            <h2>Cara Pesan {{ $page }}</h2>
            <p>Jika anda sedang sibuk maka anda tidak perlu repot untuk memesan rental mobil, cukup dengan menghubungi
                admin kami via WhatsApp atau telepon pada nomor <strong>{{ phoneNumber() }}</strong>. Atau untuk cara
                lain yang lebih
                simpel Anda tinggal mengisi formulir reservasi yang ada di bawah ini:</p>

            <x-contact.booking />

            <p class="mt-5">Untuk pemesanan via WhatsApp sangat mudah anda tinggal menghubungi admin lalu
                menginformasikan detail
                pesanan seperti jadwal, durasi, data pribadi anda. Berikut alurnya:</p>
            <ul>
                <li>
                    Pilih mobil atau bus yang akan anda sewa atau rental
                </li>
                <li>
                    Tentukan durasi (durasi rental normalnya per 12 jam)
                </li>
                <li>
                    Tentukan sistem rental menggunakan driver atau tanpa driver (lepas kunci)
                </li>
                <li>
                    Tentukan tanggal mulai rental
                </li>
                <li>
                    Tunggu konfirmasi dari admin kami
                </li>
                <li>
                    Silakan memberikan jaminan berupa KTP atau SIM dan bayar kan DP
                </li>
                <li>
                    Anda tinggal menunggu jadwal rental Anda dimulai
                </li>
            </ul>



            <h2>Syarat dan Ketentuan Rental Mobil</h2>

            <p>

                Untuk menjamin keamanan, kenyamanan, dan keselamatan kedua belah pihak (penyedia jasa rental san
                pemesanan jasa rental) maka ada beberapa syarat dan ketentuan yang wajib dimiliki oleh pemesan. Berikut
                syarat dan ketentuan {{ $page }}:
            </p>

            <ul>
                <li>
                    Jika pemesanan individu maka diwajibkan untuk melampirkan KTP atau SIM, jika pemesan adalah
                    perusahaan maka diwajibkan untuk melampirkan nib, NPWP perusahaan, dan KTP direktur.
                </li>
                <li>
                    Khusus untuk umur di atas 25 tahun
                </li>
                <li>
                    Tidak berlaku untuk warga negara asing
                </li>
                <li>
                    Memesan H-1 (1 hari) sebelum rental dimulai
                </li>
                <li>
                    Untuk pengembalian mobil diberikan toleransi waktu 1 jam. Lebih dari satu jam maka dikenakan denda
                    sebanyak 10% dari harga total per jam (Contoh memesan mobil 12 jam dengan harga 600, namun Anda
                    telat 1 ham, maka anda dikenakan denda Rp600.000)
                </li>
                <li>
                    Wajib membayar DP 30% dari harga total (Contohnya pesan 12 jam dengan harga Rp600.000, maka anda
                    membayar DP Rp180.000)
                </li>
                <li>
                    Pembatalan tidak akan menerima pengembalian DP
                </li>
                <li>
                    Perubahan jadwal dikenakan biaya tambahan 10% (Contohnya pesan 12 jam dengan harga Rp600.000, maka
                    anda membayar tambahan Rp600.000)
                </li>
                <li>
                    Biaya sewa mobil plus driver sudah include biaya bensin dan tol, tidak diperkenankan membayar biaya
                    tambahan apapun kepada driver
                </li>
                <li>
                    Apabila ada kerusakan pada mobil maka anda akan dikenakan denda sesuai dengan tingkat kerusakan
                    mobil
                </li>
            </ul>

            <h2>Ulasan Para Pelanggan</h2>

            <p>
                Kami telah meminta Beberapa pelanggan untuk memberikan ulasan atau testimoni setelah menggunakan rental
                mobil kami. Berikut ulasan mereka:
            </p>
            <ul class="list-none! ml-0!">
                @foreach ($testimonial as $item)
                    <li class="bg-background-primary rounded-md shadow-md p-5 mb-7 ">
                        <blockquote class="border-l-4 border-primary">
                            <p class="italic ml-5">"{{ $item[1] }}"</p>
                        </blockquote>
                        <p class="!mb-0">Dari: <span class="font-semibold">{{ $item[0] }}</span></p>
                        <span>
                            Rating: 5 / 5<span title="rating 5 / 5" class="rating text-xl"
                                style="background: linear-gradient(to right, var(--primary) 0%, var(--primary) 100%, rgba(163,163,163.10) 100%, rgba(163,163,163.10) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            display: inline-block;">
                                <span>★</span>
                                <span>★</span>
                                <span>★</span>
                                <span>★</span>
                                <span>★</span>
                            </span>
                        </span>
                    </li>
                @endforeach
            </ul>

            <h2>Tanya Jawab/FaQ seputar {{ $page }}</h2>

            <p>Untuk memudahkan pelanggan dalam mencari informasi seputar {{ $page }}, maka kami telah
                mengumpulkan beberapa pertanyaan yang sering ditanyakan oleh calon pelanggan kami. Berikut pertanyaan
                dan jawabannya:</p>

            <ul
                class="ml-0 pl-0 list-none grid md:gap-x-14 lg:gap-x-20 [&>li>div]:gap-x-3 [&>li>div]:flex [&>li>div]:items-start [&>li>div]:mb-5 [&_.icon-faq]:flex [&_.icon-faq]:items-center [&_.icon-faq]:justify-center [&_.icon-faq]:p-3 [&_.icon-faq]:rounded-full [&_.icon-faq]:simple-gradient [&_.icon-faq]:shadow-md [&_.icon-faq]:text-text-description-white [&_svg]:size-6">
                @foreach ($faq as $item)
                    <li class="text-left mb-10">
                        <div>
                            <div class="icon-faq">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" />
                                </svg>

                            </div>
                            <div class="bg-background-primary rounded-md py-5 pr-7 w-full flex items-center">
                                <h3 class="pl-0! before:hidden! after:hidden! m-0!">{{ $item['pertanyaan'] }}</h3>
                            </div>
                        </div>

                        <div>
                            <div class="bg-primary/5 border-b-8 border-primary rounded-md py-5 px-7 w-full">
                                <p class="text-text-description-black mb-0! text-justify">{{ $item['jawaban'] }}</p>
                            </div>
                            <div class="icon-faq">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z" />
                                </svg>

                            </div>
                        </div>

                    </li>
                @endforeach
            </ul>

            @php
                $faqSchema = collect([
                    '@context' => 'https://schema.org',
                    '@type' => 'FAQPage',
                    'mainEntity' => collect($faq)->map(function ($item) {
                        return [
                            '@type' => 'Question',
                            'name' => $item['pertanyaan'],
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => $item['jawaban'],
                            ],
                        ];
                    }),
                ]);
            @endphp

            <script type="application/ld+json">{!! json_encode($faqSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}</script>

            <h2>Penutup</h2>
            <p>Jadi kesimpulan dari artikel di atas adalah {{ web()->cv }} merupakan penyedia {{ $page }}
                resmi untuk
                daerah seluruh
                Indonesia titik Kami menawarkan <a href="{{ route('location.archive') }}">rental mobil</a> khususnya di
                daerah {{ $location }} dengan banyak
                pilihan mobil
                dan harga yang bervariasi. Sistem pemesanan bisa menggunakan driver ataupun tanpa driver (lepas kunci).
            </p>

            <p>Jadi tunggu apa lagi? Ayo jadwalkan <strong>{{ $page }}</strong> anda sekarang juga dan nikmati
                perjalanan Anda.
            </p>


        </div>
    </div>
</div>
