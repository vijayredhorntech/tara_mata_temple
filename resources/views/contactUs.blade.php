<x-layout>
    <div class="pt-16">
        <div>
            <img class="w-full lg:h-[300px] object-cover" src="{{asset('assets/images/original/10.JPG')}}"
                 alt="Image 1">
        </div>


        <div class="w-full p-4 mt-6">
            <div class="w-full  flex flex-col items-center">
                <div class="bg-white flex flex-col items-center mx-auto">
                    <span class="lg:text-3xl md:text-3xl sm:text-2xl text-2xl font-semibold text-primary text-center">Contact us</span>
                    <span class="lg:text-sm md:text-sm sm:text-sm text-xs font-medium text-black/80">GET IN TOUCH WITH US</span>
                </div>
                <div class="lg:w-[50%] md:w-[70%] sm:w-[80%] w-full h-[3px] rounded-full mx-auto mt-4">
                    <img src="{{asset('assets/images/bgPattern.jpg')}}" class="w-full h-full object-cover rounded-full"
                         alt="">
                </div>
            </div>

            <div class="mx-auto lg:w-[80%] md:w-[90%] w-full shadow-lg shadow-black/20 rounded-md">
                <form action="https://fabform.io/f/{form-id}" method="post">
                    <section class="text-gray-600 body-font relative">
                        <div class="container px-5 py-4 mx-auto flex sm:flex-nowrap flex-wrap">
                            <div
                                class="lg:w-2/3 md:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
                                <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0"
                                        marginwidth="0" scrolling="no"
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16863.96300384316!2d77.18457471717662!3d31.02366357945974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39057f911a9a7875%3A0xd317d757024ae694!2sJunga%2C%20Himachal%20Pradesh%20171218!5e1!3m2!1sen!2sin!4v1730869050289!5m2!1sen!2sin"
                                        style="filter: grayscale(1) contrast(1.2) opacity(0.4);"></iframe>

                                <div class="bg-white relative flex flex-wrap py-6 rounded shadow-md">
                                    <div class="lg:w-1/2 px-6">
                                        <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">ADDRESS</h2>
                                        <p class="mt-1">Tara Mata Junga</p>
                                    </div>
                                    <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
                                        <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">EMAIL</h2>
                                        <a class="text-red-500 leading-relaxed">example@email.com</a>
                                        <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4">PHONE</h2>
                                        <p class="leading-relaxed">123-456-7890</p>
                                    </div>
                                </div>
                            </div>
                            <div class="lg:w-1/3 md:w-1/2 bg-white flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0">
                                <h2 class="text-primary text-lg mb-1 font-medium title-font">Contact us</h2>
                                <p class="leading-relaxed mb-5 text-gray-600">Get in touch with us by filling the form.</p>
                                <div class="relative mb-4">
                                    <label for="name" class="leading-7 text-sm text-black">Name</label>
                                    <input type="text" id="name" placeholder="Enter you name..." name="name" class="w-full bg-white rounded border border-primary/30 focus:border-primary/80 focus:ring-0 focus:outline-none text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                                <div class="relative mb-4">
                                    <label for="email" class="leading-7 text-sm text-black">Email</label>
                                    <input type="email" id="email" placeholder="Enter you email..." name="email" class="w-full bg-white rounded border border-primary/30 focus:border-primary/80 focus:ring-0 focus:outline-none text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                                <div class="relative mb-4">
                                    <label for="message" class="leading-7 text-sm text-black">Message</label>
                                    <textarea id="message" name="message" placeholder="Your message..." class="w-full bg-white rounded border border-primary/30 focus:border-primary/80 focus:ring-0 focus:outline-none h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                                </div>
                                <button class="text-white bg-primary/80 border-0 py-2 px-6 focus:outline-none hover:bg-primary rounded text-lg">Button</button>

                            </div>
                        </div>
                    </section>
                </form>
            </div>


        </div>
    </div>
</x-layout>
