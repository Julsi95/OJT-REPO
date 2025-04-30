<x-layout>
        
    <x-carousel />
    <div class="grid text-center gap-3 px-4 lg:flex lg:justify-around lg:items-center bg-[#316275] py-5 lg:py-10 text-white">
        <div class="lg:text-3xl font-bold italic">Celebrating 3 Years of Trusted Service</div>
        <x-button href="/contacts" label="Contact us now!" class="lg:text-xl font-bold" cyan />
    </div>
    <section
        x-data="{ show: false }" 
        x-init="window.addEventListener('scroll', () => { if (window.scrollY > 200) show = true })"
        x-bind:class="show ? 'lg:opacity-100 lg:translate-y-0' : 'lg:opacity-0 lg:translate-y-10'"
        class="transition-all duration-700 ease-in-out">
        <div class="grid lg:grid-cols-2 items-center p-5 lg:p-10 space-y-7">
            <div class=" flex items-center justify-center">
                <div class="space-y-4 lg:space-y-6 lg:px-7 ">
                    <h1 class="text-3xl lg:text-5xl 2xl:text-6xl font-bold text-[#316275]" style="line-height: 1.3 !important;">Advance Medical Equipment Solutions</h1>
                    <p class="text-[#316275] lg:text-balance">Providing cutting edge medical equpments and technology to healthcare facilities worldwide Quality, reliability and innovation in healthcare solutions</p>
                    <button class="bg-[#316275] text-white px-2 py-1 rounded-lg 2xl:px-4 2xl:py-2 flex items-center gap-2">Make an appointment <x-icon name="arrow-right" /></button>
                </div>
            </div>
            <div class="lg:px-7">
                <img class="lg:mx-auto rounded-xl w-full lg:w-[500px] xl:w-[850px]" src="https://www.amnhealthcare.com/siteassets/candidate-blog/allied/travel/medtech-1200x628.jpg" alt="">
            </div>
        </div>
        <div class="grid lg:grid-cols-2 items-center mb-5 p-5 lg:p-10 lg:space-y-7">
            <div class="lg:px-7 hidden lg:block">
                <img class="lg:mx-auto rounded-xl w-full lg:w-[500px] xl:w-[850px]" src="https://img.freepik.com/free-photo/overhead-view-medical-equipments-blue-backdrop_23-2147874887.jpg?t=st=1740293039~exp=1740296639~hmac=0af1351f7d3d64c58daebffb5f8a0f1271e3333cb21ccc17a485466375f60cfa&w=1060" alt="">
            </div>
            <div class=" flex items-center justify-center">
                <div class="space-y-4 lg:space-y-6 lg:px-7 ">
                    <h1 class="text-3xl lg:text-5xl 2xl:text-6xl font-bold text-[#316275]" style="line-height: 1.3 !important;">Trusted by Thousands. Driven by Quality. Commited to Care.</h1>
                    <div class="grid grid-cols-2 gap-5 text-[#316275]">
                        <div>
                            <h1 class="text-2xl font-bold">999+</h1>
                            <p>Products Delivered</p>
                        </div>
                        <div>
                            <h1 class="text-2xl font-bold">5+</h1>
                            <p>Years Experience</p>
                        </div>
                        <div>
                            <h1 class="text-2xl font-bold">500+</h1>
                            <p>Healthcare Partners</p>
                        </div>
                        <div>
                            <h1 class="text-2xl font-bold">100%</h1>
                            <p>Government Trusted</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
    <section
        x-data="{ show2: false }" 
        x-init="window.addEventListener('scroll', () => { if (window.scrollY > 900) show2 = true })"
        x-bind:class="show2 ? 'lg:opacity-100 lg:translate-y-0' : 'lg:opacity-0 lg:translate-y-10'"
        class="transition-all duration-700 ease-in-out">
        <div class="lg:px-10 text-center space-y-4 py-10 bg-[#316275] uppercase text-white  border-[5px] border-white">
            <div class="text-4xl font-bold">WHY CHOOSE US</div>
            <div class="lg:mx-[80px] grid grid-cols-2 lg:flex lg:items-center lg:justify-around ">
                <div class="flex justify-center items-center flex-col text-balance text-center">
                    <img width="100px" src="{{ asset('images/trust.png') }}" alt="">
                    <h1 class="text-lg font-bold">Trusted Quality & Safety</h1>
                    <p class="text-xs">All our equipment meets international medical standards (FDA, CE certified), ensuring safety and reliability in every use.</p>
                </div>
                <div class="flex justify-center items-center flex-col text-balance text-center">
                    <img width="100px" src="{{ asset('images/hospital.png') }}" alt="">
                    <h1 class="text-lg font-bold">Expertise You Can Count On</h1>
                    <p class="text-xs">With over 3 years in the healthcare industry, we understand the needs of hospitals, clinics, and practitioners.</p>
                </div>
                <div class="flex justify-center items-center flex-col text-balance text-center">
                    <img width="100px" src="{{ asset('images/rate.png') }}" alt="">
                    <h1 class="text-lg font-bold">Wide Product Range</h1>
                    <p class="text-xs">From diagnostic tools to surgical instruments, we provide a one-stop solution for all your medical equipment needs.</p>
                </div>
                <div class="flex justify-center items-center flex-col text-balance text-center">
                    <img width="100px" src="{{ asset('images/fast-delivery.png') }}" alt="">
                    <h1 class="text-lg font-bold">Fast & Reliable Delivery</h1>
                    <p class="text-xs">With a strong logistics network, we ensure timely delivery across regions.</p>
                </div>
            </div>
        </div>
        <div class="py-10 px-5 space-y-10">
            <h1 class="text-4xl font-bold text-center text-[#316275]">SERVICES WE OFFERED</h1>
            <div class="mx-auto grid lg:grid-cols-2 gap-5 gap-x-10 max-w-6xl ">
                <div class="flex gap-5">
                    <img class="border-[2px] border-[#316275] rounded-lg w-[110px] h-[110px]"  src="{{ asset('images/maintenance.png') }}" alt="">
                    <div>
                        <h2 class="uppercase text-[#316275] font-bold">Installation of Medical Equipment</h2>
                        <p class="text-sm">We install all medical equipment professionally, ensuring it’s set up safely, correctly, and ready to use.</p>
                    </div>
                </div>
                <div class="flex gap-5">
                    <img class="border-[2px] border-[#316275] rounded-lg w-[110px] h-[110px]" src="{{ asset('images/mechanic.png') }}" alt="">
                    <div>
                        <h2 class="uppercase text-[#316275] font-bold">Repair & Technical Support</h2>
                        <p class="text-sm">On-site and remote troubleshooting by certified biomedical engineers.</p>
                    </div>
                </div>
                <div class="flex gap-5">
                    <img class="border-[2px] border-[#316275] rounded-lg w-[110px] h-[110px]" src="{{ asset('images/demonstration.png') }}" alt="">
                    <div>
                        <h2 class="uppercase text-[#316275] font-bold">User Training & Demonstration</h2>
                        <p class="text-sm">Hands-on training for healthcare staff to ensure safe and effective equipment usage.</p>
                    </div>
                </div>
                <!-- <div class="flex gap-5">
                    <img class="border-[2px] border-[#316275] rounded-lg w-[110px] h-[110px]" src="{{ asset('images/rate.png') }}" alt="">
                    <div>
                        <h2 class="uppercase text-[#316275] font-bold">Installation</h2>
                        <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab obcaecati ad rem eos soluta ea cumque sapiente dignissimos 
                            reiciendis. Quo vero doloremque vitae, id perferendis exercitationem consequatur consectetur similique voluptatum.</p>
                    </div>
                </div>
                <div class="flex gap-5">
                    <img class="border-[2px] border-[#316275] rounded-lg w-[110px] h-[110px]" src="{{ asset('images/rate.png') }}" alt="">
                    <div>
                        <h2 class="uppercase text-[#316275] font-bold">Installation</h2>
                        <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab obcaecati ad rem eos soluta ea cumque sapiente dignissimos 
                            reiciendis. Quo vero doloremque vitae, id perferendis exercitationem consequatur consectetur similique voluptatum.</p>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
</x-layout>