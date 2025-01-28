<x-layout>
    <div class="pt-16">
        <div class="homeBanner">
            <div class="relative">
                <img class="w-full lg:h-[700px] object-cover" src="{{asset('assets/images/slider1.jpg')}}"
                     alt="Image 1">
                <div class="w-full h-max absolute top-0 left-0 p-4 ">
                    <div
                        class="bg-primary/90 text-white lg:text-lg md:text-md sm:text-md text-xs w-max flex flex-col justify-center items-center px-6 py-2 mx-auto rounded-[5px]">
                        <span>Tara Mata Mandir (Bhaun) Junga</span>
                        <span>Shimla, H.P. INDIA</span>
                    </div>
                </div>

            </div>
            <div><img class="w-full lg:h-[700px] object-cover" src="{{asset('assets/images/slider2.jpg')}}"
                      alt="Image 1"></div>
            <div><img class="w-full lg:h-[700px] object-cover" src="{{asset('assets/images/slider3.jpg')}}"
                      alt="Image 1"></div>
            <div><img class="w-full lg:h-[700px] object-cover" src="{{asset('assets/images/original/4.JPG')}}"
                      alt="Image 1"></div>
        </div>
        <div class="w-full p-4 mt-6">
            <div class="w-full  flex flex-col items-center">
                <div class="bg-white flex flex-col items-center mx-auto">
                    <span class="lg:text-3xl md:text-3xl sm:text-2xl text-2xl font-semibold text-primary text-center">News</span>
                    <span class="lg:text-sm md:text-sm sm:text-sm text-xs font-medium text-black/80">LATEST NEWS REGARDING TEMPLE</span>
                </div>
                <div class="lg:w-[50%] md:w-[70%] sm:w-[80%] w-full h-[3px] rounded-full mx-auto mt-4">
                    <img src="{{asset('assets/images/bgPattern.jpg')}}" class="w-full h-full object-cover rounded-full"
                         alt="">
                </div>
            </div>

            <div class="mx-auto lg:w-[80%] md:w-[90%] w-full">
                <div class=" grid lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-2 grid-cols-1 py-12 lg:px-4 md:px-4 px-0 gap-6">
                    <div class="w-full bg-white rounded-md shadow-lg shadow-black/20 flex flex-col justify-between group">
                        <div class="w-full bg-white">
                            <img class="w-full h-52" src="{{asset('assets/images/news1.jpg')}}" alt="">
                            <div class="px-2 pt-6 flex flex-col gap-2">
                                <span class="text-black font-semibold group-hover:text-primary text-[20px] transition ease-in duration-2000">गांव वासियों के सहयोग से मंदिर में स्तम्भ स्थापित किये गये</span>
                                <p class="text-primary text-sm font-semibold">NEWS. MARCH 28, 2023</p>
                                <p class="text-black/70 text-sm font-normal mt-4">गांव वासियों के सहयोग से मंदिर में स्तम्भ स्थापित किये गये</p>
                            </div>
                        </div>
{{--                        <div class="px-2 py-2">--}}
{{--                            <button class=" flex items-center justify-center w-full bg-primary text-white font-semibold p-2 rounded-md mt-4 text-lg border-[1px] border-primary hover:bg-white hover:text-primary transition ease-in duration-2000"><span class="animate-pulse flex items-center"> Read More <i class="fa fa-angles-right ml-4"></i></span>  </button>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>

            <div class="relative w-full lg:h-[700px] md:h-[600px] sm:h-[500px] h-[300px] rounded-md bg-cover bg-center" style="background-image: url({{asset('assets/images/original/4.JPG')}});">
                <div class="absolute inset-0 bg-black bg-opacity-30"></div>
                <div class="relative z-10 flex items-center justify-center h-full">
                </div>
            </div>

            <div class="w-full mt-12  flex flex-col items-center">
                <div class="bg-white flex flex-col items-center mx-auto">
                    <span class="lg:text-3xl md:text-3xl sm:text-2xl text-2xl font-semibold text-primary text-center">You may voluntarily donate for temple</span>
                    <span class="lg:text-sm md:text-sm sm:text-sm text-xs font-medium text-black/80">WE ARE LOOKING FOR DONATION</span>
                </div>
                <div class="lg:w-[50%] md:w-[70%] sm:w-[80%] w-full h-[3px] rounded-full mx-auto mt-4">
                    <img src="{{asset('assets/images/bgPattern.jpg')}}" class="w-full h-full object-cover rounded-full"
                         alt="">
                </div>
            </div>

            <div class="mx-auto lg:w-[80%] md:w-[90%] w-full">
                <div class=" grid lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-2 grid-cols-1 py-12 lg:px-4 md:px-4 px-0 gap-6">
                    <div class="w-full bg-white rounded-md shadow-lg shadow-black/20 flex flex-col justify-between">
                        <div class="w-full bg-white">
                            <img class="w-full h-52" src="{{asset('assets/images/foodDonation.jpg')}}" alt="">
                            <div class="px-2 py-2 flex flex-col gap-2">
                                <span class="text-black font-semibold  text-[20px]">Sharing Warmth, One Meal at a Time</span>
                                <p class="text-black/70 text-sm font-normal">Sharing a meal can mean so much more than just food—it’s a gesture of kindness and hope. Help bring comfort and nourishment to those in need by contributing to the effort of making every meal count. Together, we can share warmth and uplift spirits</p>
                            </div>
                        </div>
                        <div class="px-4 pb-4">
                            <button class=" flex items-center justify-center w-full bg-primary text-white font-semibold p-2 rounded-md mt-4 text-lg border-[1px] border-primary hover:bg-white hover:text-primary transition ease-in duration-2000"><span class="animate-pulse flex items-center"> Contribute <i class="fa fa-angles-right ml-4"></i></span>  </button>
                        </div>
                    </div>
                    <div class="w-full bg-white rounded-md shadow-lg shadow-black/20 flex flex-col justify-between">
                        <div class="w-full bg-white">
                            <img class="w-full h-52" src="{{asset('assets/images/cowDonation.jpg')}}" alt="">
                            <div class="px-2 py-2 flex flex-col gap-2">
                                <span class="text-black font-semibold  text-[20px]">Havens of Care: Support for Cows</span>
                                <p class="text-black/70 text-sm font-normal">Extend a helping hand to provide safe, nurturing shelters for cows. Your contribution ensures they receive the care and comfort they deserve, promoting a life of dignity and compassion.</p>
                            </div>
                        </div>
                        <div class="px-4 pb-4">
                            <button class=" flex items-center justify-center w-full bg-primary text-white font-semibold p-2 rounded-md mt-4 text-lg border-[1px] border-primary hover:bg-white hover:text-primary transition ease-in duration-2000"><span class="animate-pulse flex items-center"> Contribute <i class="fa fa-angles-right ml-4"></i></span>  </button>
                        </div>
                    </div>
                    <div class="w-full bg-white rounded-md shadow-lg shadow-black/20 flex flex-col justify-between">
                        <div class="w-full bg-white">
                            <img class="w-full h-52" src="{{asset('assets/images/templeConstruction.jpg')}}" alt="">
                            <div class="px-2 py-2 flex flex-col gap-2">
                                <span class="text-black font-semibold  text-[20px]">Building Sacred Spaces</span>
                                <p class="text-black/70 text-sm font-normal"> Contribute to the construction of a temple that serves as a sanctuary for prayer, reflection, and community gatherings. Your support helps create a spiritual haven where individuals can come together, find solace, and deepen their connection to faith.</p>
                            </div>
                        </div>
                        <div class="px-4 pb-4">
                            <button class=" flex items-center justify-center w-full bg-primary text-white font-semibold p-2 rounded-md mt-4 text-lg border-[1px] border-primary hover:bg-white hover:text-primary transition ease-in duration-2000"><span class="animate-pulse flex items-center"> Contribute <i class="fa fa-angles-right ml-4"></i></span>  </button>
                        </div>
                    </div>
                    <div class="w-full bg-white rounded-md shadow-lg shadow-black/20 flex flex-col justify-between">
                        <div class="w-full bg-white">
                            <div class="w-full h-52 bg-primary flex items-center justify-center">
                                <img class="w-auto rounded-md h-48 object-fill" src="{{asset('assets/images/donationQR.jpg')}}" alt="">

                            </div>
                            <div class="px-2 py-2 flex flex-col gap-2">
                                <span class="text-black font-semibold  text-[20px]">Donate for Mandir</span>
                                <p class="text-black/70 text-sm font-normal"> <span class="font-semibold text-black text-md">Account Name: </span>Shri Tara Mata Bhon Prachine Mandir Parisar Nirman Evam Vik</p>
                                <p class="text-black/70 text-sm font-normal"> <span class="font-semibold text-black text-md">Bank Name: </span>Sbi Bank</p>
                                <p class="text-black/70 text-sm font-normal"> <span class="font-semibold text-black text-md">Branch: </span>Junga, Shimla</p>
                                <p class="text-black/70 text-sm font-normal"> <span class="font-semibold text-black text-md">Account Number: </span>00000041946578232</p>
                                <p class="text-black/70 text-sm font-normal"> <span class="font-semibold text-black text-md">Ifsc Code: </span>SBIN0051132</p>
                            </div>
                        </div>
                        <div class="px-4 pb-4">
                            <button class=" flex items-center justify-center w-full bg-primary text-white font-semibold p-2 rounded-md mt-4 text-lg border-[1px] border-primary hover:bg-white hover:text-primary transition ease-in duration-2000"><span class="animate-pulse flex items-center"> Contribute <i class="fa fa-angles-right ml-4"></i></span>  </button>
                        </div>
                    </div>
                </div>
            </div>


            <div class="relative w-full rounded-md  grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 ">
                <!-- Background Video -->
                <div>
                    <img src="{{asset('assets/images/original/6.JPG')}}" alt="">
                </div>
                <div>
                    <video class=" w-full h-full object-cover" autoplay loop muted>
                        <source src="{{asset('assets/videos/bg2.mp4')}}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>

                </div>
                <!-- Overlay -->
                <div class="absolute inset-0 bg-black bg-opacity-30"></div>

                <!-- Content -->
                <div class="relative z-10 flex items-center justify-center h-full">
                    <!-- Add your content here -->
                </div>
            </div>
        </div>
    </div>
</x-layout>
