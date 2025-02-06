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

<body class="antialiased">
  <div class="min-h-screen dark:bg-gray-900">
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
    <div class="relative">
      <div class="z-0 relative py-[1rem] overflow-hidden h-[30rem] w-[70%]">
        <img src="{{URL('images/hero.png')}}" alt="" class="w-full h-full object-cover object-top">
      </div>
      <div class="absolute w-full left-0 bottom-0 h-full flex justify-around z-0">
        <div class="w-[90%] align-right relative bottom-0 pt-[20%]">
          <div class="absolute pl-[33rem]">
            <div class="bg-white py-[2rem] pl-[2rem] h-[full] rounded-[10px] space-y-[1rem]">
              <h1 class="font-serif text-[3rem] font-medium">Lorem Ipsum is simply dummy text of the printing</h1>
              <p class=" font-[Open_Sans] text-[.7rem]">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it</p>
              <div class="w-[80%] grid gap-[1rem]">
                <div class="rounded-[10px] flex px-[1rem] border-[1.4px] border-[#D9D9D9]">
                  <div class="flex items-center">
                    <img src="{{URL('images/icons/pin.png')}}" alt="">
                  </div>
                  <input type="text" class="rounded-[10px] border-none w-full focus:outline-none focus:ring-0 active:outline-none active:ring-0">
                  <div class="flex items-center">
                    <img src="{{URL('images/icons/arrow.png')}}" alt="">
                  </div>
                </div>
                <button class="w-full bg-primary py-[.5rem] rounded-[10px] font-medium text-white">Hubungi Kami</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- section two -->
    <div class="pt-[12rem] flex justify-around">
      <div class=" w-[90%] space-y-[1.5rem]">
        <h2 class="text-[1.5rem] flex justify-center">Lorem Ipsum is simply dummy text of the printing and</h2>
        <div class="flex space-x-[1.5rem]">
          <div class="w-[50%] grid grid-cols-3 gap-[1.5rem]">
            <div class="rounded-t-[10px] rounded-b-[10px] overflow-hidden"><img src="{{URL('images/plafon-1.png')}}" alt="" class="h-[50%] block"><img src="{{URL('images/plafon-2.png')}}" alt="" class="w-full block"></div>
            <div class="rounded-t-[10px] rounded-b-[10px] overflow-hidden"><img src="{{URL('images/plafon-3.png')}}" alt="" class="h-[50%] block"><img src="{{URL('images/plafon-4.png')}}" alt="" class="w-full block"></div>
            <div class="rounded-t-[10px] rounded-b-[10px] overflow-hidden"><img src="{{URL('images/plafon-5.png')}}" alt="" class="h-[50%] block"><img src="{{URL('images/plafon-6.png')}}" alt="" class="w-full block"></div>
          </div>
          <div class="w-[50%] flex items-center">
            <div class="space-y-[1rem] text-[.7rem]">
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it</p>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it</p>
              <div class="flex space-x-[1.5rem] pt-[1rem]">
                <button class="w-full border-[1px] border-black py-[.5rem] rounded-[10px] text-black">Hubungi Kami</button>
                <button class="w-full bg-primary py-[.5rem] rounded-[10px] font-medium text-white">Hubungi Kami</button>
              </div>
            </div>
          </div>
          <div>

          </div>
        </div>
      </div>
    </div>

    <!-- section three -->
    <div class="py-[3rem] flex justify-around">
      <div class="w-[90%] space-y-[1.5rem]">
        <h2 class="text-[1.5rem] flex text-leftw-full">Lorem Ipsum is simply dummy text of the printing and</h2>
        <div class="grid grid-cols-3 grid-rows-2 gap-[1rem]">
          <div class="bg-secondary border border-[#BEC9CC] rounded-md p-[2.5rem]">
            <h4 class="font-semibold">Lorem Ipsum is simply</h4>
            <p class="text-[.7rem]">Lorem Ipsum is simply dummy text of the printing an</h4>
          </div>
          <div class="bg-secondary border border-[#BEC9CC] rounded-md p-[2.5rem]">
            <h4 class="font-semibold">Lorem Ipsum is simply</h4>
            <p class="text-[.7rem]">Lorem Ipsum is simply dummy text of the printing an</h4>
          </div>
          <div class="bg-secondary border border-[#BEC9CC] rounded-md p-[2.5rem]">
            <h4 class="font-semibold">Lorem Ipsum is simply</h4>
            <p class="text-[.7rem]">Lorem Ipsum is simply dummy text of the printing an</h4>
          </div>
          <div class="bg-secondary border border-[#BEC9CC] rounded-md p-[2.5rem]">
            <h4 class="font-semibold">Lorem Ipsum is simply</h4>
            <p class="text-[.7rem]">Lorem Ipsum is simply dummy text of the printing an</h4>
          </div>
          <div class="bg-secondary border border-[#BEC9CC] rounded-md p-[2.5rem]">
            <h4 class="font-semibold">Lorem Ipsum is simply</h4>
            <p class="text-[.7rem]">Lorem Ipsum is simply dummy text of the printing an</h4>
          </div>
          <div class="bg-secondary border border-[#BEC9CC] rounded-md p-[2.5rem]">
            <h4 class="font-semibold">Lorem Ipsum is simply</h4>
            <p class="text-[.7rem]">Lorem Ipsum is simply dummy text of the printing an</h4>
          </div>
          <div class="flex col-span-2">
            <div>
              <p class="text-[.7rem]">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
            </div>
          </div>
          <div class="">
            <button class="w-full bg-primary py-[.5rem] rounded-[10px] font-medium text-white text-[.7rem]">Hubungi Kami</button>
          </div>
        </div>
      </div>
    </div>

    <!-- section four -->
    <div class="w-full flex justify-around py-[3rem]">
      <div class="w-[90%] flex space-x-[1.5rem]">
        <div class="w-[40%] flex items-center">
          <div class="w-full space-y-[4rem]">
            <div class="space-y-[1.5rem]">
              <h2 class="font-serif text-[2rem] text-[#E9BD00]">Lorem Ipsum is simply</h2>
              <div class="grid grid-cols-8 gap-[1px] w-full max-w-screen-lg mx-auto bg-[#D9D9D9] text-[.5rem]">
                <!-- Row 1 -->
                <div class="col-span-3 bg-white text-[#D9D9D9] flex items-center justify-left py-4">COWORKING SPACE</div>
                <div class="col-span-5 bg-white text-[#D9D9D9] flex items-center justify-left p-4">PRIVATE OFFICE</div>

                <!-- Row 2 -->
                <div class="col-span-4 bg-white text-[#D9D9D9] flex items-center justify-left py-4">RUANG MEETING</div>
                <div class="col-span-4 bg-white text-[#D9D9D9] flex items-center justify-left p-4">KANTOR HARIAN</div>

                <!-- Row 3 -->
                <div class="col-span-5 bg-white text-[#D9D9D9] flex items-center justify-left py-4">ENTERPRICE SOLUTION</div>
                <div class="col-span-3 bg-white text-[#D9D9D9] flex items-center justify-left p-4">RUANG ACARA</div>
              </div>
            </div>
            <button class="w-full bg-primary py-[.5rem] rounded-[10px] font-medium text-white text-[.7rem]">Hubungi Kami</button>
          </div>
        </div>
        <div class="rounded-tl-[5rem] rounded-tr-[10px] rounded-b-[10px] overflow-hidden w-[60%]"><img src="{{URL('images/wallpanel-1.png')}}" alt="" class="w-full block"></div>
      </div>
    </div>
    <!-- section five -->
    <div class="w-full flex justify-around py-[3rem]">
      <div class="w-[90%] flex space-x-[1.5rem]">

        <div class="rounded-t-[10px] rounded-b-[10px] overflow-hidden w-[60%]"><img src="{{URL('images/wallpanel-2.png')}}" alt="" class="w-full block"></div>
        <div class="w-[40%] flex items-center">
          <div class="w-full space-y-[4rem]">
            <div class="space-y-[1.5rem]">
              <p class=" font-[Open_Sans] text-[.7rem]">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it</p>
              <button class="w-full bg-primary py-[.5rem] rounded-[10px] font-medium text-white text-[.7rem]">Hubungi Kami</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- section six -->
    <div>
      <div class="w-full overflow-hidden pl-[5%]">
        <div class="flex w-[150%] transition-transform duration-500 ease-in-out space-x-[1.5rem]">
          <div class="bg-secondary w-[80vw] shrink-0 text-left flex border border-[#D9D9D9] rounded-[10px] overflow-hidden">
            <div class="w-[50%]">
              <img src="{{URL('images/wallpanel-2.png')}}" alt="" class="w-full block">
            </div>
            <div class="p-[1.5rem] w-[50%]">
              <h3 class="text-left text-[1.5rem] font-medium">Lorem Ipsum is simply</h3>
              <p class="text-left text-[.8rem]">Lorem Ipsum is simply</p>
              <p class="text-left text-[1rem]">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it</p>
              <p class="text-left text-[1rem] text-primary">Lorem Ipsum is simply</p>
            </div>
          </div>
          <div class="bg-secondary w-[80vw] shrink-0 text-left flex border border-[#D9D9D9] rounded-[10px] overflow-hidden">
            <div class="w-[50%]">
              <img src="{{URL('images/wallpanel-2.png')}}" alt="" class="w-full block">
            </div>
            <div class="p-[1.5rem] w-[50%]">
              <h3 class="text-left text-[1.5rem] font-medium">Lorem Ipsum is simply</h3>
              <p class="text-left text-[.8rem]">Lorem Ipsum is simply</p>
              <p class="text-left text-[.7rem]">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it</p>
              <p class="text-left text-[.7rem] text-primary">Lorem Ipsum is simply</p>
            </div>
          </div>
        </div>
      </div>
      <div class="w-full py-[1rem] justify-center flex relative">
        <div class="w-[95%]">
          <div class="relative bg-green-200">
            <div class="absolute top-0 right-0 flex space-x-[1.5rem]">
              <img src="{{URL('images/icons/panah-kiri.png')}}" alt="" class="w-[3rem]">
              <img src="{{URL('images/icons/panah-kanan.png')}}" alt="" class="w-[3rem]">
              <div class="items-center flex">
                <p class="text-primary">Lihat Semua</p>
              </div>
              <div class="flex items-center">
                <img src="{{URL('images/icons/arrow.png')}}" alt="" class="rotate-[270deg]">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- section seven -->
    <div class="w-full py-[5rem] flex">
      <div class="bg-red-200 w-[50%] rounded-tr-[10rem] overflow-hidden">
        <img src="{{URL('images/plafon-1.png')}}" alt="" class="w-full">
      </div>
      <div class="w-[50%] flex items-end">
        <div class="bg-[#F5F5F5] h-[50%] w-full p-[1.5rem]">
          <div class="w-[90%]">
            <h3 class="text-[#7F7F7F]">
              LOREM IPSUM
            </h3>
            <h2 class="font-bold text-[1.5rem]">
              Lorem Ipsum is
            </h2>
            <div class="space-y-[.5rem]">
              <p class="text-left text-[.7rem]">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it</p>
            </div>
            <div class="py-[1rem]">
              <button class="w-full bg-primary py-[.5rem] rounded-[10px] font-medium text-white text-[.7rem]">Hubungi Kami</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- section eight -->
    <div class=" w-full flex justify-center">
      <div class="w-[90%] grid grid-cols-3 gap-[1.5rem]">
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
        <div class="grid grid-rows-4 bg-black gap-[1px]">
          <div class="bg-white space-y-[.8rem] flex items-center">
            <div>
              <h3 class="text-[1rem] font-bold">Contrary to popular belief, Lorem Ipsum is not simply random tex ...</h3>
              <p class="text-[.7rem]">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
            </div>
          </div>
          <div class="bg-white space-y-[.8rem] flex items-center">
            <div>
              <h3 class="text-[1rem] font-bold">Contrary to popular belief, Lorem Ipsum is not simply random tex ...</h3>
              <p class="text-[.7rem]">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
            </div>
          </div>
          <div class="bg-white space-y-[.8rem] flex items-center">
            <div>
              <h3 class="text-[1rem] font-bold">Contrary to popular belief, Lorem Ipsum is not simply random tex ...</h3>
              <p class="text-[.7rem]">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
            </div>
          </div>
          <div class="bg-white space-y-[.8rem] flex items-center">
            <button class="w-full bg-primary py-[.5rem] rounded-[10px] font-medium text-white text-[.7rem]">Hubungi Kami</button>
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