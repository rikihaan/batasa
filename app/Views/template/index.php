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
    <nav class="py-9 px-4 opacity-75 bg-wave" x-data="{navOpen:false}">
        <div>
            <div class="container mx-auto">
                <div class="flex justify-between items-center">
                    <img src="<?=base_url("img/logo.svg")?>" alt="logo" class=" text-white w-[36%] sm:w-[23%] lg:w-[18%] order-1 sm:order-2">
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
                        x-transition:leave-start="opacity-100 scale-100"
                        x-transition:leave-end="opacity-0 scale-90" 
                x-data="{open: false}" class="fixed bottom-0 left-0 right-0 p-2 border lg:hidden">
                <ul class="flex justify-around">
                    <li>
                        <button class="flex flex-col items-center justify-around gap-1 text-sky-400">
                            <ion-icon name="home-outline" class="text-[1.3em]"></ion-icon>
                            <span class="text-[1em] font-bold">Home</span>
                        </button>
                    </li>
                    <li>
                        <button class="flex flex-col items-center text-gray-400 justify-around gap-1">
                            <ion-icon name="business-outline" class="text-[1.3em]"></ion-icon> 
                            <span class="text-[1em] opacity-50 font-normal">Profil</span>
                        </button>
                    </li>
                    <li>
                        <button class="flex flex-col items-center text-gray-400 justify-around gap-1">
                            <ion-icon name="images-outline" class="text-[1.3em]"></ion-icon>
                            <span class="text-[1em] opacity-50 font-normal">Galery</span>
                        </button>
                    </li>
                    <li>
                        <button class="flex flex-col items-center text-gray-400 justify-around gap-1">
                            <ion-icon name="aperture-outline" class="text-[1.3em]"></ion-icon>  
                            <span class="text-[1em] opacity-50 font-normal">Kontak</span>
                        </button>
                    </li>
                    <li>
                        <button @click="open = !open" class="flex flex-col items-center text-gray-400 justify-around gap-1">
                            <ion-icon name="apps-outline" class="text-[1.3em]"></ion-icon> 
                            <span class="text-[1em] opacity-50 font-normal">Lainnya</span>
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
                        class="absolute bottom-28 left-0 right-0 flex justify-around gap-4">
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
            <!-- banner Hero -->
            <div class="grid grid-cols-12">
                <!-- content kiri -->
                <div class="col-span-6 p-6">
                    <h1 class="text-5xl font-sans-serif text-ellipsis mb-8 leading-tight text-white">Yayasan Amanah Batasa Bahktera</h1>
                    <p class="mt-3 text-white">Sebagai pembentuk insan yang beriman dan berakhlak mulia serta berbudi luhur memililki wawasan yang luas mampu menjalani sesuai kehidupan jaman</p>
                    <p class="font-[gotu] font-semibold mt-5 text-white"> 
                        <ion-icon name="locate-outline"></ion-icon>
                        Desa Tangkil Kecamatan Caringin Kabupaten Bogor Jawa-Barat
                    </p>
                    <div>

                        <button class="bg-pink-500 py-2 px-3 rounded-lg my-8  text-white hover:bg-sky-600">Yuk Kenalan Lebih Jauh</button>
                    </div>
                </div>

                <!-- content kanan -->
                <div class="col-span-6">Righ</div>
             </div>
            <!-- End Banner Hero -->
        </div>

    </nav>
    <!-- end namvbar -->


    <!-- content -->
    <section>
        <h1>Hello Contents</h1>
    </section>
    <!-- end Content -->
    
    <!-- FOOTER -->
    <footer class="bg-white">
        <div class="mx-auto max-w-7xl px-6 py-12 md:flex md:items-center md:justify-between lg:px-8">
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