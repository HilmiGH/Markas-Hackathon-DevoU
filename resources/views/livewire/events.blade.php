@section('title', 'MARKAS | EVENTS')
<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

<div class="relative w-full h-[3000px] font-lexendDeca">
    <div class="relative ">
        <img src="{{ asset('images/bg-paper.png') }}" class="z-0 w-full h-[3000px] inset-0 absolute" />
        <div class="relative z-10 px-28">
            <div class="pt-24 text-center">
                <h1 class="text-redMarkas text-3xl font-semibold mb-5 font-lexendPeta">
                    EVENT
                </h1>
                <h1 class="text-black font-extrabold text-5xl font-lexendDeca">IKUTI KEGIATAN DIMARKAS</h1>
            </div>

            {{-- search --}}
            <div class="mt-24 ">
                <form>
                    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only ">Search</label>
                    <div class="relative">
                        <input type="search" id="default-search"
                            class="block w-full h-24 p-4 ps-10  text-gray-900  rounded-[100px] bg-gray-50 font-light text-2xl placeholder-gray-400  drop-shadow-lg"
                            placeholder="Cari event yang ada di MARKAS Surabaya" required>
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
                            class="inline-block w-full h-[78px] px-4 py-7 rounded-[100px] active text-[20px] font-semibold"
                            aria-current="page">
                            Kegiatan Hari ini
                        </a>

                    </li>
                    <li class="flex-1 me-2 flex items-center justify-center">
                        <a href="#" @click.prevent="activeTab = 'jakarta'"
                            :class="{ 'text-white bg-redMarkas': activeTab === 'jakarta', 'hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-white': activeTab !== 'jakarta' }"
                            class="inline-block w-full h-[78px] px-4 py-7 text-[20px] font-semibold rounded-[100px]">Minggu
                            ini</a>
                    </li>
                    <li class="flex-1 me-2 flex items-center justify-center">
                        <a href="#" @click.prevent="activeTab = 'bandung'"
                            :class="{ 'text-white bg-redMarkas': activeTab === 'bandung', 'hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-white': activeTab !== 'bandung' }"
                            class="inline-block w-full h-[78px] px-4 py-7 text-[20px] font-semibold rounded-[100px]">Meeting</a>
                    </li>
                    <li class="flex-1 me-2 flex items-center justify-center">
                        <a href="#" @click.prevent="activeTab = 'denpasar'"
                            :class="{ 'text-white bg-redMarkas': activeTab === 'denpasar', 'hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-white': activeTab !== 'denpasar' }"
                            class="inline-block w-full h-[78px] px-4 py-7 text-[20px] font-semibold rounded-[100px]">Workshop</a>
                    </li>
                    <li class="flex-1 me-2 flex items-center justify-center">
                        <a href="#" @click.prevent="activeTab = 'talkshow'"
                            :class="{ 'text-white bg-redMarkas': activeTab === 'talkshow', 'hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-white': activeTab !== 'talkshow' }"
                            class="inline-block w-full h-[78px] px-4 py-7 text-[20px] font-semibold rounded-[100px]">Talkshow</a>
                    </li>
                </ul>
                <div class="">
                    <div class="">
                        <div x-show="activeTab === 'surabaya'" class="block">
                            @include('livewire.events.hariIni')
                        </div>
                        <div x-show="activeTab === 'jakarta'" class="block">
                            @include('livewire.events.mingguIni')
                        </div>
                        <div x-show="activeTab === 'bandung'" class="block">
                            @include('livewire.events.meeting')
                        </div>
                        <div x-show="activeTab === 'denpasar'" class="block">
                            @include('livewire.events.workshop')
                        </div>
                        <div x-show="activeTab === 'talkshow'" class="block">
                            @include('livewire.events.talkshow')
                        </div>

                    </div>
                </div>
            </div>
            {{-- Tab Section --}}

            {{-- Mari Berkolaborasi - --}}
            <div class=" mt-[207px]">
                <h1 class="text-redMarkas font-extrabold text-[48px] text-center">MARI BERKOLABORASI</h1>
                <div class="flex justify-center items-center mt-12">
                    <a href="/booking"
                        class="bg-redMarkas text-white px-[104px] py-4 font-semibold text-[28px] rounded-[110px] hover:opacity-80">
                        Booking
                    </a>
                </div>
            </div>
            {{-- Mari Berkolaborasi - --}}


        </div>

            
    </div>
