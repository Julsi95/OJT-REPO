<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <wireui:scripts />
    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class=" ">
        <nav class="hidden lg:flex justify-between items-center px-10 sticky top-0 z-50 bg-white shadow-md">
            <div class="pl-10 py-3 flex items-center gap-3 max-w-[400px]">
                <img width="60px" src="{{ asset('images/jcorr.png') }}" alt="">
                <div class=" min-h-[1em] w-px self-stretch bg-gradient-to-tr from-transparent via-neutral-500 to-transparent opacity-25 dark:via-neutral-400"></div>
                {{-- <div class="text-2xl font-bold leading-5 text-[#316275] font-serif">JCOR MEDICAL EQUIPMENT</div> --}}
                {{-- <div class="text-xl font-bold leading-5 text-[#316275] ">JCOR MEDICAL EQUIPMENT</div> --}}
            </div>
            <div class="px-10 flex items-center gap-10 text-[#316275] font-bold">
                <a wire:navigate href="/" class="{{ Request::is('/') ? 'text-[#316275] font-bold underline' : 'text-gray-700 hover:text-[#316275]' }}">HOME</a>
                <a wire:navigate href="/about" class="{{ Request::is('about') ? 'text-[#316275] font-bold underline' : 'text-gray-700 hover:text-[#316275]' }}">ABOUT</a>
                <a wire:navigate href="/service" class="{{ Request::is('service') ? 'text-[#316275] font-bold underline' : 'text-gray-700 hover:text-[#316275]' }}">SERVICES</a>
                <a wire:navigate href="/partners" class="{{ Request::is('partners') ? 'text-[#316275] font-bold underline' : 'text-gray-700 hover:text-[#316275]' }}">PARTNERS</a>
                <a wire:navigate href="/contacts" class="{{ Request::is('contacts') ? 'text-[#316275] font-bold underline' : 'text-gray-700 hover:text-[#316275]' }}">CONTACTS</a>
            </div>
        </nav>
        <nav class="flex justify-between items-center lg:hidden py-3 px-2 sticky top-0 z-20 bg-white shadow-md">
            <div class="py-1 flex items-center gap-2 max-w-[300px]">
                <img width="35px" src="{{ asset('images/jcorr.png') }}" alt="">
                <div class=" min-h-[1em] w-px self-stretch bg-gradient-to-tr from-transparent via-neutral-500 to-transparent opacity-25 dark:via-neutral-400"></div>
                <div class="text-lg font-bold leading-5 text-[#316275] font-serif">JCOR MEDICAL EQUIPMENT INC.</div>
            </div>
            <x-icon name="bars-3" />
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
        <div class="bg-[#316275] w-full text-center py-2">© Copyright 2025 | JCOR MEDICAL EQUIPMENT INC. | ® All Rights Reserved 2025</div>
    </div>
    @livewireScripts
</body>
</html>