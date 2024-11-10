{{--      navbar code here      --}}
<div class="w-full h-max shadow-lg shadow-black/10 fixed top-0 z-50">
    <div
        class="w-full flex bg-white items-center lg:justify-evenly md:justify-evenly justify-between gap-6 p-4 relative">
        {{--             site logo here--}}
        <div class="w-max ">
            <a href="{{route('home')}}"> <img class="lg:h-10 md:h-8 h-10 w-auto object-cover"
                                              src="{{asset('assets/images/siteLogo.png')}}" alt="">
            </a>
        </div>
        {{--        navlink code here--}}

        <div id="navLinkDiv"
             class="lg:w-max md:w-max w-full lg:static md:static absolute top-[100%]  lg:shadow-none md:shadow-none shadow-lg  shadow-black/20 left-0 z-30 lg:flex md:flex hidden gap-4">
            <ul class="flex lg:flex-row md:flex-row flex-col lg:items-center mda:items-center items-start text-sm gap-4 lg:p-0 md:p-0 p-4 bg-white lg:w-max md:w-max w-full">
                <a href="{{route('home')}}">
                    <li class="{{Route::currentRouteName()==='home'?'border-b-primary text-primary':'border-b-white text-black'}} border-b-[1px] font-medium px-2 py-1 cursor-pointer  hover:border-b-primary hover:text-primary transition ease-in duration-2000 ">
                        HOME
                    </li>
                </a>
                <a href="{{route('about')}}">
                    <li class="{{Route::currentRouteName()==='about'?'border-b-primary text-primary':'border-b-white text-black'}} border-b-[1px] font-medium px-2 py-1 cursor-pointer  hover:border-b-primary hover:text-primary transition ease-in duration-2000 ">
                        ABOUT
                    </li>
                </a>
                <a href="">
                    <li class="{{Route::currentRouteName()===''?'border-b-primary text-primary':'border-b-white text-black'}} border-b-[1px] font-medium px-2 py-1 cursor-pointer  hover:border-b-primary hover:text-primary transition ease-in duration-2000 ">
                        JUNGA
                    </li>
                </a>
                <a href="{{route('gallery')}}">
                    <li class="{{Route::currentRouteName()==='gallery'?'border-b-primary text-primary':'border-b-white text-black'}} border-b-[1px] font-medium px-2 py-1 cursor-pointer  hover:border-b-primary hover:text-primary transition ease-in duration-2000 ">
                        GALLERY
                    </li>
                </a>
                <a href="{{route('contactUs')}}">
                    <li class="{{Route::currentRouteName()==='contactUs'?'border-b-primary text-primary':'border-b-white text-black'}} border-b-[1px] font-medium px-2 py-1 cursor-pointer  hover:border-b-primary hover:text-primary transition ease-in duration-2000 ">
                        CONTACT US
                    </li>
                </a>
            </ul>
        </div>
        {{--navlink conde ends here--}}
        {{--          donation button code here--}}
        <div class=" w-max lg:flex md:flex hidden">
            <a href="{{route('donation')}}"
                class=" bg-primary text-white font-semibold text-xs lg:px-6 md:px-2 lg:py-2 md:py-1.5 border-[1px] border-primary hover:bg-white rounded-[3px] hover:text-primary transition ease-in duration-2000">
                DONATE NOW
            </a>
        </div>
        {{--        nav link toggle button code--}}
        <div class=" w-max lg:hidden md:hidden flex">
            <button
                class=" bg-primary text-white font-semibold text-sm h-8 w-8 flex items-center justify-center border-[1px] border-primary hover:bg-white rounded-[3px] hover:text-primary transition ease-in duration-2000"
                onclick="document.querySelector('#navLinkDiv').classList.toggle('hidden');">
                <i class="fa fa-bars hidden"></i>
            </button>
        </div>
    </div>
</div>
{{--navbar code ends here--}}
