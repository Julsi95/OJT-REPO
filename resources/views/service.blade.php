<x-layout>
   <div class=" bg-[#32657a] text-white" >
        <div class="flex justify-between p-20 items-center" >
            <p class="font-bold text-2xl">SERVICES WE OFFER</p>
             <img src="{{ asset('images/jcorr.png') }}" alt="" class="bg-white w-[96px] rounded-lg p-2">
        </div>
        <div class="flex px-20 overflow-auto  space-x-20 scrollbar-hide" id="serviceScroll">
            <div class="min-w-full   flex flex-col  items-end">
                <h1 class="font-bold text-7xl max-w-[40%] text-end leading-[99px] my-5">
                    Equipment Installation
                </h1>
                <p class="text-end max-w-[70%] text-2xl my-5">
                    "As the bewildered platypus meandered aimlessly through the labyrinthine corridors of the abandoned, ivy-covered mansion that smelled faintly of old   parchment and forgotten memories, an inexplicable sense of déjà vu washed over   it, as if in some peculiar, alternate timeline, it had once been the keeper of an    ancient, mystical artifact capable of unlocking the long-lost secrets of a civilization   that had vanished without a trace, leaving only cryptic symbols etched into the stone walls, whispering tales of a forgotten past to those who dared to listen."
                </p>
            </div>
            <div class="min-w-full  flex flex-col  items-end">
                <h1 class="font-bold text-7xl max-w-[40%] text-end leading-[99px] my-5">
                    Equipment Installation
                </h1>
                <p class="text-end max-w-[70%] text-2xl my-5">
                    "As the bewildered platypus meandered aimlessly through the labyrinthine corridors of the abandoned, ivy-covered mansion that smelled faintly of old   parchment and forgotten memories, an inexplicable sense of déjà vu washed over   it, as if in some peculiar, alternate timeline, it had once been the keeper of an    ancient, mystical artifact capable of unlocking the long-lost secrets of a civilization   that had vanished without a trace, leaving only cryptic symbols etched into the stone walls, whispering tales of a forgotten past to those who dared to listen."
                </p>
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