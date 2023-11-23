@section('title', 'MARKAS | ABOUT')
<div class="font-lexendDeca w-full overflow-hidden">
    {{-- Hero --}}
    <div class="relative z-10 flex flex-col w-screen min-h-screen items-center justify-center">
        <image src="{{ asset('images/about/bg-hero-about.png') }}" class="absolute inset-0 z-0 w-screen" />
        <h1 class="text-4xl font-light relative z-10 text-white">Ini cerita tentang <span
                class="text-redMarkas font-bold font-lexendPeta">MARKAS</span> kita...</h1>
    </div>

    {{-- Markas Tagline --}}
    <div class="flex flex-col w-screen min-h-screen items-center justify-center gap-y-16">
        <h2 class="text-redMarkas font-semibold text-[128px] leading-none font-lexendPeta">MARKAS</h2>
        <p class="text-4xl font-light">A hub for startup founders to grow with the ecosystem.</p>
    </div>

    {{-- Filosofi --}}
    <div class="flex flex-col justify-center items-center w-10/12 mx-auto pt-20" id="philosophy">
        <div class="flex flex-col items-center justify-center w-11/12 text-center">
            <h2 class="text-redMarkas text-[28px] leading-none uppercase font-semibold font-lexendPeta">Filosofi</h2>
            <h3 class="text-5xl font-extrabold mt-5">Inklusif Dan Kolaboratif</h3>
            <p class="text-xl font-light mt-9 leading-relaxed">Sejak diinisiasi di tahun 2016, semangat
                #1000StartupDigital adalah untuk berkolaborasi
                membuat ekosistem startup Indonesia menjadi
                inklusif dan kolaboratif.
            </p>
        </div>
        <div class="mt-20 flex flex-col gap-y-9">
            {{-- Filosofi 1 --}}
            <div class="flex flex-row items-center justify-center gap-20">
                <div class="w-1/2">
                    <image src="{{ asset('images/about/filosofi-1.png') }}" class="" />
                </div>
                <div class="flex flex-col items-start w-1/2">
                    <h5 class="text-redMarkas text-xl font-light">Gain Knowledge</h5>
                    <h4 class="text-[28px] leading-none font-semibold mt-3">Ruang Belajar</h4>
                    <p class="text-xl font-light mt-5 leading-relaxed max-w-2xl">
                        MARKAS sangat mengedepankan
                        kegunaan ruang untuk menunjang
                        aktivitas penggunanya.
                    </p>
                </div>
            </div>
            {{-- Filosofi 2 --}}
            <div class="flex flex-row-reverse items-center justify-center gap-20">
                <div class="w-1/2">
                    <image src="{{ asset('images/about/filosofi-2.png') }}" class="" />
                </div>
                <div class="flex flex-col items-start w-1/2">
                    <h5 class="text-redMarkas text-xl font-light">Get Mentored</h5>
                    <h4 class="text-[28px] leading-none font-semibold mt-3">Tempat Berkonsultasi</h4>
                    <p class="text-xl font-light mt-5 leading-relaxed max-w-2xl">
                        Fasilitas pertemuan singkat
                        maupun diskusi panjang untuk
                        mengolah ide menjadi nyata.
                    </p>
                </div>
            </div>
            {{-- Filosofi 3 --}}
            <div class="flex flex-row items-center justify-center gap-20">
                <div class="w-1/2">
                    <image src="{{ asset('images/about/filosofi-3.png') }}" class="" />
                </div>
                <div class="flex flex-col items-start w-1/2">
                    <h5 class="text-redMarkas text-xl font-light">Expand Network</h5>
                    <h4 class="text-[28px] leading-none font-semibold mt-3">Wadah Berkolaborasi</h4>
                    <p class="text-xl font-light mt-5 leading-relaxed max-w-2xl">
                        Area kerja bersama yang dapat
                        diakses para startup founder dan stakeholder
                        startup.
                    </p>
                </div>
            </div>
        </div>
    </div>

    {{-- Karakteristik --}}
    <div class="mt-40 flex flex-col justify-center items-center w-10/12 mx-auto h-screen">
        <div class="flex flex-col items-center justify-center w-11/12 text-center">
            <h2 class="text-redMarkas text-[28px] leading-none uppercase font-semibold font-lexendPeta">Karakteristik
            </h2>
            <h3 class="text-5xl font-extrabold mt-5">10 KARAKTER MARKAS</h3>
            <p class="text-xl font-light mt-9 leading-relaxed">Sejak diinisiasi di tahun 2016, semangat
                #1000StartupDigital adalah untuk berkolaborasi
                membuat ekosistem startup Indonesia menjadi
                inklusif dan kolaboratif.
            </p>
        </div>
        <div class="mt-10 flex flex-col gap-y-3">
            <div class="flex flex-row gap-x-3 translate-x-6">
                <div class="flex max-w-sm p-3 pl-6 pr-6 border-2 border-black rounded-[55px]">
                    <h1 class="font-lexendMega font-semibold text-lg">🚀 VISIONARY</h1>
                </div>
                <div class="flex max-w-sm p-3 pl-6 pr-6 border-2 border-black rounded-[55px]">
                    <h1 class="font-lexendMega font-semibold text-lg">👟️ EXTRAMILE</h1>
                </div>
                <div class="flex max-w-sm p-3 pl-6 pr-6 border-2 border-black rounded-[55px]">
                    <h1 class="font-lexendMega font-semibold text-lg">🧠 STRATEGIC</h1>
                </div>
            </div>
            <div class="flex flex-row gap-x-3 -translate-x-2">
                <div class="flex max-w-sm p-3 pl-6 pr-6 border-2 border-black rounded-[55px]">
                    <h1 class="font-lexendMega font-semibold text-lg">🏆 GRIT</h1>
                </div>
                <div class="flex max-w-sm p-3 pl-6 pr-6 border-2 border-black rounded-[55px]">
                    <h1 class="font-lexendMega font-semibold text-lg">⚖ INTEGRITY</h1>
                </div>
                <div class="flex max-w-sm p-3 pl-6 pr-6 border-2 border-black rounded-[55px]">
                    <h1 class="font-lexendMega font-semibold text-lg">🎯 FOCUSED</h1>
                </div>
                <div class="flex max-w-sm p-3 pl-6 pr-6 border-2 border-black rounded-[55px]">
                    <h1 class="font-lexendMega font-semibold text-lg">🚅 AGILE</h1>
                </div>
            </div>
            <div class="flex flex-row gap-x-3 translate-x-8">
                <div class="flex max-w-sm p-3 pl-6 pr-6 border-2 border-black rounded-[55px]">
                    <h1 class="font-lexendMega font-semibold text-lg">🔥 PASSION</h1>
                </div>
                <div class="flex max-w-sm p-3 pl-6 pr-6 border-2 border-black rounded-[55px]">
                    <h1 class="font-lexendMega font-semibold text-lg">📚 RESOURCEFUL</h1>
                </div>
                <div class="flex max-w-sm p-3 pl-6 pr-6 border-2 border-black rounded-[55px]">
                    <h1 class="font-lexendMega font-semibold text-lg">🎨 CREATIVE</h1>
                </div>
            </div>
        </div>
    </div>

    {{-- Kolaborasi --}}
    <div class="flex flex-col justify-center items-center w-10/12 mx-auto mt-20">
        <div class="flex flex-col items-center justify-center w-11/12 text-center">
            <h2 class="text-redMarkas text-[28px] leading-none uppercase font-semibold font-lexendPeta">Kolaborasi</h2>
            <h3 class="text-5xl font-extrabold mt-5">Pusat Kolaborasi Ekosistem Digital</h3>
            <p class="text-xl font-light mt-9 leading-relaxed">
                Dalam Markas, kami visualisasikan semangat tersebut dalam area kerja bersama yang dapat
                diakses para startup founder dan stakeholder
                startup.
            </p>
        </div>
        <div class="mt-24 flex flex-row gap-x-12 mb-14">
            {{-- Cards 1 --}}
            <div
                class="flex flex-col items-center justify-center text-center w-[266px] h-[378px] px-8 py-2 rounded-2xl bg-white  shadow-sm gap-y-5 -translate-y-7">
                <image src="{{ asset('images/about/government-emoji.png') }}" class="w-[130px]" />
                <h5 class="text-liteBlack text-xl font-semibold">Pemerintahan</h5>
                <p class="">Dukungan dalam legalitas dan yuridis sangatlah diperlukan, oleh karenanya ahli-ahli
                    dalam
                    hukum dihadirkan dalam suatu forum diskusi terbuka.</p>
            </div>
            {{-- Cards 2 --}}
            <div
                class="flex flex-col items-center justify-center text-center w-[266px] h-[378px] px-8 py-2 rounded-2xl bg-white shadow-sm  gap-y-5 translate-y-7">
                <image src="{{ asset('images/about/graduates-emoji.png') }}" class="w-[130px]" />
                <h5 class="text-liteBlack text-xl font-semibold">Praktisi Industri</h5>
                <p class="">Akademisi pendidikan dari berbagai universitas dan bidang akan berkolaborasi bersama
                    dalam
                    penelitian
                    agar tercapainya validasi yang diperlukan.</p>
            </div>
            {{-- Cards 3 --}}
            <div
                class="flex flex-col items-center justify-center text-center w-[266px] h-[378px] px-8 py-2 rounded-2xl bg-white  shadow-sm gap-y-5 -translate-y-7">
                <image src="{{ asset('images/about/office-emoji.png') }}" class="w-[130px]" />
                <h5 class="text-liteBlack text-xl font-semibold">Praktisi Industri</h5>
                <p class="">Dihadirkan pula praktisi-praktisi profesional yang siap membantu dalam menggali
                    pengalaman
                    yang relevan dengan kebutuhan luas.</p>
            </div>
            {{-- Cards 4 --}}
            <div
                class="flex flex-col items-center justify-center text-center w-[266px] h-[378px] px-8 py-2 rounded-2xl bg-white shadow-sm  gap-y-5 translate-y-7">
                <image src="{{ asset('images/about/government-emoji.png') }}" class="w-[130px]" />
                <h5 class="text-liteBlack text-xl font-semibold">Pakar Pendidikan</h5>
                <p class="">Dukungan dalam legalitas dan yuridis sangatlah diperlukan, oleh karenanya ahli-ahli
                    dalam
                    hukum dihadirkan dalam suatu forum diskusi terbuka.</p>
            </div>
            {{-- Cards 5 --}}
            <div
                class="flex flex-col items-center justify-center text-center w-[266px] h-[378px] px-8 py-2 rounded-2xl bg-white  shadow-sm gap-y-5 -translate-y-7">
                <image src="{{ asset('images/about/detective-emoji.png') }}" class="w-[130px]" />
                <h5 class="text-liteBlack text-xl font-semibold">Media Masa</h5>
                <p class="">Dukungan media masa maupun cetak berguna bagi perkembangan startup, oleh karenanya
                    MARKAS
                    bekerja bersama media yang terpercaya.</p>
            </div>
            {{-- Cards 6 --}}
            <div
                class="flex flex-col items-center justify-center text-center w-[266px] h-[378px] px-8 py-2 rounded-2xl bg-white shadow-sm  gap-y-5 translate-y-7">
                <image src="{{ asset('images/about/graduates-emoji.png') }}" class="w-[130px]" />
                <h5 class="text-liteBlack text-xl font-semibold">Pakar Pendidikan</h5>
                <p class="">Akademisi pendidikan dari berbagai universitas dan bidang akan berkolaborasi bersama
                    dalam
                    penelitian
                    agar tercapainya validasi yang diperlukan.</p>
            </div>
        </div>
    </div>

    {{-- Kerjasama dan Afiliasi --}}
    <div class="flex flex-col justify-center items-center w-10/12 mx-auto mt-96">
        <h2 class="text-5xl font-extrabold uppercase">Kerjasama Dan Afiliasi</h3>
            <div class="mt-28 grid grid-cols-9 gap-10">
                <div
                    class="col-span-3 bg-white shadow-md rounded-[20px] px-12 py-6 flex flex-col items-center justify-center w-[360px] h-[218px] hover:scale-105 transition-all duration-200">
                    <image src="{{ asset('images/sponsor/sponsor-1.png') }}" />
                </div>
                <div
                    class="col-span-3 bg-white shadow-md rounded-[20px] px-12 py-6 flex flex-col items-center justify-center w-[360px] h-[218px] hover:scale-105 transition-all duration-200">
                    <image src="{{ asset('images/sponsor/sponsor-2.png') }}" />
                </div>
                <div
                    class="col-span-3 bg-white shadow-md rounded-[20px] px-12 py-6 flex flex-col items-center justify-center w-[360px] h-[218px] hover:scale-105 transition-all duration-200">
                    <image src="{{ asset('images/sponsor/sponsor-3.png') }}" />
                </div>
                <div
                    class="col-span-3 bg-white shadow-md rounded-[20px] px-12 py-6 flex flex-col items-center justify-center w-[360px] h-[218px] hover:scale-105 transition-all duration-200">
                    <image src="{{ asset('images/sponsor/sponsor-4.png') }}" />
                </div>
                <div
                    class="col-span-3 bg-white shadow-md rounded-[20px] px-12 py-6 flex flex-col items-center justify-center w-[360px] h-[218px] hover:scale-105 transition-all duration-200">
                    <image src="{{ asset('images/sponsor/sponsor-5.png') }}" />
                </div>
                <div
                    class="col-span-3 bg-white shadow-md rounded-[20px] px-12 py-6 flex flex-col items-center justify-center w-[360px] h-[218px] hover:scale-105 transition-all duration-200">
                    <image src="{{ asset('images/sponsor/sponsor-6.png') }}" />
                </div>
                <div
                    class="col-span-3 bg-white shadow-md rounded-[20px] px-12 py-6 flex flex-col items-center justify-center w-[360px] h-[218px] hover:scale-105 transition-all duration-200">
                    <image src="{{ asset('images/sponsor/sponsor-7.png') }}" />
                </div>
                <div
                    class="col-span-3 bg-white shadow-md rounded-[20px] px-12 py-6 flex flex-col items-center justify-center w-[360px] h-[218px] hover:scale-105 transition-all duration-200">
                    <image src="{{ asset('images/sponsor/sponsor-8.png') }}" />
                </div>
                <div
                    class="col-span-3 bg-white shadow-md rounded-[20px] px-12 py-6 flex flex-col items-center justify-center w-[360px] h-[218px] hover:scale-105 transition-all duration-200">
                    <image src="{{ asset('images/sponsor/sponsor-9.png') }}" />
                </div>
            </div>
    </div>

    {{-- Footer Tagline --}}
    <div class="flex flex-col w-screen min-h-screen items-center justify-center gap-y-16">
        <p class="text-4xl font-light">Gain Knowledge. Get Mentored. Expand Network.</p>
    </div>


</div>
