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
        <div class="w-full flex justify-center bg-gradient-to-tr from-white to-primary overflow-hidden">
            <div class="w-[90%] flex py-[3rem] space-x-[3rem] h-[80vh]">
                <div class="w-[50%] justify-between relative">
                    <div class="space-y-[1rem]">
                        <h1 class="font-serif text-[3rem] font-medium leading-[4rem]">Solusi Bisnis Plafon PVC Modern untuk Masa Depan Anda</h1>
                        <p class="text-[.7rem]">Dengan pengalaman dan dukungan penuh dari tim Pevesindo, anda dapat menikmati bisnis plafon PVC yang mampu memberikan sharing profit 15%. tanpa perlu memikirkan pengelolaan opersional</p>
                    </div>
                    <div class="absolute w-full bottom-0">
                        <button class="w-full bg-primary py-[.5rem] rounded-[10px] font-medium text-white">Hubungi Kami</button>
                    </div>
                </div>

                <div class="relative w-[50%]">
                    <div class="absolute space-x-[2rem] flex ">
                        <img src="{{URL('images/franchise.png')}}" alt="" class="h-[90%] w-[73%] object-cover object-top rounded-[10px]">
                        <img src="{{URL('images/franchise.png')}}" alt="" class="h-[90%] w-[73%] object-cover object-top rounded-[10px]">
                    </div>
                </div>
            </div>

        </div>

        <!-- section 2 -->
        <div class="w-full flex justify-center py-[3rem]">
            <div class="w-[90%] space-y-[1rem]">
                <h2 class="text-[1.5rem]">Kenapa Pevesindo</h2>
                <div class="grid grid-cols-6 gap-[1.5rem]">
                    <div class="bg-secondary border border-[#BEC9CC] rounded-md p-[2.5rem] col-span-2 space-y-[1rem]">
                        <div class="w-full justify-center flex">
                            <img src="{{URL('images/icons/income.png')}}" alt="" class="w-[5rem]">
                        </div>
                        <h4 class="font-semibold">Investasi Tanpa Repot</h4>
                        <p class="text-[.7rem]">Franchisee hanya menanamkan modal, dan seluruh operasional toko dikelola oleh tim pusat. Anda cukup menerima return bulanan tanpa terlibat dalam pengelolaan bisnis</h4>
                    </div>
                    <div class="bg-secondary border border-[#BEC9CC] rounded-md p-[2.5rem] col-span-2 space-y-[1rem]">
                        <div class="w-full justify-center flex">
                            <img src="{{URL('images/icons/invesment.png')}}" alt="" class="w-[5rem]">
                        </div>
                        <h4 class="font-semibold">Investasi Tanpa Repot</h4>
                        <p class="text-[.7rem]">Franchisee hanya menanamkan modal, dan seluruh operasional toko dikelola oleh tim pusat. Anda cukup menerima return bulanan tanpa terlibat dalam pengelolaan bisnis</h4>
                    </div>
                    <div class="bg-secondary border border-[#BEC9CC] rounded-md p-[2.5rem] col-span-2 space-y-[1rem]">
                        <div class="w-full justify-center flex">
                            <img src="{{URL('images/icons/management.png')}}" alt="" class="w-[5rem]">
                        </div>
                        <h4 class="font-semibold">Investasi Tanpa Repot</h4>
                        <p class="text-[.7rem]">Franchisee hanya menanamkan modal, dan seluruh operasional toko dikelola oleh tim pusat. Anda cukup menerima return bulanan tanpa terlibat dalam pengelolaan bisnis</h4>
                    </div>
                    <div>
                        <!-- //empty card to fill the gap -->
                    </div>
                    <div class="bg-secondary border border-[#BEC9CC] rounded-md p-[2.5rem] col-span-2 space-y-[1rem]">
                        <div class="w-full justify-center flex">
                            <img src="{{URL('images/icons/stock.png')}}" alt="" class="w-[5rem]">
                        </div>
                        <h4 class="font-semibold">Investasi Tanpa Repot</h4>
                        <p class="text-[.7rem]">Franchisee hanya menanamkan modal, dan seluruh operasional toko dikelola oleh tim pusat. Anda cukup menerima return bulanan tanpa terlibat dalam pengelolaan bisnis</h4>
                    </div>
                    <div class="bg-secondary border border-[#BEC9CC] rounded-md p-[2.5rem] col-span-2 space-y-[1rem]">
                        <div class="w-full justify-center flex">
                            <img src="{{URL('images/icons/hand.png')}}" alt="" class="w-[5rem]">
                        </div>
                        <h4 class="font-semibold">Investasi Tanpa Repot</h4>
                        <p class="text-[.7rem]">Franchisee hanya menanamkan modal, dan seluruh operasional toko dikelola oleh tim pusat. Anda cukup menerima return bulanan tanpa terlibat dalam pengelolaan bisnis</h4>
                    </div>
                </div>
            </div>
        </div>

        <!-- section three -->
        <div class="w-full flex justify-around py-[3rem]">
            <div class="w-[90%] flex space-x-[1.5rem]">
                <div class="w-[40%] flex items-center">
                    <div class="w-full space-y-[2rem]">
                        <div class="space-y-[1.5rem]">
                            <h2 class="font-serif text-[2rem] text-[#E9BD00]">Keunggulan Franchise Pevesindo</h2>
                            <div class="grid grid-cols-8 gap-[1px] w-full max-w-screen-lg mx-auto bg-[#D9D9D9] text-[.5rem]">
                                <!-- Row 1 -->
                                <div class="col-span-3 bg-white text-black flex items-center justify-left py-4 space-x-[1rem]">
                                    <div>
                                        <img src="{{URL('images/icons/check.png')}}" alt="" class="w-[2rem]">
                                    </div>
                                    <p>
                                        Bisnis Autopilot
                                    </p>
                                </div>
                                <div class="col-span-5 bg-white text-black flex items-center justify-left p-4 space-x-[1rem]">
                                    <div>
                                        <img src="{{URL('images/icons/check.png')}}" alt="" class="w-[2rem]">
                                    </div>
                                    <p>
                                        Dibimbing dari 0
                                    </p>
                                </div>

                                <!-- Row 2 -->
                                <div class="col-span-4 bg-white text-black flex items-center justify-left py-4 space-x-[1rem]">
                                    <div>
                                        <img src="{{URL('images/icons/check.png')}}" alt="" class="w-[2rem]">
                                    </div>
                                    <p>
                                        Bisnis dengan bimbingan insentif
                                    </p>
                                </div>
                                <div class="col-span-4 bg-white text-black flex items-center justify-left p-4 space-x-[1rem]">
                                    <div>
                                        <img src="{{URL('images/icons/check.png')}}" alt="" class="w-[2rem]">
                                    </div>
                                    <p>
                                        sharing profit 15%
                                    </p>
                                </div>

                                <!-- Row 3 -->
                                <div class="col-span-5 bg-white text-black flex items-center justify-left py-4 space-x-[1rem]">
                                    <div>
                                        <img src="{{URL('images/icons/check.png')}}" alt="" class="w-[2rem]">
                                    </div>
                                    <p>
                                        ROI kurang dalam 1 tahun
                                    </p>
                                </div>
                                <div class="col-span-3 bg-white text-black flex items-center justify-left p-4 space-x-[1rem]">
                                    <div>
                                        <img src="{{URL('images/icons/check.png')}}" alt="" class="w-[2rem]">
                                    </div>
                                    <p>
                                        sharing profit 15%
                                    </p>
                                </div>
                                <!-- Row 4 -->
                                <div class="col-span-3 bg-white text-black flex items-center justify-left py-4 space-x-[1rem]">
                                    <div>
                                        <img src="{{URL('images/icons/check.png')}}" alt="" class="w-[2rem]">
                                    </div>
                                    <p>
                                        Layanan Revenue Suport
                                    </p>
                                </div>
                                <div class="col-span-5 bg-white text-black flex items-center justify-left p-4 space-x-[1rem]">
                                    <div>
                                        <img src="{{URL('images/icons/check.png')}}" alt="" class="w-[2rem]">
                                    </div>
                                    <p>
                                        Terkoneksi banyak mitra
                                    </p>
                                </div>

                                <!-- Row 5 -->
                                <div class="col-span-8 bg-white text-black flex items-center justify-left py-4 space-x-[1rem]">
                                    <div>
                                        <img src="{{URL('images/icons/check.png')}}" alt="" class="w-[2rem]">
                                    </div>
                                    <p>
                                        Paket komplit Dukungan Awal (Perencanaan bangunan & Rekrutment)
                                    </p>
                                </div>

                            </div>
                        </div>
                        <button class="w-full bg-primary py-[.5rem] rounded-[10px] font-medium text-white text-[.7rem]">Hubungi Kami</button>
                    </div>
                </div>
                <div class="rounded-tl-[5rem] rounded-tr-[10px] rounded-b-[10px] overflow-hidden w-[60%]"><img src="{{URL('images/wallpanel-1.png')}}" alt="" class="w-full block"></div>
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