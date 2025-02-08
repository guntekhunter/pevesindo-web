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
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">

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

        <!-- article -->
        <div class="w-full justify-center flex pb-[5rem]">
            <div class="w-[90%] space-y-[1rem]">
                <div class="space-y-[1rem] py-[3rem]">
                    <div class="flex space-x-[1rem]">
                        <div class="flex items-center">
                            <img src="{{URL('images/icons/arrow-back.png')}}" alt="" class="h-[1rem]">
                        </div>
                        <div class="flex items-center">
                            <h3 class="font-serif font-bold text-[1.3rem]">Blogs</h3>
                        </div>
                    </div>
                </div>

                <!-- article body -->
                <div class="w-full flex justify-center">
                    <div class="w-[60%]">
                        <div>
                            <h1 class="font-serif font-bold text-[2rem]">Desain Interior Elegan Dari Pevesindo</h1>
                            <p class="text-[.7rem]">6 Desember 2030</p>
                            <div class="my-[1.3rem] rounded-[10px] overflow-hidden h-[80vh]">
                                <img src="{{URL('images/plafon-1.png')}}" alt="" class="w-full rounded-[10px]">
                            </div>

                            <!-- content -->
                            <div class="font-pt space-y-[.5rem] leading-7 pb-[3rem]">
                                <h2 class="text-[1.5rem] font-medium">What is Lorem Ipsum?</h2>
                                <p class="text-[.7rem] font-medium">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                <h2 class="text-[1.5rem] font-medium">What is Lorem Ipsum?</h2>
                                <p class="text-[.7rem] font-medium">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                <h2 class="text-[1.5rem] font-medium">What is Lorem Ipsum?</h2>
                                <p class="text-[.7rem] font-medium">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            </div>
                        </div>
                        <hr class="color-black">
                    </div>
                </div>

                <!-- coment -->
                <div class="py-[3rem] w-full flex justify-center">
                    <div class="relative w-[60%] space-y-[1rem] h-[12rem] overflow-hidden">
                        <!-- Scrollable comments -->
                        <div class="space-y-[1rem] overflow-y-auto h-full pr-2 scrollbar-hide">
                            <!-- user comment card -->
                            @for ($i = 0; $i < 3; $i++)
                                <div class="space-y-[.5rem]">
                                <div class="flex space-x-[.5rem]">
                                    <div class="rounded-full overflow-hidden w-[2rem] h-[2rem]">
                                        <img src="{{ URL('images/plafon-1.png') }}" alt="" class="rounded-[10px] h-full w-auto">
                                    </div>
                                    <div class="items-center">
                                        <p class="font-bold">Anonim</p>
                                    </div>
                                </div>
                                <p class="text-[.7rem]">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                        </div>
                        @endfor
                    </div>

                    <!-- Fade-out effect -->
                    <div class="absolute bottom-0 left-0 w-full h-[3rem] bg-gradient-to-b from-transparent to-white"></div>
                </div>
            </div>
            <!-- coment input -->
            <div class="w-full justify-center flex">
                <div class="w-[60%] space-y-[1rem]">
                    <h3 class="font-serif font-bold text-[1.3rem]">Komentar</h3>
                    <textarea name="" id="" class="border-black border-[1px] w-full rounded-[10px]"></textarea>
                    <button class="bg-primary py-[.5rem] w-full rounded-[10px] font-medium text-white text-[.7rem] px-[2rem]">Kirim Komentar</button>
                </div>
            </div>
        </div>
    </div>


    <!-- articles -->
    <div class="w-full justify-around flex">
        <div class="w-[90%] space-y-[1rem]">
            <div class="space-y-[1rem]">
                <h2 class="font-serif text-[1.5rem]">Artikel Lain</h2>
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