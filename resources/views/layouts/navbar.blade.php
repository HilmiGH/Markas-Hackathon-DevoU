<nav id="navbar"
    class="fixed top-0 bg-white h-28 w-full items-center flex z-50 transition-all duration-200 ease-in-out">
    <image id="navbar" src="{{ asset('images/bg-paper.png') }}" class="h-28 w-full -z-10 absolute" />
    <div class="flex flex-row w-screen justify-between items-center text-redMarkas px-20">
        <a class="font-semibold leading-none text-[32px] font-lexendPeta" href="/">
            MARKAS
        </a>
        <div>
            <ul class="flex w-full flex-row gap-x-6 text-[22px] leading-none items-center font-light font-lexendDeca">
                <li><a class="hover:brightness-75 transition-all duration-200 whitespace-nowrap" href="/">Home</a>
                </li>
                <li><a class="hover:brightness-75 transition-all duration-200 whitespace-nowrap" href="/about">About</a>
                </li>
                <li><a class="hover:brightness-75 transition-all duration-200 whitespace-nowrap" href="/about#philosophy">Philosophy</a>
                </li>
                <li><a class="hover:brightness-75 transition-all duration-200 whitespace-nowrap"
                        href="/events">Events</a></li>
                <li><a class="hover:brightness-75 transition-all duration-200 whitespace-nowrap"
                        href="/booking">Booking</a>
                </li>
                <li><a class="hover:brightness-75 transition-all duration-200 whitespace-nowrap"
                        href="#">Contact
                        Us</a></li>
            </ul>
        </div>
    </div>
</nav>

<script>
    function handleScroll() {
        const navbars = document.querySelectorAll('#navbar');
        navbars.forEach(navbar => {
            navbar.style.height = (window.scrollY === 0) ? '112px' : '80px';
        });
    }

    window.addEventListener('scroll', handleScroll);
</script>
