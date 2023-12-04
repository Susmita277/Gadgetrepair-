<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gadget Repair Center</title>
    <script src="https://kit.fontawesome.com/04158e9780.js"></script>
    <script src="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Roboto&display=swap" rel="stylesheet">
    </script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('Frontend/style.css') }}">
    <link rel="stylesheet" data-purpose="Layout StyleSheet" title="Web Awesome"
        href="/css/app-wa-02670e9412103b5852dcbe140d278c49.css?vsn=d">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/all.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/sharp-solid.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/sharp-regular.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/sharp-light.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat&family=Playfair+Display&family=Poppins:ital@0;1&family=Roboto&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="w-full ">
        <div class="nav-section adjust-width">
            <ul>
                <li class="flex justify-between bg-[#43c3ea] p-4 max-sm:p-2">
                    <p class="pl-10 text-white max-sm:w-full">Welcome to Repairplus Experts</p>
                    <span class=" flex justify-between pr-10 max-sm:hidden">
                        <a href="#"><i class="fa-brands fa-facebook  pr-2 "></i></a>
                        <a href="#"><i class="fa-brands fa-twitter  pr-2"></i></a>
                        <a href="#"><i class="fa-brands fa-google-plus-g pr-2"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin-in pr-2"></i></a>
                    </span>
                </li>
                <li class="flex justify-between  w-full py-8  max-sm:hidden ">
                    <div class="ml-12">
                        <img src="http://tk.commonsupport.com/repairplus/wp-content/themes/repairplus/images/resources/logo.png.webp"
                            alt="">
                    </div>
                    <div class="w-full ml-44">
                        <ul class="flex  gap-14">
                            <li class="flex justify-between ">
                                <div class="flex align-middle ">
                                    <span class="p-2">
                                        <img src="{{ asset('Frontend/images/home.png') }}" alt="">
                                    </span>
                                </div>
                                <div>
                                    <h3>321, Breaking Street</h3>
                                    <p class="text-[#999999]">Newyork ,USA 10002</p>
                                </div>
                            </li>

                            <li class="flex justify-between ml-12 ">
                                <div class="flex align-middle">
                                    <span class="p-2">
                                        <img src="{{ asset('Frontend/images/clock.png') }}" alt="">
                                    </span>
                                </div>
                                <div>
                                    <h3>Opening Time</h3>
                                    <p class="text-[#999999]">Mon-Sat 09.00 to 18.00</p>
                                </div>
                            </li>
                            <li class="flex justify-between ml-12 gap-2">
                                <div class="flex align-middle">
                                    <span class="p-2 ">
                                        <img src="{{ asset('Frontend/images/email.png') }}" alt="">
                                    </span>
                                </div>
                                <div>
                                    <h3>321, Breaking Street</h3>
                                    <p class="text-[#999999]">supportforyou@gmail.com</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="flex justify-between align-center bg-slate-950 text-white max-sm:p-2 ">
                    <div class="max-sm:hidden">
                        <ul class="flex justify-between ml-12  ">
                            <li class=" border-l border-gray-500 py-6 px-8"><a href="#">HOME</a></li>
                            <li class="border-l border-gray-500 py-6 px-8  "><a href="#">SERVICES</a></li>
                            <li class="border-l border-gray-500 py-6 px-8"><a href="#">PAGES</a></li>
                            <li class="border-l border-gray-500 py-6 px-8"><a href="#">SHOP</a></li>
                            <li class="border-l  border-r border-gray-500 py-6 px-8"><a href="#">CONTACTS US</a>
                            </li>
                        </ul>
                    </div>
                    <div class="flex justify-between  items-center mr-12  ">
                        <div class="mx-2"> <img class="h-10 w-8" src="{{ asset('Frontend/images/smartphone.png') }}"
                                alt=""></div>
                        <div class="mr-12">
                            <h3 class="text-[#43c3ea] font-bold">Customer Care</h3>
                            <p> 1800-56-78-9012</p>
                        </div>

                        <div class="bg-[#43c3ea] px-6  py-6 mr-2 max-sm:hidden "><i
                                class="fa-solid fa-magnifying-glass"></i></div>
                        <div class=" hidden max-sm:block color-white ml-10 text-2xl"onclick='myfunction()'><i
                                class="fa-regular fa-bars"></i></div>
                    </div>

                </li>
            </ul>

        </div>
    </div>
    {{-- for mobile navigation  --}}
    <div class="mobile-navbar hidden w-full fixed top-50 z-10 bg-white">
        <ul class="flex flex-col ml-12 ">
            <li class=" border-l border-gray-500 py-2 px-8"><a href="#">HOME</a></li>
            <li class="border-l border-gray-500 py-2 px-8  "><a href="#">SERVICES</a></li>
            <li class="border-l border-gray-500 py-2 px-8"><a href="#">PAGES</a></li>
            <li class="border-l border-gray-500 py-2 px-8"><a href="#">SHOP</a></li>
            <li class="border-l  border-r border-gray-500 py-2 px-8"><a href="#">CONTACTS US</a>
            </li>
        </ul>
    </div>
    {{-- mobile-navigation end --}}
    @yield('content')


    <div class="footer container">
        <div class="footer-secction adjust-width">
            <ul>
                <li></li>
                <li></li>
            </ul>
        </div>
    </div>
    <script src="{{ asset('Frontend/gadrepair.js') }}"></script>
</body>

</html>
