<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

<div class="relative w-full h-[7750px] font-lexendDeca">
    <div class="relative ">
        <img src="{{ asset('images/bg-paper.png') }}" class="z-0 w-full h-[7750px] inset-0 absolute" />
        <div class="relative z-10 px-28">
            <div class="pt-24 text-center">
                <h1 class="text-redMarkas text-3xl font-semibold mb-5 font-lexendPeta">
                    Booking
                </h1>
                <h1 class="text-black font-extrabold text-5xl font-lexendDeca">CARI MARKAS DI SEKITARMU!</h1>
            </div>

            {{-- search --}}
            <div class="mt-24 ">
                <form>
                    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only ">Search</label>
                    <div class="relative">
                        <input type="search" id="default-search"
                            class="block w-full h-24 p-4 ps-10  text-gray-900  rounded-[100px] bg-gray-50 font-light text-2xl placeholder-gray-400  drop-shadow-lg"
                            placeholder="Cari “Kota Surabaya” atau “Sidosermo”" required>
                    </div>
                </form>
            </div>
            {{-- search --}}

            {{-- Tab Section --}}
            <div x-data="{ activeTab: 'surabaya' }" class="mt-28 relative">
                <div class="w-full h-[98px] border border-black rounded-[100px] absolute top-0 left-0 z-0"></div>
                <ul class="flex p-2.5 flex-wrap text-sm font-medium text-center text-black  relative z-10">
                    <li class="flex-1 me-2 flex items-center justify-center">
                        <a href="#" @click.prevent="activeTab = 'surabaya'"
                            :class="{ 'text-white bg-redMarkas': activeTab === 'surabaya', 'hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-white': activeTab !== 'surabaya' }"
                            class="inline-block w-full h-[78px] px-4 py-7 rounded-[100px] active text-[28px] font-semibold"
                            aria-current="page">
                            Surabaya
                        </a>

                    </li>
                    <li class="flex-1 me-2 flex items-center justify-center">
                        <a href="#" @click.prevent="activeTab = 'jakarta'"
                            :class="{ 'text-white bg-redMarkas': activeTab === 'jakarta', 'hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-white': activeTab !== 'jakarta' }"
                            class="inline-block w-full h-[78px] px-4 py-7 text-[28px] font-semibold rounded-[100px]">Jakarta</a>
                    </li>
                    <li class="flex-1 me-2 flex items-center justify-center">
                        <a href="#" @click.prevent="activeTab = 'bandung'"
                            :class="{ 'text-white bg-redMarkas': activeTab === 'bandung', 'hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-white': activeTab !== 'bandung' }"
                            class="inline-block w-full h-[78px] px-4 py-7 text-[28px] font-semibold rounded-[100px]">Bandung</a>
                    </li>
                    <li class="flex-1 me-2 flex items-center justify-center">
                        <a href="#" @click.prevent="activeTab = 'denpasar'"
                            :class="{ 'text-white bg-redMarkas': activeTab === 'denpasar', 'hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-white': activeTab !== 'denpasar' }"
                            class="inline-block w-full h-[78px] px-4 py-7 text-[28px] font-semibold rounded-[100px]">Denpasar</a>
                    </li>
                </ul>
                <div class="">
                    <div class="">
                        <div x-show="activeTab === 'surabaya'" class="block">

                        </div>
                        <div x-show="activeTab === 'jakarta'" class="block">

                        </div>
                        <div x-show="activeTab === 'bandung'" class="block">

                        </div>
                        <div x-show="activeTab === 'denpasar'" class="block">

                        </div>

                    </div>
                </div>
            </div>

            {{-- Tab Section --}}

            {{-- Hal yang diperhatikan --}}
            <div class="bg-redMarkas mt-[226px] -mx-28 pt-[101px] h-[1277px] font-lexendDeca text-white">
                <div class="px-[111px]">
                    <h1 class="font-semibold text-[22px] text-white mb-[90px]">Hal yang perlu diperhatikan </h1>
                    <div class="flex flex-row ">
                        <div>
                            <div class="mb-[35px]">
                                <h1 class="font-semibold text-[22px]">1. Membawa Botol Minum Pribadi</h1>
                                <div class="ml-4 mt-[12px]">
                                    <p class="text-[20px]">Selama berada di MARKAS, para pengunjung diwajibkan untuk
                                        membawa botol minum pribadi yang dapat diisi ulang dengan dispenser yang
                                        tersedia dibeberapa titik.</p>
                                </div>
                            </div>
                            <div class="mb-[35px]">
                                <h1 class="font-semibold text-[22px]">1. Membawa Botol Minum Pribadi</h1>
                                <div class="ml-4 mt-[12px]">
                                    <p class="text-[20px]">Selama berada di MARKAS, para pengunjung diwajibkan untuk
                                        membawa botol minum pribadi yang dapat diisi ulang dengan dispenser yang
                                        tersedia dibeberapa titik.</p>
                                </div>
                            </div>
                            <div class="mb-[35px]">
                                <h1 class="font-semibold text-[22px]">1. Membawa Botol Minum Pribadi</h1>
                                <div class="ml-4 mt-[12px]">
                                    <p class="text-[20px]">Selama berada di MARKAS, para pengunjung diwajibkan untuk
                                        membawa botol minum pribadi yang dapat diisi ulang dengan dispenser yang
                                        tersedia dibeberapa titik.</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="mb-[35px]">
                                <h1 class="font-semibold text-[22px]">1. Membawa Botol Minum Pribadi</h1>
                                <div class="ml-4 mt-[12px]">
                                    <p class="text-[20px]">Selama berada di MARKAS, para pengunjung diwajibkan untuk
                                        membawa botol minum pribadi yang dapat diisi ulang dengan dispenser yang
                                        tersedia dibeberapa titik.</p>
                                </div>
                            </div>
                            <div class="mb-[35px]">
                                <h1 class="font-semibold text-[22px]">1. Membawa Botol Minum Pribadi</h1>
                                <div class="ml-4 mt-[12px]">
                                    <p class="text-[20px]">Selama berada di MARKAS, para pengunjung diwajibkan untuk
                                        membawa botol minum pribadi yang dapat diisi ulang dengan dispenser yang
                                        tersedia dibeberapa titik.</p>
                                </div>
                            </div>
                            <div class="mb-[35px]">
                                <h1 class="font-semibold text-[22px]">1. Membawa Botol Minum Pribadi</h1>
                                <div class="ml-4 mt-[12px]">
                                    <p class="text-[20px]">Selama berada di MARKAS, para pengunjung diwajibkan untuk
                                        membawa botol minum pribadi yang dapat diisi ulang dengan dispenser yang
                                        tersedia dibeberapa titik.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            {{-- Hal yang diperhatikan --}}


        </div>

    </div>
