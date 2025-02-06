<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-white dark:bg-gray-900">
        <!-- another navbar -->
        <div class="w-full flex justify-center bg-primary ">
            <div class="w-[90%]">
                <div class="w-full flex py-[1rem] text-[.8rem] space-x-[1rem]">
                    <p>Pevesindo</p>
                    <p>Kemitraan</p>
                </div>
            </div>
        </div>

        <!-- navbar -->
        <nav class="p-4 shadow-md bg-white flex justify-around align-center text-[.8rem] z-20 w-full">
            <div class="w-[90%] justify-between flex ">
                <div>
                    <img src="{{URL('images/logo.png')}}" alt="" class="w-[8rem]">
                </div>
                <ul class="flex space-x-[2rem] items-center font-[Open_Sans]">
                    <li class="cursor-pointer">Home</li>
                    <li class="cursor-pointer">Frenchise</li>
                    <button class="border-[1px] px-[1rem] py-[.2rem] border-black rounded-[6.2px]">Atur Jadwal</button>
                    <button class="flex space-x-2">
                        <div class="flex items-center ">
                            <p>Daftar</p>
                        </div>
                        <img src="{{URL('images/icons/login.svg')}}" alt="" class="w-[1rem]">
                    </button>
                </ul>
            </div>
        </nav>

        <!-- hero section -->
        <div class="relative flex justify-center w-full">
            <div class="w-[90%]">
                <div class="z-0 relative py-[1rem] overflow-hidden h-[30rem] w-[70%]">
                    <img src="{{URL('images/hero-full.png')}}" alt="" class="w-full h-full object-cover object-top rounded-[10px]">
                </div>
                <div class="absolute w-full left-0 bottom-0 h-full flex justify-around z-0 pt-[5%]">
                    <div class="w-[90%] align-right relative">
                        <div class="absolute pl-[33rem] ">
                            <div class="relative py-[2rem] pl-[3rem] rounded-[10px] space-y-[1rem]">
                                <div class="absolute inset-0 bg-[#FFF9DD] opacity-[.86] rounded-[10px]"></div>
                                <div class="relative space-y-[1rem]">
                                    <h1 class="font-serif text-[3rem] font-medium leading-[4rem]">Desain Interior Elegan Dari Pevesindo</h1>
                                    <p class="font-[Open_Sans] text-[.7rem]">
                                        6 Desember 2030
                                    </p>
                                    <p class="font-[Open_Sans] text-[.7rem]">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it.
                                    </p>
                                    <div class="w-[80%] grid gap-[1rem]">
                                        <button class="bg-accent py-[.3rem] w-[30%] rounded-[10px] font-medium text-white text-[.7rem]">Baca Selengkapnya</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- iklan -->
        <div class="w-full justify-center flex py-[4rem]">
            <div class="w-[90%]">
                <div class="bg-[#FFF9DD] py-[2rem] pl-[5%] rounded-r-[5rem] rounded-l-[20rem] border border-accent flex justify-between relative pr-[2rem]">
                    <div class="bg-greed-200 absolute top-[-2rem] left-[2rem]">
                        <img src="{{URL('images/products.png')}}" alt="" class="h-[7rem] object-cover object-top">
                    </div>
                    <div class="ml-[15%] text-[.7rem] space-y-[.4rem]">
                        <h3 class="font-bold">Looking for a more inspiring work environment?</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the</p>
                    </div>
                    <div class="flex items-center">
                        <button class="bg-gradient-to-r from-primary to-[#997C00] py-[.5rem] w-full rounded-[10px] font-medium text-white text-[.7rem] px-[2rem]">Baca Selengkapnya</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- article -->
        <div class="w-full justify-around flex">
            <div class="w-[90%] space-y-[1rem]">
                <div class="space-y-[1rem]">
                    <h2 class="font-serif text-[1.5rem]">Explore Topics</h2>
                    <div class="grid grid-cols-3 gap-[1rem]">
                        <div class="rounded-[10px] flex px-[1rem] border-[1.4px] border-[#D9D9D9] ">
                            <div class="flex items-center">
                                <img src="{{URL('images/icons/search.png')}}" alt="" class="w-[1.4rem]">
                            </div>
                            <input type="text" class="rounded-[10px] border-none w-full focus:outline-none focus:ring-0 active:outline-none active:ring-0">
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-3 grid-rows-2 gap-[1rem]">
                    <div class="border border-[#D9D9D9] rounded-[10px] overflow-hidden bg-secondary">
                        <img src="{{URL('images/plafon-1.png')}}" alt="" class="w-full">
                        <div class="p-[1rem] space-y-[.7rem]">
                            <h3 class="text-[1rem] font-bold">Contrary to popular belief, Lorem Ipsum is not simply random tex ...</h3>
                            <p class="text-[.6rem]">Contrary to popular belief</p>
                            <p class="text-[.7rem]">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                            <button class="bg-accent text-[.7rem] py-[.2rem] px-[1rem] rounded-full">Lebih Lengkap</button>
                        </div>
                    </div>
                    <div class="border border-[#D9D9D9] rounded-[10px] overflow-hidden bg-secondary">
                        <img src="{{URL('images/plafon-1.png')}}" alt="" class="w-full">
                        <div class="p-[1rem] space-y-[.7rem]">
                            <h3 class="text-[1rem] font-bold">Contrary to popular belief, Lorem Ipsum is not simply random tex ...</h3>
                            <p class="text-[.6rem]">Contrary to popular belief</p>
                            <p class="text-[.7rem]">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                            <button class="bg-accent text-[.7rem] py-[.2rem] px-[1rem] rounded-full">Lebih Lengkap</button>
                        </div>
                    </div>
                    <div class="border border-[#D9D9D9] rounded-[10px] overflow-hidden bg-secondary">
                        <img src="{{URL('images/plafon-1.png')}}" alt="" class="w-full">
                        <div class="p-[1rem] space-y-[.7rem]">
                            <h3 class="text-[1rem] font-bold">Contrary to popular belief, Lorem Ipsum is not simply random tex ...</h3>
                            <p class="text-[.6rem]">Contrary to popular belief</p>
                            <p class="text-[.7rem]">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                            <button class="bg-accent text-[.7rem] py-[.2rem] px-[1rem] rounded-full">Lebih Lengkap</button>
                        </div>
                    </div>
                    <div class="border border-[#D9D9D9] rounded-[10px] overflow-hidden bg-secondary">
                        <img src="{{URL('images/plafon-1.png')}}" alt="" class="w-full">
                        <div class="p-[1rem] space-y-[.7rem]">
                            <h3 class="text-[1rem] font-bold">Contrary to popular belief, Lorem Ipsum is not simply random tex ...</h3>
                            <p class="text-[.6rem]">Contrary to popular belief</p>
                            <p class="text-[.7rem]">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                            <button class="bg-accent text-[.7rem] py-[.2rem] px-[1rem] rounded-full">Lebih Lengkap</button>
                        </div>
                    </div>
                    <div class="border border-[#D9D9D9] rounded-[10px] overflow-hidden bg-secondary">
                        <img src="{{URL('images/plafon-1.png')}}" alt="" class="w-full">
                        <div class="p-[1rem] space-y-[.7rem]">
                            <h3 class="text-[1rem] font-bold">Contrary to popular belief, Lorem Ipsum is not simply random tex ...</h3>
                            <p class="text-[.6rem]">Contrary to popular belief</p>
                            <p class="text-[.7rem]">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                            <button class="bg-accent text-[.7rem] py-[.2rem] px-[1rem] rounded-full">Lebih Lengkap</button>
                        </div>
                    </div>
                    <div class="border border-[#D9D9D9] rounded-[10px] overflow-hidden bg-secondary">
                        <img src="{{URL('images/plafon-1.png')}}" alt="" class="w-full">
                        <div class="p-[1rem] space-y-[.7rem]">
                            <h3 class="text-[1rem] font-bold">Contrary to popular belief, Lorem Ipsum is not simply random tex ...</h3>
                            <p class="text-[.6rem]">Contrary to popular belief</p>
                            <p class="text-[.7rem]">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                            <button class="bg-accent text-[.7rem] py-[.2rem] px-[1rem] rounded-full">Lebih Lengkap</button>
                        </div>
                    </div>
                </div>
                <div class="py-[2rem]">
                    <div class="flex items-center justify-center">
                        <button class="bg-gradient-to-r py-[.5rem] rounded-[10px] font-medium text-[.7rem] px-[2rem] border border-black text-black">See More</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- footer -->
        <div>

            <div class="bg-secondary w-full justify-center flex">
                <!-- first section -->
                <div class="w-[90%] grid grid-cols-3">
                    <div class="flex space-x-[1rem] items-center">
                        <div>
                            <img src="{{URL('images/icons/instagram.png')}}" alt="" class="w-[1rem] ">
                        </div>
                        <div>
                            <img src="{{URL('images/icons/tiktok.png')}}" alt="" class="w-[1rem] ">
                        </div>
                        <div>
                            <img src="{{URL('images/icons/facebook.png')}}" alt="" class="w-[1rem] ">
                        </div>
                        <div>
                            <img src="{{URL('images/icons/youtube.png')}}" alt="" class="w-[1rem] ">
                        </div>
                    </div>
                    <div class="flex justify-around py-[1rem]">
                        <input type="text" class="text-[.7rem] w-full rounded-[10px] border-accent h-[2rem]" placeholder="Ommaleka">
                    </div>
                    <div class="flex items-center text-[.7rem] justify-end space-x-[.5rem]">
                        <p class="font-bold text-accent">EN</p>
                        <p>|</p>
                        <p class="">ID</p>
                    </div>
                </div>

            </div>
            <!-- second section -->
            <div class="w-full flex justify-around text-[1rem] py-[2rem]">
                <div class="w-[90%] flex ">
                    <h4>SEMUA LOKASI</h4>
                </div>
            </div>
            <hr>
            <!-- thirt section -->
            <div class="py-[5rem] w-full flex justify-center text-[1rem]">
                <div class="w-[90%]">
                    <div class="grid grid-cols-3">
                        <div class="grid grid-cols-1 gap-[2rem]">
                            <h4>OMMALEKA</h4>
                            <h4>OMMALEKA</h4>
                            <h4>OMMALEKA</h4>
                            <h4>OMMALEKA</h4>
                            <h4>OMMALEKA</h4>
                            <h4>OMMALEKA</h4>
                        </div>
                        <div class="grid grid-cols-1 gap-[2rem]">
                            <h4>OMMALEKA</h4>
                            <h4>OMMALEKA</h4>
                            <h4>OMMALEKA</h4>
                            <h4>OMMALEKA</h4>
                            <h4>OMMALEKA</h4>
                            <h4>OMMALEKA</h4>
                        </div>
                        <div class="grid grid-cols-1 gap-[2rem]">
                            <h4 class="font-medium">LOREM IPSUM</h4>
                            <img src="{{URL('images/logo-hitam.png')}}" alt="" class="w-[5rem]">
                            <h4 class="font-medium">Jam Buka</h4>
                            <h4>Senin - Jum’at, 08:00 - 17:00</h4>
                            <div class="flex space-x-[1rem]">
                                <div class="flex items-center">
                                    <img src="{{URL('images/icons/instagram.png')}}" alt="" class="w-[1rem]">
                                </div>
                                <h4>081330082008</h4>
                            </div>
                            <div class="flex space-x-[1rem]">
                                <div class="flex items-center">
                                    <img src="{{URL('images/icons/instagram.png')}}" alt="" class="w-[1rem]">
                                </div>
                                <h4>081330082008</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- fourt section -->
            <div class="w-full flex justify-center bg-secondary text-[.7rem]">
                <div class="w-[90%]">
                    <div class=" w-full flex py-[1rem]">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and</p>
                    </div>
                </div>
            </div>
            <!-- last one -->
            <div class="w-full flex justify-center bg-primary ">
                <div class="w-[90%]">
                    <div class="w-full flex py-[1rem] text-[.7rem]">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>