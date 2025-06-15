<x-layout>
    <div class="mx-5 lg:mx-10 space-y-10 py-4 ">
        <div class="text-center py-10 space-y-5">
            <div class="text-5xl">Strong partnerships drive lasting success <br> <span class="text-blue-500 font-bold">let’s grow together</span></div>
            <p class="text-balance mt-auto lg:mx-10 text-gray-500">Our success is built on a foundation of trust, collaboration, and a shared vision for the future, where we innovate, grow, and create lasting value together</p>
        </div>
        <div class="grid lg:grid-cols-2 gap-5 mt-auto lg:mx-16">
            <div>
                <div class="space-y-5">
                    <div class="flex gap-5">
                        <div class="ring-1 ring-black px-4 py-3 rounded-2xl">
                            <div class="lg:text-5xl font-bold">9K</div>
                            <p>Completed Projects</p>
                        </div>
                        <div class=" px-4 py-3 rounded-2xl bg-blue-500 text-white">
                            <div class="lg:text-5xl font-bold">3+</div>
                            <p>Years of Experience</p>
                        </div>
                    </div>
                    <img class="rounded-2xl w-full" src="https://media.istockphoto.com/id/2148703154/photo/business-persons-on-meeting-in-the-office.jpg?s=1024x1024&w=is&k=20&c=PD5WCpkAzbJKe7aRfuP4dlZTfB43GPA2f7SQWUrNlsM=" alt="">
                </div>
            </div>
            <div>
                <div class="space-y-5">
                    <img class="rounded-2xl w-full" src="https://media.istockphoto.com/id/696570136/photo/birds-eye-view-of-business.jpg?s=1024x1024&w=is&k=20&c=Iuc9vNYU__JTQ7t53kYfRxX5MBjVCipKdQNEOkeoTpM=" alt="">
                    <div class="flex gap-5 justify-end">
                        <div class=" px-4 py-3 rounded-2xl bg-blue-500 text-white">
                            <div class="lg:text-5xl font-bold">15+</div>
                            <p>Trusted Partners</p>
                        </div>
                        <div class="ring-1 ring-black px-4 py-3 rounded-2xl">
                            <div class="lg:text-5xl font-bold">20+</div>
                            <p>Best Quality Brand</p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="space-y-5 py-0 lg:py-10">
            <div class="flex justify-between items-center mt-16">
                <div class="text-md lg:text-4xl text-left text-balance">Ensuring safety, innovation, and reliability in every medical product we deliver</div>
                <p class="text-xs lg:text-lg text-gray-400 text-right text-balance">Empowering healthcare professionals with cutting-edge medical technology for better patient outcomes. </p>
            </div>
            <div class="bg-[#2a7fe0] flex-row md:flex gap-10 p-5 rounded-2xl space-y-6">
                <div class="relative lg:w-[750px] h-80">
                    <img class="ring-[3px] ring-white rounded-2xl absolute w-full h-full object-cover object-[50%_90%]" src="{{ asset('images/office1.jpg') }}" alt="">
                </div>
                <div class="flex flex-col justify-center gap-6" x-data="{detail1: false}">
                    <h2 class="text-3xl xl:text-5xl text-white text-balance">Providing High-Quality Medical Equipment & Trusted Healthcare Solutions</h2>
                    <p class="text-gray-300 xl:text-lg">"We specialize in state-of-the-art medical equipment and trusted healthcare solutions, designed to enhance patient care and improve medical efficiency. Our commitment to quality and innovation ensures that healthcare professionals receive the best tools for their practice."</p>
                    <button @click="detail1 = true" class="text-left text-white underline">View Details</button>
                    <!-- DETAIL 1 MODAL -->
                     <div x-show="detail1" x-cloak class="fixed top-0 left-0 w-full h-screen bg-black/30 flex justify-center items-center">
                        <div @click.away="detail1 = false" class="bg-white">
                            testing
                        </div>
                     </div>
                    <!-- DETAIL 1 MODaAL  -->
                </div>
            </div>
        </div>
        <div class="grid lg:grid-cols-3 gap-7 py-7" x-data="{s: ''}">
            <div class="border-[1px] border-gray-300 rounded-xl p-5 flex flex-col justify-between gap-5" :class="s === 's1' ? 'h-auto' : 'h-[400px] lg:h-[505px]'">
                <img class="rounded-2xl max-h-[325px]" src="{{ asset('images/IMG_0123.jpeg') }}" alt="">
                <div class="space-y-10" >
                    <div style="line-height: .9" class="text-3xl">High Quality Branded Medicine</div>
                    <div  :class="s === 's1' ? 'transition-[height]'" class="space-y-5" x-show="s === 's1'">
                        <p>We understand that when it comes to healthcare, quality is non-negotiable. Our extensive range of branded medicines is manufactured under strict regulatory guidelines and backed by scientific research. We prioritize</p>
                        <ul class="text-sm font-medium space-y-2">
                            <li class="flex gap-2"><p>✅</p> <span>Certified Quality: Every product is tested for safety and effectiveness.</span></li>
                            <li class="flex gap-2"><p>✅</p> <span> Trusted Brands: Partnering with leading pharmaceutical companies to ensure authenticity.</span></li>
                            <li class="flex gap-2"><p>✅</p> <span> Global Standards: Complying with international regulations for superior healthcare solutions.</span></li>
                            <li class="flex gap-2"><p>✅</p> <span> Patient Safety First: Ensuring each medicine is reliable, effective, and meets healthcare needs.</span></li>
                        </ul>
                    </div>
                    <button :class="s === 's1' ? 'hidden' :''" @click="s = 's1'">View Details</button>
                    <button :class="s === 's1' ? 'block' :'hidden'" @click="s = ''">Close</button>
                </div>
            </div>
            <div class="border-[1px] border-gray-300 rounded-xl p-5 flex flex-col justify-between gap-5" :class="s === 's2' ? 'h-auto duration-300 ease-in' : 'h-[400px] lg:h-[505px]'">
                <img class="rounded-2xl max-h-[325px]" src="{{ asset('images/IMG_0124.jpeg') }}" alt="">
                <div class="space-y-10" :class="s === 's2' ? 'h-auto' : 'h-[505px]'">
                    <div style="line-height: .9" class="text-3xl">Supplying Best and Latest Medical Equipments</div>
                    <div  :class="s === 's1' ? 'transition-[height]'" class="space-y-5" x-show="s === 's2'">
                        <p>Equipped with the latest innovations, our medical equipment enhances patient care, improves diagnostic accuracy, and streamlines medical procedures. We provide</p>
                        <ul class="text-sm font-medium space-y-2">
                            <li class="flex gap-2"><p>✅</p> <span> <strong> State-of-the-Art Technology:</strong> Access to the newest advancements in medical devices.</span></li>
                            <li class="flex gap-2"><p>✅</p> <span> <strong> Reliable & Certified Equipment:</strong> Meeting global healthcare standards for safety and efficiency.</span></li>
                            <li class="flex gap-2"><p>✅</p> <span> <strong> Wide Range of Solutions:</strong> From diagnostic tools to life-saving surgical instruments.</span></li>
                            <li class="flex gap-2"><p>✅</p> <span> <strong> Unmatched Customer Support:</strong> Ensuring seamless integration and ongoing assistance.</span></li>
                        </ul>
                    </div>
                    <button :class="s === 's2' ? 'hidden' :''" @click="s = 's2'">View Details</button>
                    <button :class="s === 's2' ? 'block' :'hidden'" @click="s = ''">Close</button>
                </div>
            </div>
            <div class="border-[1px] border-gray-300 rounded-xl p-5 flex flex-col justify-between gap-5" :class="s === 's3' ? 'h-auto' : 'h-[400px] lg:h-[505px]'">
                <img class="rounded-2xl max-h-[325px]" src="https://media.istockphoto.com/id/1071110418/photo/ultrasonic-flaw-detector.jpg?s=2048x2048&w=is&k=20&c=4AnDpVytBqv-PmDziYKqndKgt6z-So1gUS8pSo7GuTo=" alt="">
                <div class="space-y-10" :class="s === 's3' ? 'h-auto' : 'h-[505px]'">
                    <div  style="line-height: .9" class="text-3xl">Installation and Calibration of Medical Equipments </div>
                    <div  :class="s === 's1' ? 'transition-[height]'" class="space-y-5" x-show="s === 's3'">
                        <p>We specialize in the seamless setup and fine-tuning of a wide range of medical equipment, ensuring optimal performance from day one. Our services include</p>
                        <ul class="text-sm font-medium space-y-2">
                            <li class="flex gap-2"><p>✅</p> <span> <strong> Expert Installation:</strong> Our trained professionals handle every step, from setup to integration.</span></li>
                            <li class="flex gap-2"><p>✅</p> <span> <strong> Precision Calibration:</strong> Regular adjustments to maintain accuracy and compliance.</span></li>
                            <li class="flex gap-2"><p>✅</p> <span> <strong> Regulatory Compliance:</strong> Ensuring all devices meet global healthcare and safety standards.</span></li>
                            <li class="flex gap-2"><p>✅</p> <span> <strong> Ongoing Support & Maintenance:</strong> Keeping your equipment in peak condition for long-term reliability.</span></li>
                        </ul>
                    </div>
                    <button :class="s === 's3' ? 'hidden' :''" @click="s = 's3'">View Details</button>
                    <button :class="s === 's3' ? 'block' :'hidden'" @click="s = ''">Close</button>
                </div>
            </div>
        </div>
        <div class="py-10 lg:py-40 bg-blue-900">
            {{-- <img class="w-full" src="https://images.pexels.com/photos/176851/pexels-photo-176851.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt=""> --}}
            <div class="flex flex-col justify-center items-center space-y-10">
                <div class="text-5xl text-white text-center">Our Beloved Hospital Partners</div>
                <div class="grid grid-cols-2 lg:grid-cols-4 gap-5 ">
                    <div class="flex justify-center items-center bg-white rounded-lg w-36 h-36 lg:w-52 lg:h-44 px-10">
                        <img class="w-10 h-10 lg:w-14 lg:h-14 rounded-full" src="{{ asset('images/jcorr.png') }}" alt="">
                        <div class="text-sm lg:text-xl font-bold">Hospitals</div>
                    </div>
                    <div class="flex justify-center items-center bg-white rounded-lg w-36 h-36 lg:w-52 lg:h-44 px-10">
                        <img class="w-10 h-10 lg:w-14 lg:h-14 rounded-full" src="{{ asset('images/jcorr.png') }}" alt="">
                        <div class="text-sm lg:text-xl font-bold">Hospitals</div>
                    </div>
                    <div class="flex justify-center items-center bg-white rounded-lg w-36 h-36 lg:w-52 lg:h-44 px-10">
                        <img class="w-10 h-10 lg:w-14 lg:h-14 rounded-full" src="{{ asset('images/jcorr.png') }}" alt="">
                        <div class="text-sm lg:text-xl font-bold">Hospitals</div>
                    </div>
                    <div class="flex justify-center items-center bg-white rounded-lg w-36 h-36 lg:w-52 lg:h-44 px-10">
                        <img class="w-10 h-10 lg:w-14 lg:h-14 rounded-full" src="{{ asset('images/jcorr.png') }}" alt="">
                        <div class="text-sm lg:text-xl font-bold">Hospitals</div>
                    </div>
                    <div class="flex justify-center items-center bg-white rounded-lg w-36 h-36 lg:w-52 lg:h-44 px-10">
                        <img class="w-10 h-10 lg:w-14 lg:h-14 rounded-full" src="{{ asset('images/jcorr.png') }}" alt="">
                        <div class="text-sm lg:text-xl font-bold">Hospitals</div>
                    </div>
                    <div class="flex justify-center items-center bg-white rounded-lg w-36 h-36 lg:w-52 lg:h-44 px-10">
                        <img class="w-10 h-10 lg:w-14 lg:h-14 rounded-full" src="{{ asset('images/jcorr.png') }}" alt="">
                        <div class="text-sm lg:text-xl font-bold">Hospitals</div>
                    </div>
                    <div class="flex justify-center items-center bg-white rounded-lg w-36 h-36 lg:w-52 lg:h-44 px-10">
                        <img class="w-10 h-10 lg:w-14 lg:h-14 rounded-full" src="{{ asset('images/jcorr.png') }}" alt="">
                        <div class="text-sm lg:text-xl font-bold">Hospitals</div>
                    </div>
                    <div class="flex justify-center items-center bg-white rounded-lg w-36 h-36 lg:w-52 lg:h-44 px-10">
                        <img class="w-10 h-10 lg:w-14 lg:h-14 rounded-full" src="{{ asset('images/jcorr.png') }}" alt="">
                        <div class="text-sm lg:text-xl font-bold">Hospitals</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col justify-center items-center space-y-4 py-10 relative">
            <div class="ring-2 ring-black-500 relative w-64 h-64 rounded-xl overflow-hidden z-10">
                {{-- <img class="absolute w-full h-full object-cover object-[50%_90%]" src="https://scontent.fcrk9-1.fna.fbcdn.net/v/t39.30808-6/347270957_6965952496752497_2964203555966439741_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=833d8c&_nc_eui2=AeF9reIzPjBolLbwY-UMT45vipO_UDy_SGiKk79QPL9IaN9vpOBJiTdfOnZWmpjIWLtLqM2eJK4HlK8HgZLhf_EE&_nc_ohc=V-MCrHPERf4Q7kNvgF8LZmF&_nc_oc=AdmfxrRUH_SJd4FuaWCfJ3ICeWQ3eMjcEwoMIJIrRZmeDlVrwzdw74s_gwzP9iUVz9eRtU2DYA17S5-InL-VfUpG&_nc_zt=23&_nc_ht=scontent.fcrk9-1.fna&_nc_gid=s899s6iHmzrA6DJ7OgN_kQ&oh=00_AYGiOnvOIauDRF9IBXjbJ9Q244A5fjerBwx_sGv7jxy9wg&oe=67E0B871" alt=""> --}}
                <img class="absolute w-full h-full object-cover object-[50%_90%]" src="https://media.istockphoto.com/id/2151942495/photo/handmade-purple-paper-flower-on-white-background.jpg?s=2048x2048&w=is&k=20&c=QeadHWgToUGN0fU0TNWs26uRtBneCRDsTEfeTaw2aNQ=" alt="">
            </div>
            <div class="absolute lg:text-[200px] italic text-gray-200 top-0">TESTIMONIAL</div>
            <p class="text-center text-balance text-2xl mx-10 text-gray-900 z-10">Our goal is to foster innovation, drive sustainable growth, and create lasting value for our customers, employees, and stakeholders. Let's stay focused, collaborate effectively, and execute with excellence.</p>
            <div class="">
                <h2  class="text-xl font-medium">Mary Jane Fabre</h2>
                <p class="text-sm text-gray-500 text-center">President of JCOR</p>
            </div>
        </div>
    </div>
</x-layout>
