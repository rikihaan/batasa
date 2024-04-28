<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="<?=base_url("css/tailwindcss.css")?>">
    <!-- alphin js -->
    <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body>
    <!-- navabar -->
    <nav class="py-9 px-4 fixed w-full top-0 z-40" x-data="{navOpen:false}">
        <div>
            <div class="container mx-auto">
                <div class="flex justify-between items-center">
                    <img src="<?=base_url("img/logo.svg")?>" alt="logo" class="items-end text-white w-[36%] sm:w-[23%] lg:w-[18%] order-1 sm:order-2">
                    <ion-icon @click="navOpen = !navOpen" name="menu-outline" class="lg:hidden text-4xl bg-white sm:order-1 order-3"></ion-icon>
                    <div class="order-2 hidden lg:block">
                        <ul class="flex gap-16">
                            <li>
                                <a href="#" class="text-white bg-pink-800 px-4 rounded-full py-3 font-bold">Home</a>
                            </li>
                            <li>
                                <a href="#" class="text-white bg-pink-800 px-4 rounded-full py-3 font-bold hover:opacity-100">Profil</a>
                            </li>
                            <li>
                                <a href="#" class="text-white bg-pink-800 px-4 rounded-full py-3 font-bold hover:opacity-100">Galery</a>
                            </li>
                            <li>
                                <a href="#" class="text-white bg-pink-800 px-4 rounded-full py-3 font-bold hover:opacity-100">Kontak</a>
                            </li>
                        </ul>
                    </div>
                    <div class="order-2 hidden sm:block">
                        <button class="bg-white px-8 py-2 font-bold text-grey-400 rounded-full">Informasi</button>
                        <button class="bg-white px-8 py-2 font-bold text-sky-800 hover:bg-sky-100 hover:text-gray-500 rounded-full">Buku Tamu</button>
                    </div>
                </div>
            </div>
            <!-- navbar bawah -->
            <div x-show="navOpen"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 scale-90"
                x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="scale-100"
                x-transition:leave-end="opacity-0 scale-90" 
                x-data="{open: false}" 
                class="fixed bottom-0 left-0 right-0 p-2 lg:hidden bg-red-800 shadow-lg">
                <ul class="flex space-x-7 flex-wrap justify-around">
                    <li>
                        <button class="flex flex-col items-center justify-around gap-1 text-sky-400">
                            <ion-icon name="home-outline" class="text-[1.3em]"></ion-icon>
                            <span class="text-[1em] font-bold">Home</span>
                        </button>
                    </li>
                    <li>
                        <button class="flex flex-col items-center text-gray-400 justify-around gap-1">
                            <ion-icon name="business-outline" class="text-[1.3em]"></ion-icon> 
                            <span class="text-[1em]  font-normal">Profil</span>
                        </button>
                    </li>
                    <li>
                        <button class="flex flex-col items-center text-gray-400 justify-around gap-1">
                            <ion-icon name="images-outline" class="text-[1.3em]"></ion-icon>
                            <span class="text-[1em]  font-normal">Galery</span>
                        </button>
                    </li>
                    <li>
                        <button class="flex flex-col items-center text-gray-400 justify-around gap-1">
                            <ion-icon name="aperture-outline" class="text-[1.3em]"></ion-icon>  
                            <span class="text-[1em]  font-normal">Kontak</span>
                        </button>
                    </li>
                    <li>
                        <button @click="open = !open" class="flex flex-col items-center text-gray-400 justify-around gap-1">
                            <ion-icon name="apps-outline" class="text-[1.3em]"></ion-icon> 
                            <span class="text-[1em] font-normal">Lainnya</span>
                        </button>
                    </li>
                    

                </ul>
                <!-- other small screen -->
                <div x-show="open"
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 scale-90"
                        x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-300"
                        x-transition:leave-start="opacity-100 scale-100"
                        x-transition:leave-end="opacity-0 scale-90" 
                        class="absolute bottom-28 left-0 right-0 flex justify-around gap-4 bg-slate-600">
                    <button href="#" class="flex flex-col items-center justify-around gap-1 text-gray-400">
                        <ion-icon name="paper-plane-outline" class="text-[1.3em]"></ion-icon>
                        <span class="text-[1em] font-normal">Informasi</span>
                    </button>
                    <button href="#" class="flex flex-col items-center justify-around gap-1 text-gray-400">
                        <ion-icon name="home-outline" class="text-[1.3em]"></ion-icon>
                        <span class="text-[1em] font-normal">Buku Tamu</span>
                    </button>
                
                </div>
            </div>
           
        </div>
    </nav>
    <!-- end namvbar -->
     <!-- Hero banner-->
    <div class="flex min-h-[60%] lg:min-h-[34rem] flex-col bg-wave top-52 lg:grid lg:grid-cols-12">
            <!-- content-kiri -->
            <div class="p-2 mt-2 gap-2 flex flex-col items-center text-center  lg:self-center order-2 mb-5 lg:mb-0 lg:order-1 lg:col-span-6">
                <h1 class="leading-tight text-2xl font-bold text-white font-sans-serif">Yayasan Amanah Batasa Bahtera</h1>
                <p class="text-white">
                Sebagai pembentuk insan yang beriman dan berakhlak mulia serta berbudi luhur memililki wawasan yang luas mampu menjalani sesuai kehidupan jaman
                </p>
                <p class="font-[gotu] font-semibold mt-5 text-white"> 
                        <ion-icon name="locate-outline"></ion-icon>
                        Desa Tangkil Kecamatan Caringin Kabupaten Bogor Jawa-Barat
                    </p>
                    <div>
                        <button   button class="bg-pink-500 py-2 px-3 rounded-lg my-8  text-white hover:bg-sky-600">Yuk Kenalan Lebih Jauh</button>
                    </div>
            </div>
            <!-- conten kanan -->
            <div class="p-4 order-1 lg:order-2 mt-28 lg:mt-0 lg:col-span-6 lg:self-center">
                <!-- carosel -->
                <div class="relative" x-data="{
                    activeSlide:1,
                        slides:[
                                {id:1,title:'Slide1',body:'Lorem, ipsum 1 dolor sit amet consectetur adipisicing elit. Asperiores, numquam?'},
                                {id:2,title:'Slide2',body:'Lorem, ipsum 2 dolor sit amet consectetur adipisicing elit. Asperiores, numquam?'},
                                {id:3,title:'Slide3',body:'Lorem, ipsum 3 dolor sit amet consectetur adipisicing elit. Asperiores, numquam?'},
                                {id:4,title:'Slide4',body:'Lorem, ipsum 4 dolor sit amet consectetur adipisicing elit. Asperiores, numquam?'},
                                {id:5,title:'Slide5',body:'Lorem, ipsum 5 dolor sit amet consectetur adipisicing elit. Asperiores, numquam?'}
                                
                        ],
                        loop(){
                                setInterval(()=>{this.activeSlide = this.activeSlide === this.slides.length ? this.slides[0].id : this.activeSlide + 1},3000)
                        }
                }" x-init="loop">

                    <!-- data looping -->
                    <template x-for="slide in slides" 
                    class="p3 -z-20" 
                    :key="slide.id">
                        <div x-show="activeSlide === slide.id" 
                             class="py-10 px-4 min-h-[90%] h-60 flex items-end text-white rounded-lg bg-blue-300 bg-opacity-15 sm:bg-red-400 sm:h-64 sm:flex sm:items-end">
                             <div>
                                <h2 class="text-2xl font-bold" x-text="slide.title"></h2>
                                <p class="text-base" x-text="slide.body"></p>
                             </div>

                        </div>

                    </template>
                    
                    <!-- tombol prev/next -->
                    <div class="absolute justify-center inset-0 hidden">

                        <div class="flex items-center justify-start w-1/2">
                            <button x-on:click="activeSlide = activeSlide === 1 ? slides.length : activeSlide-1"
                            class="w-12 h-12 rounded-full">
                                <ion-icon name="arrow-back-circle-outline" class="w-12 h-12 text-white"></ion-icon>
                            </button>

                        </div>
                        <div class="flex items-center justify-end w-full -mr-12">
                                    <button
                                    x-on:click="activeSlide = activeSlide === slides.length ? 1 : activeSlide + 1"
                                     class=" w-12 h-12 rounded-full font-bold hover:bg-sky-400 hover:text-white"> 
                                    <ion-icon name="arrow-forward-circle-outline" class="w-12 h-12 text-white"></ion-icon>
                                    </button>
                        </div>

                    </div>

                    <!-- indicator button -->
                    <div class="absolute w-full flex items-center justify-center px-4 py-2 gap-4">
                    
                        <template x-for="slide in slides" :key="slide.id">
                            <button 
                            class="flex-1 h-1  mb-2 rounded-full overflow-hidden transition-colors duration-200 ease-out hover:bg-bg-slate-600 hover:shadow-lg"
                            :class="{
                                'bg-pink-500' : activeSlide === slide.id,
                                'bg-slate-400' : activeSlide !== slide.id
                            }"  x-on:click="activeSlide=slide.id">

                            </button>
                        </template>

                    </div>

                </div>
                <!-- end Carosel -->

            </div>
    </div>
        <!-- end Hero baner -->

       <!-- statistik -->
    <div class="-mt-10 flex justify-around w-full overflow-hidden">
        <!-- card information -->
        <div class="w-32 h-20 md:w-60 shadow-lg bg-white relative rounded-lg">
            <div class="w-5 h-5 md:w-10 md:h-10 absolute rounded-full bg-pink-600 -right-1 -top-1 animate-ping"></div>
            <div class="flex items-center justify-center md:justify-around w-32 h-20 md:w-60 px-2 gap-2"> 
                <ion-icon name="person" class="size-12 md:size-16 text-gray-400"></ion-icon>
                <div class="flex flex-col items-center">
                    <small class="text-2xl font-extrabold text-pink-500 md:text-3xl">100</small>
                    <small class="text-base font-thin text-gray-400 md:text-2xl">Siswa</small>
                </div>
            </div>  
        </div>

        <div class="w-32 h-20 md:w-60 shadow-lg bg-white relative rounded-lg">
            <div class="w-5 h-5 md:w-10 md:h-10 absolute rounded-full bg-pink-600 -right-1 -top-1 animate-ping"></div>
            <div class="flex items-center justify-center md:justify-around w-32 h-20 md:w-60 px-2 gap-2"> 
                <ion-icon name="person" class="size-12 md:size-16 text-gray-400"></ion-icon>
                <div class="flex flex-col items-center">
                    <small class="text-2xl font-extrabold text-pink-500 md:text-3xl">100</small>
                    <small class="text-base font-thin text-gray-400 md:text-2xl">Guru</small>
                </div>
            </div>  
        </div>
        <div class="w-32 h-20 md:w-60 shadow-lg bg-white relative rounded-lg">
            <div class="w-5 h-5 md:w-10 md:h-10 absolute rounded-full bg-pink-600 -right-1 -top-1 animate-ping"></div>
            <div class="flex items-center justify-center md:justify-around w-32 h-20 md:w-60 px-2 gap-2"> 
                <ion-icon name="person" class="size-12 md:size-16 text-gray-400"></ion-icon>
                <div class="flex flex-col items-center">
                    <small class="text-2xl font-extrabold text-pink-500 md:text-3xl">100</small>
                    <small class="text-base font-thin text-gray-400 md:text-2xl">Sarana</small>
                </div>
            </div>  
        </div>

    </div>

   


    <!-- content -->
    <section class="min-h-svh p-4">

        <!--  -->
                            
        <!-- title -->
        <div class="m-auto flex justify-center mt-20">
            <h2 class="text-purple-400 font-bold text-2xl">Informasi Terbaru</h2>  
        </div>

        <!-- card information -->
        <div class="grid grid-cols-12 gap-3">
            <div class="min-h-56 col-span-12 sm:col-span-6 md:col-span-4 2xl:col-span-3 mt-4 shadow-lg shadow-slate-500 rounded-xl p-4 sm:flex-col">
                <h1 class="text-slate-600 font-extrabold">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae saepe facere cupiditate.</h1>
                <!-- time and add user information -->
                <div class="flex justify-start items-center gap-4">
                    <div class="flex items-center text-gray-600 font-normal text-xs">
                        <!-- time -->
                        <ion-icon name="time" class="mr-1"></ion-icon>
                        <span>20 Jan 2024 - 10:40:66 WIB</span>
                    </div>
                    <div class="font-bold text-gray-500 text-xs flex items-center">
                        <!-- user upload or updated -->
                        <ion-icon name="person" class="mr-1"></ion-icon> 
                        <small>Asep Riki</small>
                    </div>
                </div>
                <!-- card image and description -->
                <div class="flex flex-row gap-1 mt-1">
                    <div>
                        <img src="https://picsum.photos/300" alt="">
                    </div>
                    <div class="leading-2">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, consectetur.
                    </div>
                </div>
                <!-- views,like,and commment information -->
                <div class="my-2 flex justify-around gap-4 text-gray-500 text-sm">
                    <a href="#" class="flex items-center gap-2 cursor-pointer">
                        <span>100K</span>
                        <ion-icon name="eye"></ion-icon>
                    </a>
                    <div class="flex items-center gap-2">
                        <span>100K</span>
                        <ion-icon name="heart"></ion-icon>
                    </div>
                    <div class="flex items-center gap-2">
                        <span>100K</span>
                        <ion-icon name="mail-unread"></ion-icon>
                    </div>
                </div>
            </div>
            <div class="min-h-56 col-span-12 sm:col-span-6 md:col-span-4 2xl:col-span-3 mt-4 shadow-lg shadow-slate-500 rounded-xl p-4 sm:flex-col">
                <h1 class="text-slate-600 font-extrabold">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae saepe facere cupiditate.</h1>
                <!-- time and add user information -->
                <div class="flex justify-start items-center gap-4">
                    <div class="flex items-center text-gray-600 font-normal text-xs">
                        <!-- time -->
                        <ion-icon name="time" class="mr-1"></ion-icon>
                        <span>20 Jan 2024-10:40:66 WIB</span>
                    </div>
                    <div class="font-bold text-gray-500 text-xs flex items-center">
                        <!-- user upload or updated -->
                        <ion-icon name="person" class="mr-1"></ion-icon> 
                        <small>Asep Riki</small>
                    </div>
                </div>
                <!-- card image and description -->
                <div class="flex flex-row gap-1 mt-1">
                    <div>
                        <img src="https://picsum.photos/300" alt="">
                    </div>
                    <div class="leading-2">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, consectetur.
                    </div>
                </div>
                <!-- views,like,and commment information -->
                <div class="my-2 flex justify-around gap-4 text-gray-500 text-sm">
                    <a href="#" class="flex items-center gap-2 cursor-pointer">
                        <span>100K</span>
                        <ion-icon name="eye"></ion-icon>
                    </a>
                    <div class="flex items-center gap-2">
                        <span>100K</span>
                        <ion-icon name="heart"></ion-icon>
                    </div>
                    <div class="flex items-center gap-2">
                        <span>100K</span>
                        <ion-icon name="mail-unread"></ion-icon>
                    </div>
                </div>
            </div>  
            <div class="min-h-56 col-span-12 sm:col-span-6 md:col-span-4 2xl:col-span-3 mt-4 shadow-lg shadow-slate-500 rounded-xl p-4 sm:flex-col">
                <h1 class="text-slate-600 font-extrabold">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae saepe facere cupiditate.</h1>
                <!-- time and add user information -->
                <div class="flex justify-start items-center gap-4">
                    <div class="flex items-center text-gray-600 font-normal text-xs">
                        <!-- time -->
                        <ion-icon name="time" class="mr-1"></ion-icon>
                        <span>20 Jan 2024-10:40:66 WIB</span>
                    </div>
                    <div class="font-bold text-gray-500 text-xs flex items-center">
                        <!-- user upload or updated -->
                        <ion-icon name="person" class="mr-1"></ion-icon> 
                        <small>Asep Riki</small>
                    </div>
                </div>
                <!-- card image and description -->
                <div class="flex flex-row gap-1 mt-1">
                    <div>
                        <img src="https://picsum.photos/300" alt="">
                    </div>
                    <div class="leading-2">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, consectetur.
                    </div>
                </div>
                <!-- views,like,and commment information -->
                <div class="my-2 flex justify-around gap-4 text-gray-500 text-sm">
                    <a href="#" class="flex items-center gap-2 cursor-pointer">
                        <span>100K</span>
                        <ion-icon name="eye"></ion-icon>
                    </a>
                    <div class="flex items-center gap-2">
                        <span>100K</span>
                        <ion-icon name="heart"></ion-icon>
                    </div>
                    <div class="flex items-center gap-2">
                        <span>100K</span>
                        <ion-icon name="mail-unread"></ion-icon>
                    </div>
                </div>
            </div>
            <div class="min-h-56 col-span-12 sm:col-span-6 md:col-span-4 2xl:col-span-3 mt-4 shadow-lg shadow-slate-500 rounded-xl p-4 sm:flex-col">
                <h1 class="text-slate-600 font-extrabold">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae saepe facere cupiditate.</h1>
                <!-- time and add user information -->
                <div class="flex justify-start items-center gap-4">
                    <div class="flex items-center text-gray-600 font-normal text-xs">
                        <!-- time -->
                        <ion-icon name="time" class="mr-1"></ion-icon>
                        <span>20 Jan 2024-10:40:66 WIB</span>
                    </div>
                    <div class="font-bold text-gray-500 text-xs flex items-center">
                        <!-- user upload or updated -->
                        <ion-icon name="person" class="mr-1"></ion-icon> 
                        <small>Asep Riki</small>
                    </div>
                </div>
                <!-- card image and description -->
                <div class="flex flex-row gap-1 mt-1">
                    <div>
                        <img src="https://picsum.photos/300" alt="">
                    </div>
                    <div class="leading-2">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, consectetur.
                    </div>
                </div>
                <!-- views,like,and commment information -->
                <div class="my-2 flex justify-around gap-4 text-gray-500 text-sm">
                    <a href="#" class="flex items-center gap-2 cursor-pointer">
                        <span>100K</span>
                        <ion-icon name="eye"></ion-icon>
                    </a>
                    <div class="flex items-center gap-2">
                        <span>100K</span>
                        <ion-icon name="heart"></ion-icon>
                    </div>
                    <div class="flex items-center gap-2">
                        <span>100K</span>
                        <ion-icon name="mail-unread"></ion-icon>
                    </div>
                </div>
            </div>
        </div>
       
    </section>
    <!-- end Content -->

    <!-- contact -->
    <section class="min-h-svh p-4">
        <!-- title -->
        <div>
            <h2 class="text-purple-400 text-5xl">Contact</h2>
            <div class="flex gap-2 justify-around items-center">
                <div class="mt-4 flex flex-col gap-3">
                    <div class="flex flex-col">
                        <small class="font-normal text-base text-green-900">Hubungi Kami</small>
                        <span>+62 857-7747-1378</span>
                    </div>
                    <div class="flex flex-col">
                        <small class="font-normal text-base text-green-900">E-mail</small>
                        <span>yayasan.batasa@gmail.com</span>
                    </div>
                </div>
                <div class="flex flex-col gap-4">
                  
                    <div>
                        <div class="flex justify-start gap-1 items-center">
                            <ion-icon name="logo-instagram" class="size-5 text-pink-500"></ion-icon>
                            <small class="font-light">@yayasanbatasa</small>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-start gap-1 items-center">
                            <ion-icon name="logo-twitter" class="size-5 text-blue-500"></ion-icon>
                            <small class="font-light">@yayasanbatasa</small>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-start gap-1 items-center">
                            <ion-icon name="logo-facebook" class="size-5 text-blue-600"></ion-icon>
                            <small class="font-light">@yayasanbatasa</small>
                        </div>
                    </div>  
                    <div>
                        <div class="flex justify-start gap-1 items-center">
                            <ion-icon name="logo-youtube" class="size-5 text-pink-800"></ion-icon>
                            <small class="font-light">@yayasanbatasa</small>
                        </div>
                    </div>    
                </div>
            </div>
            
        </div>
    </section>
    
    <!-- FOOTER -->
    <footer class="bg-slate-700 fixed hidden lg:block bottom-0 left-0 right-0">
        <div class="mx-auto max-w-7xl px-6 py-4 md:flex md:items-center md:justify-between lg:px-8">
            <div class="flex justify-center space-x-6 md:order-2">
            <a href="#" class="text-gray-400 hover:text-gray-500">
                <span class="sr-only">Facebook</span>
                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                </svg>
                </a>
                <a href="#" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">Instagram</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
                    </svg>
                </a>
                <a href="#" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">X</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                    </svg>
                </a>
                <a href="#" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">Tiktok</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                    </svg>
                </a>
                <a href="#" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">YouTube</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd" d="M19.812 5.418c.861.23 1.538.907 1.768 1.768C21.998 8.746 22 12 22 12s0 3.255-.418 4.814a2.504 2.504 0 0 1-1.768 1.768c-1.56.419-7.814.419-7.814.419s-6.255 0-7.814-.419a2.505 2.505 0 0 1-1.768-1.768C2 15.255 2 12 2 12s0-3.255.417-4.814a2.507 2.507 0 0 1 1.768-1.768C5.744 5 11.998 5 11.998 5s6.255 0 7.814.418ZM15.194 12 10 15V9l5.194 3Z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
            <div class="mt-8 md:order-1 md:mt-0">
                <p class="text-center text-xs leading-5 text-gray-500">&copy; <?=date('Y')?> Yayasan Amanah Batasa, Inc. All rights reserved.</p>
            </div>
         </div>
    </footer>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
</body>
</html>