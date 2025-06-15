<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="icon" type="image/png" href="{{ asset('images/jcorr.png') }}">
    <title>
        Jcor
    </title>
    <wireui:scripts />
    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  
</head>
<body>

    <div class=" ">
    <div class=" bg-[#316275] w-full flex justify-end gap-4 px-10 py-1 lg:py-3 text-white font-serif">
        <div class="flex justify-center items-center gap-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 24 24">
                <path fill="currentColor" d="M20 12a8 8 0 1 1-16 0a8 8 0 0 1 16 0m-8 10c5.523 0 10-4.477 10-10S17.523 2 12 2S2 6.477 2 12s4.477 10 10 10m.358-12.618q-1.458.607-5.831 2.513q-.711.282-.744.552c-.038.304.343.424.862.587l.218.07c.51.166 1.198.36 1.555.368q.486.01 1.084-.4q4.086-2.76 4.218-2.789c.063-.014.149-.032.207.02c.059.052.053.15.047.177c-.038.161-1.534 1.552-2.308 2.271q-.344.324-.683.653c-.474.457-.83.8.02 1.36c.861.568 1.73 1.134 2.57 1.733c.414.296.786.56 1.246.519c.267-.025.543-.276.683-1.026c.332-1.77.983-5.608 1.133-7.19a1.8 1.8 0 0 0-.017-.393a.42.42 0 0 0-.142-.27c-.12-.098-.305-.118-.387-.117c-.376.007-.953.207-3.73 1.362" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 24 24">
                <g fill="none" fill-rule="evenodd">
                    <path d="m12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035q-.016-.005-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093q.019.005.029-.008l.004-.014l-.034-.614q-.005-.018-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z" />
                    <path fill="currentColor" d="M4 12a8 8 0 1 1 9 7.938V14h2a1 1 0 1 0 0-2h-2v-2a1 1 0 0 1 1-1h.5a1 1 0 1 0 0-2H14a3 3 0 0 0-3 3v2H9a1 1 0 1 0 0 2h2v5.938A8 8 0 0 1 4 12m8 10c5.523 0 10-4.477 10-10S17.523 2 12 2S2 6.477 2 12s4.477 10 10 10" />
                </g>
            </svg>
        </div>
        <div class="flex justify-center items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                <path fill="currentColor" d="M4 20q-.825 0-1.412-.587T2 18V6q0-.825.588-1.412T4 4h16q.825 0 1.413.588T22 6v12q0 .825-.587 1.413T20 20zm8-7L4 8v10h16V8zm0-2l8-5H4zM4 8V6v12z" />
            </svg>
            <span>jcormedical@gmail.com</span>
        </div>
    </div>
        <nav class="hidden lg:grid lg:grid-cols-3   px-10 sticky top-0 z-50 bg-white shadow-md">
            <div class="pl-10 py-3 flex items-center gap-3 max-w-[400px]">
                <img width="60px" src="{{ asset('images/jcorr.png') }}" alt="">
                <div class=" min-h-[1em] w-px self-stretch bg-gradient-to-tr from-transparent via-neutral-500 to-transparent opacity-25 dark:via-neutral-400"></div>
                <div class="text-2xl font-bold leading-5 text-[#316275] font-serif">JCOR MEDICAL EQUIPMENT</div> 
                {{-- <div class="text-xl font-bold leading-5 text-[#316275] ">JCOR MEDICAL EQUIPMENT</div> --}}
            </div>
            <div class="px-10 flex items-center gap-10 text-[#316275] font-bold text-xl">
                <a wire:navigate href="/" class="{{ Request::is('/') ? 'text-[#316275] font-bold underline' : 'text-gray-700 hover:text-[#316275]' }}">HOME</a>
                <a wire:navigate href="/about" class="{{ Request::is('about') ? 'text-[#316275] font-bold underline' : 'text-gray-700 hover:text-[#316275]' }}">ABOUT</a>
                <a wire:navigate href="/service" class="{{ Request::is('service') ? 'text-[#316275] font-bold underline' : 'text-gray-700 hover:text-[#316275]' }}">SERVICES</a>
                <a wire:navigate href="/partners" class="{{ Request::is('partners') ? 'text-[#316275] font-bold underline' : 'text-gray-700 hover:text-[#316275]' }}">PARTNERS</a>
                <a wire:navigate href="/contacts" class="{{ Request::is('contacts') ? 'text-[#316275] font-bold underline' : 'text-gray-700 hover:text-[#316275]' }}">CONTACTS</a>
                {{-- <a wire:navigate href="/products" class="{{ Request::is('products') ? 'text-[#316275] font-bold underline' : 'text-gray-700 hover:text-[#316275]' }}">PRODUCT</a> --}}
            </div>
        </nav>
        <nav class="flex justify-between items-center lg:hidden py-3 px-2 sticky top-0 z-20 bg-white shadow-md relative" x-data="{navb: false}">
            <div class="py-1 flex items-center gap-2 max-w-[300px]">
                <img width="35px" src="{{ asset('images/jcorr.png') }}" alt="">
                <div class=" min-h-[1em] w-px self-stretch bg-gradient-to-tr from-transparent via-neutral-500 to-transparent opacity-25 dark:via-neutral-400"></div>
                <div class="text-lg font-bold leading-5 text-[#316275] font-serif">JCOR MEDICAL EQUIPMENT INC.</div>
            </div>
            <button><x-icon @click="navb = true" @click.away="navb = false" name="bars-3" /></button>
            <div class="fixed right-0 top-28 bg-blue-300 text-white px-3 py-2 w-full grid gap-3" x-cloak x-show="navb">
                <a href="/">Home</a>
                <a href="/about">About</a>
                <a href="/service">Services</a>
                <a href="/partners">Partners</a>
                <a href="/contacts">Contact</a>
            </div>
        </nav>
        
        
        
        {{ $slot }}
    </div>
    {{-- FOOTER --}}
    <div class="bg-black  text-white flex flex-col items-center justify-center space-y-8">
        <div class="py-1 flex items-center gap-2 max-w-[340px] pt-8">
            <img width="85px" src="{{ asset('images/jcorr.png') }}" alt="">
            <div class=" min-h-[1em] w-px self-stretch bg-gradient-to-tr from-transparent via-red-500 to-transparent opacity-25 "></div>
            <div class="text-2xl font-bold leading-5 text-[#316275] font-serif">JCOR MEDICAL EQUIPMENT</div>
        </div>
        <div class="grid grid-cols-2 lg:grid-cols-3 gap-10 px-10">
        <div>
            <h1 class="text-3xl">About Us</h1>
            <p class="text-xs">
                JCOR MEDICAL EQUIPMENT AND SUPPLIES TRADING provides high-quality medical supplies, devices, and equipment.  
                We ensure healthcare facilities access the latest technology with expert installation and support.  
                Committed to innovation and reliability, we enhance patient care with top-tier products and service.
            </p>
        </div>


            <div class="space-y-2">
                <h1 class="text-3xl">Contact Us</h1>
                <div class="inline-flex gap-1">
                    <x-icon class="w-10" name="map-pin" solid color="red"/>
                    <p class="text-xs text-balance">Uncle John's-ONE JOROMA PLACE, GF, BRGY, ONE JOROMA PLACE BLDG. AVE, COR San Beda Rd, Project 8, Quezon City, 1106 Metro Manila</p>
                </div>
                <div class="flex">
                    <x-icon class="w-10" name="phone-arrow-down-left" solid color="red"/>
                    <p class="text-xs text-balance">09626917530</p>
                </div>
                <div class="flex">
                    <x-icon class="w-10" name="envelope" solid color="red"/>
                    <p class="text-xs text-balance">jcormedical@gmail.com</p>
                </div>
            </div>
            <div class="flex gap-5 lg:block">
                <h1 class="text-3xl mb-2">Social Media</h1>
                <div class="flex items-center gap-6 justify-start ">
                        <a href="https://www.facebook.com/profile.php?id=61567948601041" target="_blank" rel="noopener noreferrer">
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M20.9 2H3.1A1.1 1.1 0 0 0 2 3.1v17.8A1.1 1.1 0 0 0 3.1 22h9.58v-7.75h-2.6v-3h2.6V9a3.64 3.64 0 0 1 3.88-4a20 20 0 0 1 2.33.12v2.7H17.3c-1.26 0-1.5.6-1.5 1.47v1.93h3l-.39 3H15.8V22h5.1a1.1 1.1 0 0 0 1.1-1.1V3.1A1.1 1.1 0 0 0 20.9 2"/>
                            </svg>
                        </button>
                    </a>

                    
                    <a href="https://www.instagram.com" target="_blank">
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24">
                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <rect width="20" height="20" x="2" y="2" rx="5" ry="5" />
                                    <path d="M16 11.37A4 4 0 1 1 12.63 8A4 4 0 0 1 16 11.37m1.5-4.87h.01" />
                                </g>
                            </svg>
                        </button>
                    </a>
                    
                    <a href="https://mail.google.com/mail/?view=cm&fs=1&to=jcormedical@gmail.com" target="_blank">
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M20 18h-2V9.25L12 13L6 9.25V18H4V6h1.2l6.8 4.25L18.8 6H20m0-2H4c-1.11 0-2 .89-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2" />
                            </svg>
                        </button>
                    </a>
                </div>
             </div>

        </div>
        
    </div>
    @livewireScripts
</body>
</html>