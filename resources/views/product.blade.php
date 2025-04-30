<x-layout>

    <livewire:product />
    
    {{-- <div class="py-10">
        <div class="max-w-[60%] mx-auto text-center space-y-3">
            <label for="q" class="text-xl lg:text-4xl">Search Equipments</label>
            <x-input id="q" right-icon="magnifying-glass" class="" />
        </div>

        <div class="flex justify-center items-center" x-data="{details: false}">
            <div class="flex justify-center items-center gap-10 flex-wrap w-[70%] py-5">
                <div class="bg-white py-2 px-3 ring-1 ring-gray-300 rounded-md max-w-[100%] lg:max-w-[320px] space-y-2">
                    <img class="max-w-[100%] " src="{{ asset('images/IMG_0123.jpeg') }}" alt="">
                    <h1 class="font-bold ">Title ng Equipment</h1>
                    <p class="text-left text-wrap">{{ Str::limit('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos consequatur assumenda quas dolor asperiores repudiandae, modi voluptatibus quasi perferendis neque alias deleniti saepe, ullam possimus quibusdam, ipsum quam ipsa aut.', 150) }}</p>
                    <x-button @click="details = true" label="View Details" info class="w-full" />
                </div>
                <div class="bg-white py-2 px-3 ring-1 ring-gray-300 rounded-md max-w-[100%] lg:max-w-[320px] space-y-2">
                    <img class="max-w-[100%] " src="{{ asset('images/IMG_0123.jpeg') }}" alt="">
                    <h1 class="font-bold ">Title ng Equipment</h1>
                    <p class="text-left text-wrap">{{ Str::limit('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos consequatur assumenda quas dolor asperiores repudiandae, modi voluptatibus quasi perferendis neque alias deleniti saepe, ullam possimus quibusdam, ipsum quam ipsa aut.', 150) }}</p>
                    <x-button @click="details = true" label="View Details" info class="w-full" />
                </div>
                <div class="bg-white py-2 px-3 ring-1 ring-gray-300 rounded-md max-w-[100%] lg:max-w-[320px] space-y-2">
                    <img class="max-w-[100%] " src="{{ asset('images/IMG_0123.jpeg') }}" alt="">
                    <h1 class="font-bold ">Title ng Equipment</h1>
                    <p class="text-left text-wrap">{{ Str::limit('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos consequatur assumenda quas dolor asperiores repudiandae, modi voluptatibus quasi perferendis neque alias deleniti saepe, ullam possimus quibusdam, ipsum quam ipsa aut.', 150) }}</p>
                    <x-button @click="details = true" label="View Details" info class="w-full" />
                </div>
                <div class="bg-white py-2 px-3 ring-1 ring-gray-300 rounded-md max-w-[100%] lg:max-w-[320px] space-y-2">
                    <img class="max-w-[100%] " src="{{ asset('images/IMG_0123.jpeg') }}" alt="">
                    <h1 class="font-bold ">Title ng Equipment</h1>
                    <p class="text-left text-wrap">{{ Str::limit('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos consequatur assumenda quas dolor asperiores repudiandae, modi voluptatibus quasi perferendis neque alias deleniti saepe, ullam possimus quibusdam, ipsum quam ipsa aut.', 150) }}</p>
                    <x-button @click="details = true" label="View Details" info class="w-full" />
                </div>
                <div class="bg-white py-2 px-3 ring-1 ring-gray-300 rounded-md max-w-[100%] lg:max-w-[320px] space-y-2">
                    <img class="max-w-[100%] " src="{{ asset('images/IMG_0123.jpeg') }}" alt="">
                    <h1 class="font-bold ">Title ng Equipment</h1>
                    <p class="text-left text-wrap">{{ Str::limit('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos consequatur assumenda quas dolor asperiores repudiandae, modi voluptatibus quasi perferendis neque alias deleniti saepe, ullam possimus quibusdam, ipsum quam ipsa aut.', 150) }}</p>
                    <x-button @click="details = true" label="View Details" info class="w-full" />
                </div>
                <div class="bg-white py-2 px-3 ring-1 ring-gray-300 rounded-md max-w-[100%] lg:max-w-[320px] space-y-2">
                    <img class="max-w-[100%] " src="{{ asset('images/IMG_0123.jpeg') }}" alt="">
                    <h1 class="font-bold ">Title ng Equipment</h1>
                    <p class="text-left text-wrap">{{ Str::limit('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos consequatur assumenda quas dolor asperiores repudiandae, modi voluptatibus quasi perferendis neque alias deleniti saepe, ullam possimus quibusdam, ipsum quam ipsa aut.', 150) }}</p>
                    <x-button @click="details = true" label="View Details" info class="w-full" />
                </div>
                <div class="bg-white py-2 px-3 ring-1 ring-gray-300 rounded-md max-w-[100%] lg:max-w-[320px] space-y-2">
                    <img class="max-w-[100%] " src="{{ asset('images/IMG_0123.jpeg') }}" alt="">
                    <h1 class="font-bold ">Title ng Equipment</h1>
                    <p class="text-left text-wrap">{{ Str::limit('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos consequatur assumenda quas dolor asperiores repudiandae, modi voluptatibus quasi perferendis neque alias deleniti saepe, ullam possimus quibusdam, ipsum quam ipsa aut.', 150) }}</p>
                    <x-button @click="details = true" label="View Details" info class="w-full" />
                </div>
                <div class="bg-white py-2 px-3 ring-1 ring-gray-300 rounded-md max-w-[100%] lg:max-w-[320px] space-y-2">
                    <img class="max-w-[100%] " src="{{ asset('images/IMG_0123.jpeg') }}" alt="">
                    <h1 class="font-bold ">Title ng Equipment</h1>
                    <p class="text-left text-wrap">{{ Str::limit('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos consequatur assumenda quas dolor asperiores repudiandae, modi voluptatibus quasi perferendis neque alias deleniti saepe, ullam possimus quibusdam, ipsum quam ipsa aut.', 150) }}</p>
                    <x-button @click="details = true" label="View Details" info class="w-full" />
                </div>
            </div>
            <div x-show="details" x-cloak class="fixed top-0 left-0 z-60 w-full bg-black/40 h-screen flex justify-center items-center">
                <div @click.away="details = false" class=" w-[80%] lg:w-[70%] bg-white grid lg:grid-cols-2 space-x-3 p-2">
                    <div class="grid lg:grid-cols-2 gap-2 p-2">
                        <img class="col-span-2" src="{{ asset('images/IMG_0123.jpeg') }}" alt="">
                        <img src="{{ asset('images/IMG_0123.jpeg') }}" alt="">
                        <img src="{{ asset('images/IMG_0123.jpeg') }}" alt="">
                    </div>
                    <div class="">
                        <h1 class="text-4xl font-bold">Name ng Equipment</h1>
                        <p class="mt-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt aut unde, consequuntur perspiciatis quas sit velit natus ipsam atque quibusdam aliquam corrupti repellat. Expedita, cumque vel. Nesciunt, tempore exercitationem. Saepe.</p>
                        <div class="mt-4">Equipment Specs</div>
                        <ul class="space-y-1">
                            <li><span class="font-bold text-lg">Model:</span>detail ng equipment</li>
                            <li><span class="font-bold text-lg">Model:</span>detail ng equipment</li>
                            <li><span class="font-bold text-lg">Model:</span>detail ng equipment</li>
                            <li><span class="font-bold text-lg">Model:</span>detail ng equipment</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
    </div> --}}
</x-layout>