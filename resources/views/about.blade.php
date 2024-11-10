<x-layout>
    <div class="pt-16">
            <div>
                <img class="w-full lg:h-[300px] object-cover" src="{{asset('assets/images/slider2.jpg')}}"
                      alt="Image 1">
            </div>


        <div class="w-full p-4 mt-6">
            <div class="w-full  flex flex-col items-center">
                <div class="bg-white flex flex-col items-center mx-auto">
                    <span class="lg:text-3xl md:text-3xl sm:text-2xl text-2xl font-semibold text-primary text-center">About</span>
                    <span class="lg:text-sm md:text-sm sm:text-sm text-xs font-medium text-black/80">ABOUT TRUST</span>
                </div>
                <div class="lg:w-[50%] md:w-[70%] sm:w-[80%] w-full h-[3px] rounded-full mx-auto mt-4">
                    <img src="{{asset('assets/images/bgPattern.jpg')}}" class="w-full h-full object-cover rounded-full"
                         alt="">
                </div>
            </div>
            <div class="mx-auto lg:w-[80%] md:w-[90%] w-full shadow-lg shadow-black/20 rounded-md">
                <div class="w-full grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-4 ">
                    <div class="w-full flex flex-col p-4 ">
                        <img class="rounded-md mb-4" src="{{asset('assets/images/aboutUsImage.jpg')}}" alt="">
                        <span class="font-semibold text-primary text-2xl">Tara Mata Bhon Temple - Junga</span>
                        <p class="text-black/60 font-medium mt-4">Tara Mata Bhon Temple is one of the most visited religious places near Shimla. It is situated at a height of 7200 feet above sea level and is situated around 11 km away from Shimla city.</p>
                    </div>
                    <div class="flex items-center justify-center p-4">
                        <img src="{{asset('assets/images/aboutRightImgage.jpg')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="w-full mt-12  flex flex-col items-center">
                <div class="bg-white flex flex-col items-center mx-auto">
                    <span class="lg:text-3xl md:text-3xl sm:text-2xl text-2xl font-semibold text-primary text-center">Gallery</span>
                    <span class="lg:text-sm md:text-sm sm:text-sm text-xs font-medium text-black/80">OUR GALLERY</span>
                </div>
                <div class="lg:w-[50%] md:w-[70%] sm:w-[80%] w-full h-[3px] rounded-full mx-auto mt-4">
                    <img src="{{asset('assets/images/bgPattern.jpg')}}" class="w-full h-full object-cover rounded-full"
                         alt="">
                </div>
            </div>
            <div class="mx-auto lg:w-[80%] md:w-[90%] w-full">
                <div class=" grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 py-12 lg:px-4 md:px-4 px-0 gap-6">
                    <div class="w-full h-64 rounded-md p-[2px] cursor-pointer group" style="background-image: url({{asset('assets/images/bgPattern.jpg')}})">
                        <img class="w-full h-full rounded-md object-cover group-hover:scale-95 transition ease-in duration-2000" src="{{{asset('assets/images/gallery1.jpg')}}}" alt="">
                    </div>
                    <div class="w-full h-64 rounded-md p-[2px] cursor-pointer group" style="background-image: url({{asset('assets/images/bgPattern.jpg')}})">
                        <img class="w-full h-full rounded-md object-cover group-hover:scale-95 transition ease-in duration-2000" src="{{{asset('assets/images/gallery2.jpg')}}}" alt="">
                    </div>
                    <div class="w-full h-64 rounded-md p-[2px] cursor-pointer group" style="background-image: url({{asset('assets/images/bgPattern.jpg')}})">
                        <img class="w-full h-full rounded-md object-cover group-hover:scale-95 transition ease-in duration-2000" src="{{{asset('assets/images/gallery3.jpg')}}}" alt="">
                    </div>
                    <div class="w-full h-64 rounded-md p-[2px] cursor-pointer group" style="background-image: url({{asset('assets/images/bgPattern.jpg')}})">
                        <img class="w-full h-full rounded-md object-cover group-hover:scale-95 transition ease-in duration-2000" src="{{{asset('assets/images/gallery4.jpg')}}}" alt="">
                    </div>

                </div>
            </div>


        </div>
    </div>
</x-layout>
