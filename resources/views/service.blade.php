<x-layout>
   <div class=" bg-[#32657a] text-white" >
        <div class="flex justify-between p-20 items-center" >
            <p class="font-bold text-2xl">SERVICES WE OFFER</p>
             <img src="{{ asset('images/jcorr.png') }}" alt="" class="bg-white w-[96px] rounded-lg p-2">
        </div>
        <div class="flex overflow-auto  scrollbar-hide" id="serviceScroll">
            <p class="absolute font-bold text-[150px] w-[50%] translate-x-2/4  text-[#6fabc3] z-0">Services We Offer</p>
            <div class="min-w-full  flex flex-col  items-end z-[10] px-20 ">
                <h1 class="font-bold text-7xl max-w-[40%] text-end leading-[99px] my-5">
                    Equipment Installation
                </h1>
                <p class="text-end max-w-[75%] text-2xl my-5 ">
                    "As the bewildered platypus meandered aimlessly through the labyrinthine corridors of the abandoned, ivy-covered mansion that smelled faintly of old   parchment and forgotten memories, an inexplicable sense of déjà vu washed over   it, as if in some peculiar, alternate timeline, it had once been the keeper of an    ancient, mystical artifact capable of unlocking the long-lost secrets of a civilization   that had vanished without a trace, leaving only cryptic symbols etched into the stone walls, whispering tales of a forgotten past to those who dared to listen."
                </p>
            </div>
            <div class="min-w-full  flex flex-col  items-end z-[10] px-20">
                <h1 class="font-bold text-7xl max-w-[40%] text-end leading-[99px] my-5">
                    Equipment Installation
                </h1>
                <p class="text-end max-w-[70%] text-2xl my-5">
                    "As the bewildered platypus meandered aimlessly through the labyrinthine corridors of the abandoned, ivy-covered mansion that smelled faintly of old   parchment and forgotten memories, an inexplicable sense of déjà vu washed over   it, as if in some peculiar, alternate timeline, it had once been the keeper of an    ancient, mystical artifact capable of unlocking the long-lost secrets of a civilization   that had vanished without a trace, leaving only cryptic symbols etched into the stone walls, whispering tales of a forgotten past to those who dared to listen."
                </p>
            </div>
          
        </div>
        <div>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae distinctio ullam quasi. Corrupti, debitis! Adipisci esse id ea error aut quaerat fuga, velit optio. Error magnam eveniet odit est laudantium.
           </div>
   </div>
   <div class="grid lg:grid-cols-3 gap-7 py-7" x-data="{s: ''}">
    <div class="border-[1px] border-gray-300 rounded-xl p-5 flex flex-col justify-between gap-5" :class="s === 's1' ? 'h-auto' : 'h-[400px] lg:h-[505px]'">
        <img class="rounded-2xl max-h-[325px]" src="https://images.unsplash.com/photo-1631549916768-4119b2e5f926?q=80&w=2079&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
        <div class="space-y-10" >
            <div style="line-height: .9" class="text-3xl">High Quality Branded Medicine</div>
            <div @click.away="s = 's'" :class="s === 's1' ? 'transition-[height]'" class="space-y-5" x-show="s === 's1'">
                <p>We understand that when it comes to healthcare, quality is non-negotiable. Our extensive range of branded medicines is manufactured under strict regulatory guidelines and backed by scientific research. We prioritize</p>
                <ul class="text-sm font-medium space-y-2">
                    <li class="flex gap-2"><p>✅</p> <span>Certified Quality: Every product is tested for safety and effectiveness.</span></li>
                    <li class="flex gap-2"><p>✅</p> <span> Trusted Brands: Partnering with leading pharmaceutical companies to ensure authenticity.</span></li>
                    <li class="flex gap-2"><p>✅</p> <span> Global Standards: Complying with international regulations for superior healthcare solutions.</span></li>
                    <li class="flex gap-2"><p>✅</p> <span> Patient Safety First: Ensuring each medicine is reliable, effective, and meets healthcare needs.</span></li>
                </ul>
            </div>
            <button @click="s = 's1'">View Details</button>
        </div>
    </div>
    <div class="border-[1px] border-gray-300 rounded-xl p-5 flex flex-col justify-between gap-5" :class="s === 's2' ? 'h-auto duration-300 ease-in' : 'h-[400px] lg:h-[505px]'">
        <img class="rounded-2xl max-h-[325px]" src="https://images.unsplash.com/photo-1518152006812-edab29b069ac?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
        <div class="space-y-10" :class="s === 's2' ? 'h-auto' : 'h-[505px]'">
            <div style="line-height: .9" class="text-3xl">Supplying Best and Latest Medical Equipments</div>
            <div @click.away="s = 's'" :class="s === 's1' ? 'transition-[height]'" class="space-y-5" x-show="s === 's2'">
                <p>Equipped with the latest innovations, our medical equipment enhances patient care, improves diagnostic accuracy, and streamlines medical procedures. We provide</p>
                <ul class="text-sm font-medium space-y-2">
                    <li class="flex gap-2"><p>✅</p> <span> <strong> State-of-the-Art Technology:</strong> Access to the newest advancements in medical devices.</span></li>
                    <li class="flex gap-2"><p>✅</p> <span> <strong> Reliable & Certified Equipment:</strong> Meeting global healthcare standards for safety and efficiency.</span></li>
                    <li class="flex gap-2"><p>✅</p> <span> <strong> Wide Range of Solutions:</strong> From diagnostic tools to life-saving surgical instruments.</span></li>
                    <li class="flex gap-2"><p>✅</p> <span> <strong> Unmatched Customer Support:</strong> Ensuring seamless integration and ongoing assistance.</span></li>
                </ul>
            </div>
            <button @click="s = 's2'">View Details</button>
        </div>
    </div>
    <div class="border-[1px] border-gray-300 rounded-xl p-5 flex flex-col justify-between gap-5" :class="s === 's3' ? 'h-auto' : 'h-[400px] lg:h-[505px]'">
        <img class="rounded-2xl max-h-[325px]" src="https://media.istockphoto.com/id/1071110418/photo/ultrasonic-flaw-detector.jpg?s=2048x2048&w=is&k=20&c=4AnDpVytBqv-PmDziYKqndKgt6z-So1gUS8pSo7GuTo=" alt="">
        <div class="space-y-10" :class="s === 's3' ? 'h-auto' : 'h-[505px]'">
            <div  style="line-height: .9" class="text-3xl">Installation and Calibration of Medical Equipments </div>
            <div @click.away="s = 's'" :class="s === 's1' ? 'transition-[height]'" class="space-y-5" x-show="s === 's3'">
                <p>We specialize in the seamless setup and fine-tuning of a wide range of medical equipment, ensuring optimal performance from day one. Our services include</p>
                <ul class="text-sm font-medium space-y-2">
                    <li class="flex gap-2"><p>✅</p> <span> <strong> Expert Installation:</strong> Our trained professionals handle every step, from setup to integration.</span></li>
                    <li class="flex gap-2"><p>✅</p> <span> <strong> Precision Calibration:</strong> Regular adjustments to maintain accuracy and compliance.</span></li>
                    <li class="flex gap-2"><p>✅</p> <span> <strong> Regulatory Compliance:</strong> Ensuring all devices meet global healthcare and safety standards.</span></li>
                    <li class="flex gap-2"><p>✅</p> <span> <strong> Ongoing Support & Maintenance:</strong> Keeping your equipment in peak condition for long-term reliability.</span></li>
                </ul>
            </div>
            <button @click="s = 's3'">View Details</button>
        </div>
    </div>
</div>
</x-layout>






 {{-- <div class="bg-gray-100 p-6 rounded-lg shad grid grid-cols-2 gap-6 items-center w-full h-[60vh] px-10">
       
        <div class="p-4">
            <h2 class="text-3xl font-bold text-[#316275] mb-4">Services We Offer</h2>

          
            <div class="mb-4">
                <button class="bg-[#316275] text-white px-4 py-2 rounded-lg shadow-md w-full text-left flex justify-between items-center" onclick="toggleDropdown('service1')">
                    Offering High-Quality Medicine
                    <span id="icon-service1">▼</span>
                </button>
                <div id="service1" class="hidden mt-2 p-3 bg-white rounded-lg shadow-md">
                    We provide branded and generic medicines that meet the highest quality standards.
                </div>
            </div>

            
            <div class="mb-4">
                <button class="bg-[#316275] text-white px-4 py-2 rounded-lg shadow-md w-full text-left flex justify-between items-center" onclick="toggleDropdown('service2')">
                    Supplying Latest Medical Equipment
                    <span id="icon-service2">▼</span>
                </button>
                <div id="service2" class="hidden mt-2 p-3 bg-white rounded-lg shadow-md">
                    We supply state-of-the-art medical equipment across the nation, ensuring the best healthcare solutions.
                </div>
            </div>

        
            <div class="mb-4">
                <button class="bg-[#316275] text-white px-4 py-2 rounded-lg shadow-md w-full text-left flex justify-between items-center" onclick="toggleDropdown('service3')">
                    Installation & Collaboration of Hospital Equipment
                    <span id="icon-service3">▼</span>
                </button>
                <div id="service3" class="hidden mt-2 p-3 bg-white rounded-lg shadow-md">
                    Our experts specialize in installing and integrating hospital machines and equipment to ensure smooth operations.
                </div>
            </div>
        </div>

        <div class="flex justify-center">
            <img src="{{ asset('images/IMG-3.jpeg') }}" 
                alt="Medical Equipment" 
                class="rounded-lg shadow-lg w-[75%] h-[300px] object-cover">
        </div>

        
        
    </div> --}}
    <!-- <div class="grid grid-cols-3 gap-5 p-5" x-data="{service: 's1'}">
        <div class="grid col-span-1 gap-5 text-center">
            <button @click="service = 's1'" href="" class="bg-[#316275] text-white py-3 font-bold hover:bg-blue-600">High Quality Medicine</button>
            <button @click="service = 's2'" href="" class="bg-[#316275] text-white py-3 font-bold hover:bg-blue-600">Latest Medical Equipments</button>
            <button @click="service = 's3'" href="" class="bg-[#316275] text-white py-3 font-bold hover:bg-blue-600">Installation and Calibration</button>
            <button @click="service = 's4'" href="" class="bg-[#316275] text-white py-3 font-bold hover:bg-blue-600">Service</button>
        </div>
        <div x-show="service === 's1'" class="">
            <img class="h-full w-full" src="https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?q=80&w=830&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
            <div>
                <h1 class="text-4xl">High Quality and Trusted Brands</h1>
                <h3>We provide only high-quality, trusted branded medicines, ensuring safety, efficacy, and reliability in every dose</h3>
            </div>
        </div>
        <div x-show="service === 's2'">
            <img src="https://media.istockphoto.com/id/2161111602/photo/happy-multiracial-business-team-talking-on-a-meeting-in-the-office.jpg?s=612x612&w=is&k=20&c=3V0f4HIVRYqV7Cqv8tY14CYxHz82ABtwu02N8TyAcpM=" alt="">
        </div>
        <div x-show="service === 's3'">
            <img src="https://media.istockphoto.com/id/2159341791/photo/multicultural-business-professionals-celebrating-success.jpg?s=612x612&w=is&k=20&c=CCuOeM5JV2-uK4R0ohtAe7dHhp_orlM0yHWm4AHb9kM=" alt="">
        </div>
        <div x-show="service === 's4'">
            <img src="https://media.istockphoto.com/id/2148703154/photo/business-persons-on-meeting-in-the-office.jpg?s=1024x1024&w=is&k=20&c=PD5WCpkAzbJKe7aRfuP4dlZTfB43GPA2f7SQWUrNlsM=" alt="">
        </div>
    </div> -->


    {{-- <script>
        function toggleDropdown(id) {
            const content = document.getElementById(id);
            const icon = document.getElementById("icon-" + id);

            if (content.classList.contains('hidden')) {
                content.classList.remove('hidden');
                icon.textContent = "▲";
            } else {
                content.classList.add('hidden');
                icon.textContent = "▼";
            }
        }
    </script> --}}