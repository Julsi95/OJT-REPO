<x-layout>
    <div class="flex justify-center items-center mt-5 px-5 lg:mt-auto lg:p-10">
        <div class="grid lg:grid-cols-2 gap-20 max-w-6xl">
            <div class="space-y-5">
                <div class="text-4xl lg:text-6xl font-bold text-[#316275]">Contact Us</div>
                <p>If you have any inquiries, concerns, or feedback, please reach out to us using the form below. We are here to assist you and provide the best possible service.</p>
               
                <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                    <h2 class="text-3xl font-bold text-[#316275] mb-4">Our Contact Details</h2>
                    <p><strong>📍 Address:</strong> Uncle John's - ONE JOROMA PLACE, GF, BRGY, ONE JOROMA PLACE BLDG. AVE, COR San Beda Rd, Project 8, Quezon City, 1106 Metro Manila</p>
                    <p><strong>📞 Phone:</strong> 09626917530 / 09913792132</p>
                    <p><strong>☎️ Landline:</strong> 02-8442-4854</p>
                    <p><strong>✉️ Email:</strong> jcormedical@gmail.com</p>
                    <p><strong>⏰ Business Hours:</strong></p>
                    <ul class="ml-5 list-disc text-lg">
                        <li><span class="text-green-600 font-semibold">Monday - Friday:</span> 8 AM - 5 PM</li>
                        <li><span class="text-red-600 font-semibold">Saturday - Sunday:</span> Closed</li>
                    </ul>
                </div>


               
            </div>

            <div class="space-y-5 mb-5">
                <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                    <h2 class="text-3xl font-bold text-[#316275] mb-4">Get in Touch</h2>
                    <form action="/submit-contact" method="POST" class="space-y-4">
                        <div>
                            <label for="name" class="block text-lg font-medium">Name</label>
                            <input type="text" id="name" name="name" class="w-full p-2 border border-gray-300 rounded-lg" required>
                        </div>
                        <div>
                            <label for="email" class="block text-lg font-medium">Email</label>
                            <input type="email" id="email" name="email" class="w-full p-2 border border-gray-300 rounded-lg" required>
                        </div>
                        <div>
                            <label for="message" class="block text-lg font-medium">Message</label>
                            <textarea id="message" name="message" rows="4" class="w-full p-2 border border-gray-300 rounded-lg" required></textarea>
                        </div>
                        <div>
                            <button type="submit" class="bg-[#316275] text-white px-4 py-2 rounded-lg hover:bg-[#274a5d]">Send Message</button>
                        </div>
                    </form>
                </div>

                
            </div>
        </div>
    </div>
</x-layout>
