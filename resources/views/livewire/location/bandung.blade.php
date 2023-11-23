<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

<div>
    <div class="mt-24">
        <h1 class="text-redMarkas font-semibold text-3xl font-lexendPeta"> MARKAS</h1>
        <h1 class="text-black font-extrabold text-5xl my-6">ABC, BANDUNG</h1>
        <p class="text-[#5A5A5A] text-xl">Jl. Sidosermo II No.106F, Sidosermo, Kec. Wonocolo, Kota Surabaya,
            Jawa Timur.</p>
    </div>

    {{-- Grid Gambar --}}
    <div class="grid grid-rows-5 grid-flow-col gap-5 mt-36">
        <div class="row-span-5 ">
            <img src="{{ asset('images/location/markas-1.png') }}" class="h-[615px]" />
        </div>
        <div class="row-span-2 col-span-2 ">
            <img src="{{ asset('images/location/markas-2.png') }}" class="" />
        </div>
        <div class="row-span-2 col-span-2 ">
            <img src="{{ asset('images/location/markas-3.png') }}" class="" />
        </div>
        <div class="row-span-1 col-span-2 ">
            <div
                class="border-2 border-black w-[325px] h-[97px] rounded-xl text-4xl flex justify-center items-center">
                +19 Foto
            </div>
        </div>
    </div>
    {{-- Grid Gambar --}}

    <div class="mt-32">
        <ul class="flex justify-start mt-5 space-x-2 text-xl">
            <li>
                <a href="#fasilitas" onclick="scrollToFacilities()"
                    class="w-[229px] h-[57px] border-2 border-black px-[30px] py-[10px] font-light">
                    Fasilitas Gedung
                </a>
            </li>
            <li>
                <a href="#"
                    class="w-[229px] h-[57px] border-2 border-black px-[30px] py-[10px] font-light">
                    Detail Lokasi
                </a>
            </li>
            <li>
                <a href="#"
                    class="w-[229px] h-[57px] border-2 border-black px-[30px] py-[10px] font-light">
                    Pilih Tipe Ruangan
                </a>
            </li>
            <li>
                <a href="#"
                    class="w-[229px] h-[57px] border-2 border-black px-[30px] py-[10px] font-light">
                    Peraturan
                </a>
            </li>
            <li>
                <a href="#"
                    class="w-[229px] h-[57px] border-2 border-black px-[30px] py-[10px] font-light">
                    FAQ
                </a>
            </li>

        </ul>
    </div>

    <div class="mt-32 ">
        <h1 class="font-bold text-5xl">Fasilitas Gedung</h1>
        <div class="mt-20 grid grid-rows-4 grid-flow-col w-full gap-y-10">
            <div class="flex flex-row">
                <div class="text-[28px] font-light">✅ Tempat Parkir</div>
            </div>
            <div class="flex flex-row">
                <div class="text-[28px] font-light">✅ Perpustakaan</div>
            </div>
            <div class="flex flex-row">
                <div class="text-[28px] font-light">✅ Air Conditioner</div>
            </div>
            <div class="flex flex-row">
                <div class="text-[28px] font-light">✅ Dispenser Air</div>
            </div>
            <div class="flex flex-row">
                <div class="text-[28px] font-light">✅ Rak Sepatu</div>
            </div>
            <div class="flex flex-row">
                <div class="text-[28px] font-light">✅ Lounge</div>
            </div>
            <div class="flex flex-row">
                <div class="text-[28px] font-light">✅ Toilet</div>
            </div>
            <div class="flex flex-row">
                <div class="text-[28px] font-light">✅ Internet</div>
            </div>
            <div class="flex flex-row">
                <div class="text-[28px] font-light">✅ Mini Kafe</div>
            </div>
            <div class="flex flex-row">
                <div class="text-[28px] font-light">✅ Petugas Teknisi</div>
            </div>
        </div>
    </div>


    <div class="mt-28 relative">
        <h1 class=" text-5xl font-bold">Detail Lokasi</h1>
        <div class="absolute border-2 border-black w-full h-[657px] p-9 mt-20 rounded-3xl">
            <div class="relative ">
                <div class="flex flex-row gap-x-[52px]">
                    <div class=" border-2 border-black w-[599px] h-[583px] rounded-xl" id="map">

                    </div>
                    <script>
                        // Custom JavaScript code to initialize the map
                        var map = L.map('map').setView([-7.314080946676787, 112.74950819434876], 15);

                        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                            attribution: '© OpenStreetMap contributors'
                        }).addTo(map);

                        L.marker([-7.314080946676787, 112.74950819434876]).addTo(map)
                            .bindPopup('Your Location')
                            .openPopup();
                    </script>
                    <div>
                        <h1 class="font-bold text-4xl">Detail Alamat</h1>
                        <p class="text-xl mt-5 font-light text-[#5A5A5A]">Jl. Sidosermo II No.106F,
                            Sidosermo,
                            Kec. Wonocolo,
                            Kota Surabaya, Jawa Timur.</p>
                        <hr class="my-[25px] h-0.5 border-0 bg-[#5A5A5A] " />
                        <h1 class="font-bold text-4xl mb-[38px]">Tempat Terdekat</h1>

                        <div class="flex flex-row justify-between mb-[21px]">
                            <div>
                                <h1 class="font-semibold text-[22px]">Plaza Marina</h1>
                                <p class="font-light text-base text-[#5A5A5A]">Pusat perbelanjaan dan
                                    hiburan
                                </p>
                            </div>
                            <div class="ml-auto text-[#5A5A5A] font-light text-[22px]">
                                5 menit
                            </div>
                        </div>
                        <div class="flex flex-row justify-between mb-[21px]">
                            <div>
                                <h1 class="font-semibold text-[22px]">Plaza Marina</h1>
                                <p class="font-light text-base text-[#5A5A5A]">Pusat perbelanjaan dan
                                    hiburan
                                </p>
                            </div>
                            <div class="ml-auto text-[#5A5A5A] font-light text-[22px]">
                                5 menit
                            </div>
                        </div>
                        <div class="flex flex-row justify-between mb-[21px]">
                            <div>
                                <h1 class="font-semibold text-[22px]">Plaza Marina</h1>
                                <p class="font-light text-base text-[#5A5A5A]">Pusat perbelanjaan dan
                                    hiburan
                                </p>
                            </div>
                            <div class="ml-auto text-[#5A5A5A] font-light text-[22px]">
                                5 menit
                            </div>
                        </div>
                        <div class="flex flex-row justify-between mb-[21px]">
                            <div>
                                <h1 class="font-semibold text-[22px]">Plaza Marina</h1>
                                <p class="font-light text-base text-[#5A5A5A]">Pusat perbelanjaan dan
                                    hiburan
                                </p>
                            </div>
                            <div class="ml-auto text-[#5A5A5A] font-light text-[22px]">
                                5 menit
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Tipe Ruangan --}}
    <div class="mt-[969px]">
        <div class="">
            <h1 class="font-bold text-5xl">Tipe Ruangan</h1>
            <div
                class="border-2 border-black w-full h-[381px] mt-[90px] rounded-[18px] pl-[30px] pb-[35px] pt-[22px]">
                <h1 class="font-semibold text-[22px]">HALL UKURAN BESAR</h1>
                <div class="flex flex-row gap-x-[44px]">
                    <div>
                        <img src="{{ asset('images/location/ruangan.png') }}"
                            class="h-[275px] mt-[19px]" />
                    </div>
                    <div>
                        <h1 class="font-semibold text-[31px] text-redMarkas">TJOKRO HALL</h1>
                        <p class="text-base text-[#5A5A5A] my-[20px]">Area komunal
                            untuk untuk
                            kegiatan seminar, talkshow, dan workshop.</p>
                        <p class="text-base text-redMarkas mt-4">Fasilitas:</p>

                        <ul class="mt-2 grid grid-rows-2 grid-flow-col w-full gap-y-4 list-disc pl-5">
                            <li class="text-base">Tempat Parkir</li>
                            <li class="text-base">Tempat Parkir</li>
                            <li class="text-base">Tempat Parkir</li>
                            <li class="text-base">Tempat Parkir</li>
                            <li class="text-base">Tempat Parkir</li>
                        </ul>

                        <p class="text-base text-redMarkas mt-[20px]">Kapasitas Maksimal: <span
                                class="text-black">50 orang</span></p>
                    </div>

                </div>
            </div>
        </div>

        <div class="mt-[44px]">
            <div
                class="border-2 border-black w-full h-[381px] mt-[90px] rounded-[18px] pl-[30px] pb-[35px] pt-[22px]">
                <h1 class="font-semibold text-[22px]">HALL UKURAN BESAR</h1>
                <div class="flex flex-row gap-x-[44px]">
                    <div>
                        <img src="{{ asset('images/location/ruangan.png') }}"
                            class="h-[275px] mt-[19px]" />
                    </div>
                    <div>
                        <h1 class="font-semibold text-[31px] text-redMarkas">TJOKRO HALL</h1>
                        <p class="text-base text-[#5A5A5A] my-[20px]">Area komunal
                            untuk untuk
                            kegiatan seminar, talkshow, dan workshop.</p>
                        <p class="text-base text-redMarkas mt-4">Fasilitas:</p>

                        <ul class="mt-2 grid grid-rows-2 grid-flow-col w-full gap-y-4 list-disc pl-5">
                            <li class="text-base">Tempat Parkir</li>
                            <li class="text-base">Tempat Parkir</li>
                            <li class="text-base">Tempat Parkir</li>
                            <li class="text-base">Tempat Parkir</li>
                            <li class="text-base">Tempat Parkir</li>
                        </ul>

                        <p class="text-base text-redMarkas mt-[20px]">Kapasitas Maksimal: <span
                                class="text-black">50 orang</span></p>
                    </div>

                </div>
            </div>
        </div>

        <div class="mt-[44px]">
            <div
                class="border-2 border-black w-full h-[381px] mt-[90px] rounded-[18px] pl-[30px] pb-[35px] pt-[22px]">
                <h1 class="font-semibold text-[22px]">HALL UKURAN BESAR</h1>
                <div class="flex flex-row gap-x-[44px]">
                    <div>
                        <img src="{{ asset('images/location/ruangan.png') }}"
                            class="h-[275px] mt-[19px]" />
                    </div>
                    <div>
                        <h1 class="font-semibold text-[31px] text-redMarkas">TJOKRO HALL</h1>
                        <p class="text-base text-[#5A5A5A] my-[20px]">Area komunal
                            untuk untuk
                            kegiatan seminar, talkshow, dan workshop.</p>
                        <p class="text-base text-redMarkas mt-4">Fasilitas:</p>

                        <ul class="mt-2 grid grid-rows-2 grid-flow-col w-full gap-y-4 list-disc pl-5">
                            <li class="text-base">Tempat Parkir</li>
                            <li class="text-base">Tempat Parkir</li>
                            <li class="text-base">Tempat Parkir</li>
                            <li class="text-base">Tempat Parkir</li>
                            <li class="text-base">Tempat Parkir</li>
                        </ul>

                        <p class="text-base text-redMarkas mt-[20px]">Kapasitas Maksimal: <span
                                class="text-black">50 orang</span></p>
                    </div>

                </div>
            </div>
        </div>

        <div class="mt-[44px]">
            <div
                class="border-2 border-black w-full h-[381px] mt-[90px] rounded-[18px] pl-[30px] pb-[35px] pt-[22px]">
                <h1 class="font-semibold text-[22px]">HALL UKURAN BESAR</h1>
                <div class="flex flex-row gap-x-[44px]">
                    <div>
                        <img src="{{ asset('images/location/ruangan.png') }}"
                            class="h-[275px] mt-[19px]" />
                    </div>
                    <div>
                        <h1 class="font-semibold text-[31px] text-redMarkas">TJOKRO HALL</h1>
                        <p class="text-base text-[#5A5A5A] my-[20px]">Area komunal
                            untuk untuk
                            kegiatan seminar, talkshow, dan workshop.</p>
                        <p class="text-base text-redMarkas mt-4">Fasilitas:</p>

                        <ul class="mt-2 grid grid-rows-2 grid-flow-col w-full gap-y-4 list-disc pl-5">
                            <li class="text-base">Tempat Parkir</li>
                            <li class="text-base">Tempat Parkir</li>
                            <li class="text-base">Tempat Parkir</li>
                            <li class="text-base">Tempat Parkir</li>
                            <li class="text-base">Tempat Parkir</li>
                        </ul>

                        <p class="text-base text-redMarkas mt-[20px]">Kapasitas Maksimal: <span
                                class="text-black">50 orang</span></p>
                    </div>

                </div>
            </div>
        </div>

        <div class="mt-[44px]">
            <div
                class="border-2 border-black w-full h-[381px] mt-[90px] rounded-[18px] pl-[30px] pb-[35px] pt-[22px]">
                <h1 class="font-semibold text-[22px]">HALL UKURAN BESAR</h1>
                <div class="flex flex-row gap-x-[44px]">
                    <div>
                        <img src="{{ asset('images/location/ruangan.png') }}"
                            class="h-[275px] mt-[19px]" />
                    </div>
                    <div>
                        <h1 class="font-semibold text-[31px] text-redMarkas">TJOKRO HALL</h1>
                        <p class="text-base text-[#5A5A5A] my-[20px]">Area komunal
                            untuk untuk
                            kegiatan seminar, talkshow, dan workshop.</p>
                        <p class="text-base text-redMarkas mt-4">Fasilitas:</p>

                        <ul class="mt-2 grid grid-rows-2 grid-flow-col w-full gap-y-4 list-disc pl-5">
                            <li class="text-base">Tempat Parkir</li>
                            <li class="text-base">Tempat Parkir</li>
                            <li class="text-base">Tempat Parkir</li>
                            <li class="text-base">Tempat Parkir</li>
                            <li class="text-base">Tempat Parkir</li>
                        </ul>

                        <p class="text-base text-redMarkas mt-[20px]">Kapasitas Maksimal: <span
                                class="text-black">50 orang</span></p>
                    </div>

                </div>
            </div>
        </div>

        <div class="mt-[44px]">
            <div
                class="border-2 border-black w-full h-[381px] mt-[90px] rounded-[18px] pl-[30px] pb-[35px] pt-[22px]">
                <h1 class="font-semibold text-[22px]">HALL UKURAN BESAR</h1>
                <div class="flex flex-row gap-x-[44px]">
                    <div>
                        <img src="{{ asset('images/location/ruangan.png') }}"
                            class="h-[275px] mt-[19px]" />
                    </div>
                    <div>
                        <h1 class="font-semibold text-[31px] text-redMarkas">TJOKRO HALL</h1>
                        <p class="text-base text-[#5A5A5A] my-[20px]">Area komunal
                            untuk untuk
                            kegiatan seminar, talkshow, dan workshop.</p>
                        <p class="text-base text-redMarkas mt-4">Fasilitas:</p>

                        <ul class="mt-2 grid grid-rows-2 grid-flow-col w-full gap-y-4 list-disc pl-5">
                            <li class="text-base">Tempat Parkir</li>
                            <li class="text-base">Tempat Parkir</li>
                            <li class="text-base">Tempat Parkir</li>
                            <li class="text-base">Tempat Parkir</li>
                            <li class="text-base">Tempat Parkir</li>
                        </ul>

                        <p class="text-base text-redMarkas mt-[20px]">Kapasitas Maksimal: <span
                                class="text-black">50 orang</span></p>
                    </div>

                </div>
            </div>
        </div>

        <div class="mt-[44px]">
            <div
                class="border-2 border-black w-full h-[381px] mt-[90px] rounded-[18px] pl-[30px] pb-[35px] pt-[22px]">
                <h1 class="font-semibold text-[22px]">HALL UKURAN BESAR</h1>
                <div class="flex flex-row gap-x-[44px]">
                    <div>
                        <img src="{{ asset('images/location/ruangan.png') }}"
                            class="h-[275px] mt-[19px]" />
                    </div>
                    <div>
                        <h1 class="font-semibold text-[31px] text-redMarkas">TJOKRO HALL</h1>
                        <p class="text-base text-[#5A5A5A] my-[20px]">Area komunal
                            untuk untuk
                            kegiatan seminar, talkshow, dan workshop.</p>
                        <p class="text-base text-redMarkas mt-4">Fasilitas:</p>

                        <ul class="mt-2 grid grid-rows-2 grid-flow-col w-full gap-y-4 list-disc pl-5">
                            <li class="text-base">Tempat Parkir</li>
                            <li class="text-base">Tempat Parkir</li>
                            <li class="text-base">Tempat Parkir</li>
                            <li class="text-base">Tempat Parkir</li>
                            <li class="text-base">Tempat Parkir</li>
                        </ul>

                        <p class="text-base text-redMarkas mt-[20px]">Kapasitas Maksimal: <span
                                class="text-black">50 orang</span></p>
                    </div>

                </div>
            </div>
        </div>

    </div>

    {{-- Tipe Ruangan --}}
</div>
