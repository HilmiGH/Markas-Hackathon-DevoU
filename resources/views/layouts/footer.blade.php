<footer class="flex flex-col bg-redMarkas px-20 font-lexendMega mt-96">
    <div class="relative h-[560px] w-full -translate-y-32 z-50 overflow-hidden">
        <image src="{{ asset('images/bg-paper.png') }}"
            class="z-10 h-[560px] inset-0 w-full rounded-[25px] border-[3px] border-black absolute" />
        <image src="{{ asset('images/footer-logo.png') }}" class="z-10 -right-24 -bottom-24 w-[40%] absolute" />
        <div class="relative z-10 pl-12 pr-28 py-14 flex flex-row justify-between w-full">
            <div class="flex flex-col">
                <h1 class="font-bold leading-none text-[40px] text-redMarkas font-lexendPeta">
                    MARKAS
                </h1>
                <p class="mt-4 max-w-sm font-lexendDeca">MARKAS adalah tempat kolaborasi atau yang lebih dikenal dengan
                    space yang
                    bertujuan menjadi wadah tempat masyarakat melakukan perintisan Startup di kota-kota seluruh
                    Indonesia maupun tempat belajar bagi para peminat teknologi perusahaan digital.</p>
                <div class="flex flex-col items-start mt-12 gap-3">
                    <a href="" class="flex flex-row items-center font-semibold group">
                        <x-bi-instagram class="w-[36px] h-[36px] mr-2" />Instagram
                        <x-heroicon-s-arrow-up-right
                            class="w-6 h-4 ml-4 transition-all duration-200 ease-in-out mt-1 group-hover:-translate-y-1 group-hover:translate-x-1" />
                    </a>
                    <a href="" class="flex flex-row items-center font-semibold group">
                        <x-bi-youtube class="w-[36px] h-[36px] mr-2" />Youtube
                        <x-heroicon-s-arrow-up-right
                            class="w-6 h-4 ml-10 transition-all duration-200 ease-in-out mt-1 group-hover:-translate-y-1 group-hover:translate-x-1" />
                    </a>
                </div>
            </div>
            <div class="flex flex-col uppercase">
                <h1 class="text-[22px] leading-none text-redMarkas font-light font-lexendDeca">
                    Regional
                </h1>
                <div class="mt-8 flex flex-col gap-y-7  font-semibold text-2xl">
                    <a href="">Surabaya</a>
                    <a href="">Jakarta</a>
                    <a href="">Bandung</a>
                    <a href="">Denpasar</a>
                </div>
            </div>
            <div class="flex flex-col uppercase">
                <h1 class="text-[22px] leading-none text-redMarkas font-light font-lexendDeca">
                    Contact Us
                </h1>
                <div class="mt-8 flex flex-col gap-y-7 font-semibold text-2xl">
                    <a href="">Booking</a>
                    <a href="">Faq</a>
                </div>
            </div>
            <div class="flex flex-col uppercase">
                <h1 class="text-[22px] leading-none text-redMarkas font-light font-lexendDeca">
                    About
                </h1>
                <div class="mt-8 flex flex-col gap-y-7 font-semibold text-2xl">
                    <a href="">Philosophy</a>
                    <a href="">Events</a>
                    <a href="">Credits</a>
                </div>
            </div>

        </div>
    </div>
</footer>