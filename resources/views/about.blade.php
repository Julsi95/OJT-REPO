<x-layout>
    <div class="grid grid-cols-1 justify-around items-center gap-10 w-full">
        <div class="flex justify-center items-center mt-5 px-5 lg:mt-auto lg:p-10">
            <div class="grid lg:grid-cols-2 gap-20 w-full mx-10 ">
                <div class="space-y-5 mt-12">
                    <div class="text-4xl lg:text-6xl font-bold text-[#316275]">Company Overview</div>
                    <p>Founded in late 2021, JCOR MEDICAL EQUIPMENT AND SUPPLIES TRADING has set out itself to bring affordable, and high-quality products and services to remote locations.</p>
                    <p>We believe in the power of collaboration and are proud to partner with healthcare providers to improve patient care. We are dedicated to making a difference in the medical community, one product at a time.</p>
                </div>
                <div x-data="{ show2: window.scrollY < 500 }" 
                     x-init="window.addEventListener('scroll', () => { show2 = window.scrollY < 500 })"
                     x-bind:class="show2 ? 'opacity-100 scale-100' : 'opacity-0 scale-90'"
                     class="rounded-lg shadow-lg w-[75%] h-[400px] object-cover transition-all duration-700 ease-in-out"
                     style="background-image: url('{{ asset('images/IMG-1.webp') }}');">
                </div>
            </div>
        </div>
        
        <div class="flex justify-center items-center mt-10 px-5 lg:mt-auto lg:p-10">
            <div class="grid lg:grid-cols-2 gap-20 w-full mx-10">
                <div x-data="{ show2: window.scrollY < 900 }" 
                     x-init="window.addEventListener('scroll', () => { show2 = window.scrollY < 900 })"
                     x-bind:class="show2 ? 'opacity-100 scale-100' : 'opacity-0 scale-90'"
                     class="rounded-lg shadow-lg w-[75%] ml-20 h-[400px] object-cover  transition-all duration-700 ease-in-out"
                     style="background-image: url('{{ asset('images/IMG-2.webp') }}');">
                </div>
                <div class="space-y-5 mb-5 mt-10">
                    <div class="grid grid-cols-1 gap-y-10">
                        <div>
                            <h2 class="text-5xl text-[#316275] pb-2">Mission</h2>
                            <p class="pb-4">JCOR MEDICAL EQUIPMENT AND SUPPLIES TRADING is dedicated to ameliorating the lives of Filipinos by:</p>
                            <ul class="list-disc pl-5">
                                <li>Providing quality but affordable medical supplies and equipment to our partner hospitals, both public and private.</li>
                                <li class="py-2">Sparing no effort to reach even the farthest localities to deliver proper and quality service.</li>
                                <li>Upholding the trust and confidence bestowed upon by our health institutions and agencies.</li>
                            </ul>
                        </div>
                        <div>
                            <h2 class="text-5xl text-[#316275] pb-2">Vision</h2>
                            <p>To be an esteemed provider of state-of-the-art medical supplies and equipment throughout the Philippines by providing service of utmost quality and professionalism.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>
</x-layout>
