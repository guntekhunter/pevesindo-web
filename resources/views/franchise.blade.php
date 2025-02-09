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
                <h2 class="text-[1.5rem] font-medium">Kenapa Pevesindo</h2>
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

        <!-- section four -->
        <div class="w-full flex justify-center py-[3rem]">
            <div class="w-[90%] space-y-[2rem]">
                <h2 class="text-[1.5rem] font-semibold text-center">Type Frenchise</h2>
                <div class="rounded-full grid grid-cols-3 gap-[1.5rem]">
                    <div class="rounded-[10px] shadow-md p-[3rem] space-y-[1rem] my-[1.5rem]">
                        <h3 class="font-semibold text-[1.5rem] text-center">Studio</h3>
                        <p class="text-[.7rem]/6">Model ini cocok bagi investor yang ingin memulai bisnis dari nol dan menginginkan dukungan penuh dalam hal desain, konstruksi, dan pengaturan toko.</p>
                        <ul class="text-[.7rem] space-y-[1.3rem]">
                            <li class="flex space-x-[1rem]">
                                <div class="flex justify-center items-center">
                                    <img src="{{URL('images/icons/checklist.png')}}" alt="" class="w-[1rem]">
                                </div>
                                <p>Commitment fee 50%</p>
                            </li>
                            <li class="flex space-x-[1rem]">
                                <div class="flex justify-center items-center">
                                    <img src="{{URL('images/icons/checklist.png')}}" alt="" class="w-[1rem]">
                                </div>
                                <p>Standarisasi</p>
                            </li>
                            <li class="flex space-x-[1rem]">
                                <div class="flex justify-center items-center">
                                    <img src="{{URL('images/icons/checklist.png')}}" alt="" class="w-[1rem]">
                                </div>
                                <p>Konfersi Bangunan + Sistem</p>
                            </li>
                            <li class="flex space-x-[1rem]">
                                <div class="flex justify-center items-center">
                                    <img src="{{URL('images/icons/checklist.png')}}" alt="" class="w-[1rem]">
                                </div>
                                <p>CF 50%</p>
                            </li>
                            <li class="flex space-x-[1rem]">
                                <div class="flex justify-center items-center">
                                    <img src="{{URL('images/icons/checklist.png')}}" alt="" class="w-[1rem]">
                                </div>
                                <p>Finishing</p>
                            </li>
                            <li class="flex space-x-[1rem]">
                                <div class="flex justify-center items-center">
                                    <img src="{{URL('images/icons/checklist.png')}}" alt="" class="w-[1rem]">
                                </div>
                                <p>Soft Launching</p>
                            </li>
                            <li class="flex space-x-[1rem]">
                                <div class="flex justify-center items-center">
                                    <img src="{{URL('images/icons/checklist.png')}}" alt="" class="w-[1rem]">
                                </div>
                                <p>Grand Launching</p>
                            </li>
                        </ul>
                        <div class="py-[1rem]">
                            <hr class="border-[1.3px]">
                        </div>
                        <button class="w-full bg-white py-[.5rem] rounded-[10px] border-[1.5px] border-accent font-medium text-black text-[.7rem]">Talk To Us</button>
                    </div>
                    <div class="rounded-[10px] shadow-md p-[3rem] space-y-[1rem]">
                        <h3 class="font-semibold text-[1.5rem] text-center">Autopilot</h3>
                        <p class="text-[.7rem]/6">Model franchise ini dirancang khusus bagi investor yang ingin memperoleh pendapatan pasif tanpa harus terlibat dalam operasional bisnis. Investor hanya perlu menanamkan modal, dan tim pusat (francisor) akan mengelola seluruh aspek bisnis. Profit diberikan secara tetap setiap bulan sebagai hasil dari kinerja toko yang dikelola oleh pusat</p>
                        <ul class="text-[.7rem] space-y-[1.3rem]">
                            <li class="flex space-x-[1rem]">
                                <div class="flex justify-center items-center">
                                    <img src="{{URL('images/icons/checklist.png')}}" alt="" class="w-[1rem]">
                                </div>
                                <p>Commitment fee 50%</p>
                            </li>
                            <li class="flex space-x-[1rem]">
                                <div class="flex justify-center items-center">
                                    <img src="{{URL('images/icons/checklist.png')}}" alt="" class="w-[1rem]">
                                </div>
                                <p>Persetujuan Lokasi</p>
                            </li>
                            <li class="flex space-x-[1rem]">
                                <div class="flex justify-center items-center">
                                    <img src="{{URL('images/icons/checklist.png')}}" alt="" class="w-[1rem]">
                                </div>
                                <p>CF 75 %</p>
                            </li>
                            <li class="flex space-x-[1rem]">
                                <div class="flex justify-center items-center">
                                    <img src="{{URL('images/icons/checklist.png')}}" alt="" class="w-[1rem]">
                                </div>
                                <p>Pembangunan Toko</p>
                            </li>
                            <li class="flex space-x-[1rem]">
                                <div class="flex justify-center items-center">
                                    <img src="{{URL('images/icons/checklist.png')}}" alt="" class="w-[1rem]">
                                </div>
                                <p>Finishing</p>
                            </li>
                            <li class="flex space-x-[1rem]">
                                <div class="flex justify-center items-center">
                                    <img src="{{URL('images/icons/checklist.png')}}" alt="" class="w-[1rem]">
                                </div>
                                <p>Soft Launching</p>
                            </li>
                            <li class="flex space-x-[1rem]">
                                <div class="flex justify-center items-center">
                                    <img src="{{URL('images/icons/checklist.png')}}" alt="" class="w-[1rem]">
                                </div>
                                <p>Grand Launching</p>
                            </li>
                        </ul>
                        <div class="py-[1rem]">
                            <hr class="border-[1.3px]">
                        </div>
                        <button class="w-full bg-white py-[.5rem] rounded-[10px] border-[1.5px] border-accent font-medium text-black text-[.7rem]">Talk To Us</button>
                    </div>
                    <div class="rounded-[10px] shadow-md p-[3rem] space-y-[1rem] my-[1.5rem]">
                        <h3 class="font-semibold text-[1.5rem] text-center">Reguler</h3>
                        <p class="text-[.7rem]/6">Model ini cocok untukmu yang sudah memiliki Bangunan sendiri. dengan begitu kamu bisa meminimalkan biaya awal karena tidak perlu melakukan pembangunan toko.</p>
                        <ul class="text-[.7rem] space-y-[1.3rem]">
                            <li class="flex space-x-[1rem]">
                                <div class="flex justify-center items-center">
                                    <img src="{{URL('images/icons/checklist.png')}}" alt="" class="w-[1rem]">
                                </div>
                                <p>Commitment fee 50%</p>
                            </li>
                            <li class="flex space-x-[1rem]">
                                <div class="flex justify-center items-center">
                                    <img src="{{URL('images/icons/checklist.png')}}" alt="" class="w-[1rem]">
                                </div>
                                <p>Renovasi Toko</p>
                            </li>
                            <li class="flex space-x-[1rem]">
                                <div class="flex justify-center items-center">
                                    <img src="{{URL('images/icons/checklist.png')}}" alt="" class="w-[1rem]">
                                </div>
                                <p>CF 50%</p>
                            </li>
                            <li class="flex space-x-[1rem]">
                                <div class="flex justify-center items-center">
                                    <img src="{{URL('images/icons/checklist.png')}}" alt="" class="w-[1rem]">
                                </div>
                                <p>Finishing</p>
                            </li>
                            <li class="flex space-x-[1rem]">
                                <div class="flex justify-center items-center">
                                    <img src="{{URL('images/icons/checklist.png')}}" alt="" class="w-[1rem]">
                                </div>
                                <p>Soft Launching</p>
                            </li>
                            <li class="flex space-x-[1rem]">
                                <div class="flex justify-center items-center">
                                    <img src="{{URL('images/icons/checklist.png')}}" alt="" class="w-[1rem]">
                                </div>
                                <p>Grand Opening</p>
                            </li>
                        </ul>
                        <div class="py-[1rem]">
                            <hr class="border-[1.3px]">
                        </div>
                        <button class="w-full bg-white py-[.5rem] rounded-[10px] border-[1.5px] border-accent font-medium text-black text-[.7rem]">Talk To Us</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- section five -->
        <div class="w-full flex justify-center py-[3rem]">
            <div class="w-[90%] grid grid-cols-3 gap-[1.5rem]">
                <div class="border border-[#D9D9D9] rounded-[10px] overflow-hidden bg-secondary">
                    <img src="{{URL('images/type-1.png')}}" alt="" class="w-full">
                    <div class="p-[1rem] space-y-[.7rem]">
                        <h3 class="text-[1rem] font-bold">Hunian (Resedensial)</h3>
                        <p class="text-[.7rem]">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                    </div>
                </div>
                <div class="border border-[#D9D9D9] rounded-[10px] overflow-hidden bg-secondary">
                    <img src="{{URL('images/type-2.png')}}" alt="" class="w-full">
                    <div class="p-[1rem] space-y-[.7rem]">
                        <h3 class="text-[1rem] font-bold">Komersial</h3>
                        <p class="text-[.7rem]">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                    </div>
                </div>
                <div class="border border-[#D9D9D9] rounded-[10px] overflow-hidden bg-secondary">
                    <img src="{{URL('images/type-3.png')}}" alt="" class="w-full">
                    <div class="p-[1rem] space-y-[.7rem]">
                        <h3 class="text-[1rem] font-bold">Industri</h3>
                        <p class="text-[.7rem]">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- section six -->
        <div class="w-full justify-center flex py-[3rem]">
            <div class="w-[90%] space-y-[3rem]">
                <h2 class="text-[1.5rem] font-semibold text-center">Langkah Mudah untuk Bergabung</h2>
                <div class="flex w-full">
                    <div class="grid grid-cols-3 w-full">
                        <div class="flex">
                            <div class="border-primary border-[1.3px] rounded-full w-[1rem] h-[1rem]"></div>
                            <div class="flex items-center w-full">
                                <div class="h-[.1px] w-full bg-primary"></div>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="bg-primary rounded-full w-[1rem] h-[1rem]"></div>
                            <div class="flex items-center w-full">
                                <div class="h-[.1px] w-full bg-primary"></div>
                            </div>
                        </div>
                        <div class="bg-primary rounded-full w-[1rem] h-[1rem] relative">
                            <div class="absolute">
                                <img src="{{URL('images/icons/checklist.png')}}" alt="" class="w-[1rem]">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-3 w-full gap-[1.5rem]">
                    <div class="space-y-[.5rem]">
                        <h3 class="text-[1rem] font-bold">Pilih Paket Franchise</h3>
                        <p class="text-[.7rem]">Sesuaikan dengan kebutuhan dan preferensi Anda</p>
                    </div>
                    <div class="space-y-[.5rem]">
                        <h3 class="text-[1rem] font-bold">Diskusi dan Kesepakatan</h3>
                        <p class="text-[.7rem]">Kami akan menjelaskan detail investasi dan mempersiapkan semua dokumen.</p>
                    </div>
                    <div class="space-y-[.5rem]">
                        <h3 class="text-[1rem] font-bold">Mulai Bisnis Anda</h3>
                        <p class="text-[.7rem]">Kami akan membantu Anda memulai perjalanan sukses bersama Pevesindo</p>
                    </div>

                </div>

            </div>
        </div>

        <!-- section seven -->
        <div class="w-full py-[5rem] flex">
            <div class="bg-red-200 w-[50%] rounded-tr-[10rem] overflow-hidden">
                <img src="{{URL('images/join.png')}}" alt="" class="w-full">
            </div>
            <div class="w-[50%] flex items-end">
                <div class="bg-[#F5F5F5] h-[50%] w-full p-[1.5rem]">
                    <div class="w-[90%] space-y-[1rem]">
                        <h2 class="font-bold text-[1.5rem]">
                            Jangan Lewatkan Peluang Ini
                        </h2>
                        <div class="space-y-[.5rem]">
                            <p class="text-left text-[.7rem]">Bergabunglah dengan franchise Pevesindo dan raih kesuksesan di industri plafon PVC.
                            </p>
                            <p class="text-left text-[.7rem] font-semibold">Hubungi Kami Sekarang</p>
                            <div class="text-[.7rem] space-y-[.7rem]">
                                <div class="flex space-x-[1rem]">
                                    <div class="">
                                        <img src="{{URL('images/icons/whatsapp.png')}}" alt="" class="w-[1rem]">
                                    </div>
                                    <p>Whatsapp: 082 12345 0245</p>
                                </div>
                                <div class="flex space-x-[1rem]">
                                    <div class="">
                                        <img src="{{URL('images/icons/email.png')}}" alt="" class="w-[1rem]">
                                    </div>
                                    <p>Whatsapp: 082 12345 0245</p>
                                </div>
                                <div class="flex space-x-[1rem]">
                                    <div class="">
                                        <img src="{{URL('images/icons/web.png')}}" alt="" class="w-[1rem]">
                                    </div>
                                    <p>Whatsapp: 082 12345 0245</p>
                                </div>
                            </div>
                            <p class="text-left text-[.7rem]">Tempat Terbatas! Segera Amankan Paket Franchise Anda!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- section eight -->
        <div class="flex w-full justify-center">
            <div class="w-[90%]">
                <div class="grid grid-cols-3 gap-[1rem]">
                    <div class="flex w-full justify-center item-center">
                        <div class="flex items-center w-full">
                            <div class="h-[.1px] w-full bg-black"></div>
                        </div>
                    </div>
                    <div class="flex w-full justify-center item-center">
                        <h2 class="font-serif text-[2rem] text-black font-semibold">ATAU</h2>
                    </div>

                    <div class="flex w-full justify-center item-center">
                        <div class="flex items-center w-full">
                            <div class="h-[.1px] w-full bg-black"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- section nine -->
        <div class="w-full py-[5rem] flex justify-around">
            <div class="w-[70%] bg-secondary border border-accent rounded-[10px] p-[2rem] space-y-[.8rem]">
                <h3 class="text-[1rem] font-bold">Contrary to popular belief, Lorem Ipsum is not simply random tex ...</h3>
                <p class="text-[.7rem]">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                <div class="grid grid-cols-2 gap-[1rem]">
                    <input type="text" class="text-[.7rem] w-full rounded-[10px] border-accent col-span-2" placeholder="Ommaleka">
                    <input type="text" class="text-[.7rem] w-full rounded-[10px] border-accent" placeholder="Ommaleka">
                    <input type="text" class="text-[.7rem] w-full rounded-[10px] border-accent" placeholder="Ommaleka">
                    <div class="rounded-[10px] flex px-[1rem] border border-[#D9D9D9] bg-white text-[.7rem]">
                        <div class="flex items-center">
                            +62
                        </div>
                        <input type="text" class="rounded-[10px] border-none w-full focus:outline-none focus:ring-0 active:outline-none active:ring-0">
                    </div>
                    <input type="text" class="text-[.7rem] w-full rounded-[10px] border-accent" placeholder="Ommaleka">
                    <textarea name="" id="" class="text-[.7rem] w-full rounded-[10px] border-accent col-span-2" placeholder="Ommaleka"></textarea>
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