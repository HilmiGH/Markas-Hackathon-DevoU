@section('title', 'MARKAS')
<div class="font-lexendDeca w-full overflow-hidden">
    {{-- Hero --}}
    <div class="relative z-10 flex flex-col w-screen min-h-screen items-center justify-center">
        <img src="{{ asset('images/Picture.png') }}" class="absolute inset-0 z-0 w-screen" />
        <h1 class="text-[96px] font-light relative z-10 text-white font-lexendMega">MARKAS</h1>
        <h1 class="text-xl font-light relative z-10 text-white font-lexendMega">A hub for startup
            founders to grow with the ecosystem.</h1>
    </div>

    <div class="h-40 w-screen bg-redMarkas flex items-center justify-center mt-56">
        <div class="text-white  text-[30px] font-lexendMega self-center">GAIN KNOWLEDGE - GET MENTORED - EXPAND NETWORK
        </div>
    </div>

    {{-- Kegiatan Kami --}}
    <div class="mt-40 flex flex-col justify-center items-center w-10/12 mx-auto gap-y-6">
        <div class="flex flex-col items-start justify-start w-full">
            <h2 class="text-black text-5xl leading-none uppercase font-extrabold font-lexendDeca">Ikuti Kegiatan Kami
                di Markas</h2>
            <p class="text-xl font-light mt-9 leading-relaxed">Jangan lewatkan event event seru di MARKAS
            </p>
        </div>
        <div class="mt-10 flex flex-row gap-x-3">
            {{-- Filosofi 1 --}}
            <img src="{{ asset('images/Frame 31.png') }}" alt="">
            <img src="{{ asset('images/Frame 31.png') }}" alt="">
            <img src="{{ asset('images/Frame 31.png') }}" alt="">

        </div>
        <div class=" flex flex-row gap-x-3">
            {{-- Filosofi 1 --}}
            <img src="{{ asset('images/Frame 31.png') }}" alt="">
            <img src="{{ asset('images/Frame 31.png') }}" alt="">
            <img src="{{ asset('images/Frame 31.png') }}" alt="">

        </div>
    </div>

    {{-- Filosofi --}}
    <div class="mt-40 flex flex-col justify-center items-center w-10/12 mx-auto">
        <div class="flex flex-col items-center justify-center w-11/12 text-center">
            <h2 class="text-redMarkas text-[28px] leading-none uppercase font-semibold font-lexendPeta">Filosofi</h2>
            <h3 class="text-5xl font-extrabold mt-5">Inklusif Dan Kolaboratif</h3>
            <p class="text-xl font-light mt-9 leading-relaxed">Sejak diinisiasi di tahun 2016, semangat
                #1000StartupDigital adalah untuk berkolaborasi
                membuat ekosistem startup Indonesia menjadi
                inklusif dan kolaboratif.
            </p>
        </div>
        <div class="mt-20 flex flex-row gap-x-9">
            {{-- Filosofi 1 --}}
            <div class="flex flex-col items-center justify-center gap-20">
                <div class="w-full">
                    <image src="{{ asset('images/Rectangle 5.png') }}" class="" />
                </div>
                <div class="flex flex-col items-start w-full">
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
            <div class="flex flex-col items-center justify-center gap-20">
                <div class="w-full">
                    <image src="{{ asset('images/Rectangle 5 (1).png') }}" class="" />
                </div>
                <div class="flex flex-col items-start w-full">
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
            <div class="flex flex-col items-center justify-center gap-20">
                <div class="w-full">
                    <image src="{{ asset('images/Rectangle 5 (2).png') }}" class="" />
                </div>
                <div class="flex flex-col items-start w-full">
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
        <div class="mt-20 flex flex-col items-center justify-center w-11/12 text-center">
            <button
                class="text-white bg-redMarkas font-lexendMega p-3 pl-5 pr-5 max-w-sm border border-transparent rounded-[100px]">Cari
                Tahu Lebih</button>
        </div>
    </div>


    {{-- Kolaborasi --}}
    <div class="h-40 mt-56 w-screen bg-redMarkas flex flex-col items-center justify-center gap-y-3">
        <div class="text-white text-[30px] font-lexendMega self-center">MARI BERKOLABORASI
        </div>
        <button
            class="w-[327px] text-redMarkas bg-white font-lexendMega p-3 pl-5 pr-5 max-w-sm border border-transparent rounded-[100px] font-bold">Booking</button>
    </div>





    {{-- Karakteristik --}}
    <div class="mt-40 flex flex-col justify-center items-center w-10/12 mx-auto">
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

    {{-- Apa Kata Mereka --}}
    <div class="mt-60 relative z-10 flex flex-col w-screen min-h-screen">
        <img src="{{ asset('images/Vector 5.png') }}" class="absolute inset-0 z-0 w-screen" />
        <div class="flex flex-row mt-40 ml-20">
            <div class="flex flex-col items-start justify-start">
                <h1 class="text-[48px] relative z-10 text-white font-semibold">APA KATA MEREKA</h1>
                <h1 class="text-xl font-light relative z-10 text-white ">⭐ 4.6 | 30 Ulasan di Google</h1>
            </div>

        </div>
        <div class="flex flex-row">

            <div class="flex flex-col mt-20 ml-10 z-10 w-1/2">
                <div class="flex flex-row gap-x-6">
                    <img class="rounded-full w-[112px] z-10" src="{{ asset('images/Ellipse 18.png') }}" alt="">
                    <div class="flex flex-col">
                        <div class="text-white z-10 text-[40px] font-semibold">Lexi Handi Nayana</div>
                        <div class="text-white z-10">BuddyP2P - Hamburg, Jerman</div>
                    </div>
                </div>
                <div class="flex mt-10 mb-6 text-[32px]">
                    ⭐ ⭐ ⭐ ⭐ ⭐
                </div>
                <div class="flex text-white text-[24px]">
                    Kami memulai perjalanan kami di MARKAS dan tidak pernah menyesalinya. Tempat yang penuh dengan
                    sumber
                    daya dan inspirasi.
                </div>
            </div>
            <div class="flex flex-col mt-20 ml-20 z-10 w-1/2">
                <div class="flex flex-row gap-x-6">
                    <img class="rounded-full w-[112px] z-10" src="{{ asset('images/Ellipse 18 (1).png') }}" alt="">
                    <div class="flex flex-col">
                        <div class="text-white z-10 text-[40px] font-semibold">David Nasrulloh</div>
                        <div class="text-white z-10">Elux Space - Malang, Jawa Timur</div>
                    </div>
                </div>
                <div class="flex mt-10 mb-6 text-[32px]">
                    ⭐ ⭐ ⭐ ⭐ ⭐
                </div>
                <div class="flex text-white text-[24px]">
                    Ruang pertemuan MARKAS membantu kami untuk menggelar pertemuan dengan investor dengan mudah.
                </div>
            </div>
        </div>
    </div>

    {{-- FAQ --}}
    <div class="mt-80 flex flex-col justify-center items-center w-10/12 mx-auto" x-data="{ open1: false, open2: false, open3: false, open4: false, open5: false }">
        <div class="flex flex-col items-center justify-center w-11/12 text-center">
            <h2 class="text-redMarkas text-[28px] leading-none uppercase font-semibold font-lexendPeta">FAQ</h2>
            <h3 class="text-5xl font-extrabold mt-5">*MASIH RAGU?</h3>
            <p class="text-xl font-light mt-9 leading-relaxed">Kami menjawab apa yang menjadi pertanyaan Anda. Semoga
                membantu.</p>
        </div>
        {{-- open1 --}}
        <div class="mt-20 flex flex-col items-center justify-center">
            <div class="flex flex-row items-center">
                <div class="mr-44">Apakah Ada Acara atau Aktivitas Sosial di MARKAS?</div>
                <button @click="open1 = !open1" class="w-6 fill-redMarkas hover">
                    <x-heroicon-s-plus-small x-show="!open1" />
                    <x-heroicon-s-minus-small x-show="open1" />
                </button>
            </div>
            <div x-show="open1" class="mt-2 w-1/2 text-gray-600 border-b-2 border-gray-500"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 transform scale-90"
                x-transition:enter-end="opacity-100 transform scale-100"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100 transform scale-100"
                x-transition:leave-end="opacity-0 transform scale-90">
                Ya, MARKAS banyak menyelenggarakan acara, seminar, dan kegiatan sosial yang memungkinkan setiap anggota
                untuk berinteraksi, belajar, dan membangun jaringan.
            </div>
        </div>
        {{-- open2 --}}
        <div class="mt-7 flex flex-col items-center justify-center">
            <div class="flex flex-row items-center">
                <div class="mr-44">Bagaimana Saya Bisa Bergabung dengan MARKAS?</div>
                <button @click="open2 = !open2" class="w-6 fill-redMarkas hover">
                    <x-heroicon-s-plus-small x-show="!open2" />
                    <x-heroicon-s-minus-small x-show="open2" />
                </button>
            </div>
            <div x-show="open2" class="mt-2 w-1/2 text-gray-600 border-b-2 border-gray-500"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 transform scale-90"
                x-transition:enter-end="opacity-100 transform scale-100"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100 transform scale-100"
                x-transition:leave-end="opacity-0 transform scale-90">
                Ya, MARKAS banyak menyelenggarakan acara, seminar, dan kegiatan sosial yang memungkinkan setiap anggota
                untuk berinteraksi, belajar, dan membangun jaringan.
            </div>
        </div>
        {{-- open3 --}}
        <div class="mt-7 flex flex-col items-center justify-center">
            <div class="flex flex-row items-center">
                <div class="mr-64">Apakah Ada Jam Operasional Tertentu?</div>
                <button @click="open3 = !open3" class="w-6 fill-redMarkas hover ml-5">
                    <x-heroicon-s-plus-small x-show="!open3" />
                    <x-heroicon-s-minus-small x-show="open3" />
                </button>
            </div>
            <div x-show="open3" class="mt-2 w-1/2 text-gray-600 border-b-2 border-gray-500"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 transform scale-90"
                x-transition:enter-end="opacity-100 transform scale-100"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100 transform scale-100"
                x-transition:leave-end="opacity-0 transform scale-90">
                Ya, MARKAS banyak menyelenggarakan acara, seminar, dan kegiatan sosial yang memungkinkan setiap anggota
                untuk berinteraksi, belajar, dan membangun jaringan.
            </div>
        </div>
        {{-- open4 --}}
        <div class="mt-7 flex flex-col items-center justify-center">
            <div class="flex flex-row items-center">
                <div class=" mr-64">Bagaimana dengan Privasi di MARKAS?</div>
                <button @click="open4 = !open4" class="w-6 fill-redMarkas hover ml-5">
                    <x-heroicon-s-plus-small x-show="!open4" />
                    <x-heroicon-s-minus-small x-show="open4" />
                </button>
            </div>
            <div x-show="open4" class="mt-2 w-1/2 text-gray-600 border-b-2 border-gray-500"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 transform scale-90"
                x-transition:enter-end="opacity-100 transform scale-100"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100 transform scale-100"
                x-transition:leave-end="opacity-0 transform scale-90">
                Ya, MARKAS banyak menyelenggarakan acara, seminar, dan kegiatan sosial yang memungkinkan setiap anggota
                untuk berinteraksi, belajar, dan membangun jaringan.
            </div>
        </div>
        {{-- open5 --}}
        <div class="mt-7 flex flex-col items-center justify-center">
            <div class="flex flex-row items-center">
                <div class="mr-20">Bagaimana Saya Menyewa untuk Co-Working Space Sementara?</div>
                <button @click="open5 = !open5" class="w-6 fill-redMarkas hover">
                    <x-heroicon-s-plus-small x-show="!open5" />
                    <x-heroicon-s-minus-small x-show="open5" />
                </button>
            </div>
            <div x-show="open5" class="mt-2 w-1/2 text-gray-600 border-b-2 border-gray-500"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 transform scale-90"
                x-transition:enter-end="opacity-100 transform scale-100"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100 transform scale-100"
                x-transition:leave-end="opacity-0 transform scale-90">
                Ya, MARKAS banyak menyelenggarakan acara, seminar, dan kegiatan sosial yang memungkinkan setiap anggota
                untuk berinteraksi, belajar, dan membangun jaringan.
            </div>
        </div>

        <div class="mt-20 flex flex-col items-center justify-center w-11/12 text-center">
            <button
                class="text-white bg-redMarkas font-lexendMega p-3 pl-5 pr-5 max-w-lg border border-transparent rounded-[100px]">
                Lebih Banyak
            </button>
        </div>
    </div>


    <div class="mt-40 flex flex-col justify-center items-center mx-auto">
        <div class="flex flex-col items-center justify-center text-center">
            <h3 class="text-5xl font-extrabold mt-5 uppercase">Kami Menunggumu di MARKAS!</h3>
        </div>
        <div class="mt-20 flex flex-col gap-y-5">
            <div class="flex flex-row gap-x-4">
                <img src="{{ asset('images/Rectangle 83.png') }}" alt="">
                <img src="{{ asset('images/Rectangle 84.png') }}" alt="">
                <img src="{{ asset('images/Rectangle 85.png') }}" alt="">
                <img src="{{ asset('images/Rectangle 86.png') }}" alt="">
                <img src="{{ asset('images/Rectangle 87.png') }}" alt="">
            </div>
            <div class="flex flex-row gap-x-4 -translate-x-28">
                <img src="{{ asset('images/Rectangle 83.png') }}" alt="">
                <img src="{{ asset('images/Rectangle 84.png') }}" alt="">
                <img src="{{ asset('images/Rectangle 85.png') }}" alt="">
                <img src="{{ asset('images/Rectangle 86.png') }}" alt="">
                <img src="{{ asset('images/Rectangle 87.png') }}" alt="">
            </div>
        </div>
    </div>

    {{-- <div class="mt-40 flex flex-col justify-center items-center mx-auto">
        <div class="flex flex-col items-center justify-center text-center">
            <h3 class="text-5xl font-extrabold mt-5 uppercase">Kami Menunggumu di MARKAS!</h3>
        </div>
        <div class="mt-20 overflow-hidden w-40 h-40 relative">
            <div class="carousel-images flex" id="imageContainer">
                <img src="{{ asset('images/Rectangle 83.png') }}" alt="" class="w-full h-full object-cover">
                <img src="{{ asset('images/Rectangle 84.png') }}" alt="" class="w-full h-full object-cover">
                <img src="{{ asset('images/Rectangle 85.png') }}" alt="" class="w-full h-full object-cover">
                <img src="{{ asset('images/Rectangle 86.png') }}" alt="" class="w-full h-full object-cover">
                <img src="{{ asset('images/Rectangle 87.png') }}" alt="" class="w-full h-full object-cover">
            </div>
        </div>
    </div> --}}


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
        <p class="text-4xl font-bold">Ingin bekerja di tempat yang nyaman, fleksibel, dan penuh inspirasi?</p>
        <p class="text-4xl font-bold">Segera bergabung bersama kami di <span class="text-redMarkas">#MARKAS</span></p>
        <img src="{{ asset('images/Frame 7566.png') }}" alt="">
    </div>


</div>

<script>
    let currentIndex = 0;
    const images = document.querySelectorAll('#imageContainer img');

    function showImage(index) {
        images.forEach(image => image.style.display = 'none');
        images[index].style.display = 'block';
    }

    function nextImage() {
        currentIndex = (currentIndex + 1) % images.length;
        showImage(currentIndex);
    }

    setInterval(nextImage, 3000); // Change the interval duration as needed
    showImage(currentIndex);
</script>
