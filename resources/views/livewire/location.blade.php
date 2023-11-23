<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

<div class="relative w-full h-[6700px] font-lexendDeca">
    <div class="relative ">
        <img src="{{ asset('images/bg-paper.png') }}" class="z-0 w-full h-[6700px] inset-0 absolute" />
        <div class="relative z-10 px-28">
            <div class="pt-24 text-center">
                <h1 class="text-redMarkas text-3xl font-semibold mb-5 font-lexendPeta">
                    Booking
                </h1>
                <h1 class="text-black font-extrabold text-5xl font-lexendDeca">CARI MARKAS DI SEKITARMU!</h1>
            </div>

            {{-- coba --}}
            {{-- <div x-data="{ activeTab: 'tab-profile' }" class="flex flex-wrap" id="tabs-id">
                <div class="w-full">
                    <ul class="flex mb-0 list-none flex-wrap pt-3 pb-4 flex-row">
                        <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
                            <a @click="activeTab = 'tab-profile'" :class="{ 'text-white bg-pink-600': activeTab === 'tab-profile', 'text-pink-600 bg-white': activeTab !== 'tab-profile' }"
                                class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal cursor-pointer">
                                <i class="fas fa-space-shuttle text-base mr-1"></i> Profile
                            </a>
                        </li>
                        <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
                            <a @click="activeTab = 'tab-settings'" :class="{ 'text-white bg-pink-600': activeTab === 'tab-settings', 'text-pink-600 bg-white': activeTab !== 'tab-settings' }"
                                class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal cursor-pointer">
                                <i class="fas fa-cog text-base mr-1"></i> Settings
                            </a>
                        </li>
                        <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
                            <a @click="activeTab = 'tab-options'" :class="{ 'text-white bg-pink-600': activeTab === 'tab-options', 'text-pink-600 bg-white': activeTab !== 'tab-options' }"
                                class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal cursor-pointer">
                                <i class="fas fa-briefcase text-base mr-1"></i> Options
                            </a>
                        </li>
                    </ul>
                    <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded">
                        <div class="px-4 py-5 flex-auto">
                            <div x-show="activeTab === 'tab-profile'" class="block">
                                <p>
                                    Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate
                                    B2C users after installed base benefits.
                                    <br />
                                    <br />
                                    Dramatically visualize customer directed convergence without revolutionary ROI.
                                </p>
                            </div>
                            <div x-show="activeTab === 'tab-settings'" class="block">
                                <p>
                                    Completely synergize resource taxing relationships via premier niche markets. Professionally
                                    cultivate one-to-one customer service with robust ideas.
                                    <br />
                                    <br />
                                    Dynamically innovate resource-leveling customer service for state of the art customer service.
                                </p>
                            </div>
                            <div x-show="activeTab === 'tab-options'" class="block">
                                <p>
                                    Efficiently unleash cross-media information without cross-media value. Quickly maximize timely
                                    deliverables for real-time schemas.
                                    <br />
                                    <br />
                                    Dramatically maintain clicks-and-mortar solutions without functional solutions.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

            {{-- coba --}}



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
                <ul
                    class="flex p-2.5 flex-wrap text-sm font-medium text-center text-gray-500 dark:text-gray-400 relative z-10">
                    <li class="flex-1 me-2 flex items-center justify-center">
                        <a href="#" @click.prevent="activeTab = 'surabaya'"
                            :class="{ 'text-white bg-redMarkas': activeTab === 'surabaya', 'hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-white': activeTab !== 'surabaya' }"
                            class="inline-block w-full h-[78px] px-4 py-7 rounded-[100px] active"
                            aria-current="page">Surabaya</a>
                    </li>
                    <li class="flex-1 me-2 flex items-center justify-center">
                        <a href="#" @click.prevent="activeTab = 'jakarta'"
                            :class="{ 'text-white bg-redMarkas': activeTab === 'jakarta', 'hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-white': activeTab !== 'jakarta' }"
                            class="inline-block w-full h-[78px] px-4 py-7 rounded-[100px]">Jakarta</a>
                    </li>
                    <li class="flex-1 me-2 flex items-center justify-center">
                        <a href="#" @click.prevent="activeTab = 'bandung'"
                            :class="{ 'text-white bg-redMarkas': activeTab === 'bandung', 'hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-white': activeTab !== 'bandung' }"
                            class="inline-block w-full h-[78px] px-4 py-7 rounded-[100px]">Bandung</a>
                    </li>
                    <li class="flex-1 me-2 flex items-center justify-center">
                        <a href="#" @click.prevent="activeTab = 'denpasar'"
                            :class="{ 'text-white bg-redMarkas': activeTab === 'denpasar', 'hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-white': activeTab !== 'denpasar' }"
                            class="inline-block w-full h-[78px] px-4 py-7 rounded-[100px]">Denpasar</a>
                    </li>
                </ul>
                <div class="">
                    <div class="">
                        <div x-show="activeTab === 'surabaya'" class="block">
                            @include('livewire.location.surabaya')
                        </div>
                        <div x-show="activeTab === 'jakarta'" class="block">
                            @include('livewire.location.jakarta')
                        </div>
                        <div x-show="activeTab === 'bandung'" class="block">
                            @include('livewire.location.bandung')
                        </div>
                        <div x-show="activeTab === 'denpasar'" class="block">
                            @include('livewire.location.denpasar')
                        </div>

                    </div>
                </div>
            </div>

            {{-- Tab Section --}}





        </div>
    </div>
