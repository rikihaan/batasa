<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="<?=base_url("css/tailwindcss.css")?>">
</head>
<body>
    <!-- navabar -->
    <nav class="py-9 px-4">
        <div class="container mx-auto">
            <div class="flex justify-between items-center">
                <img src="<?=base_url("img/logo.png")?>" alt="logo" class="w-[16%] lg:w-[8%]">
                <ion-icon name="menu-outline" class="text-4xl text-sky-600"></ion-icon>
            </div>
        </div>
        <!-- navbar bawah -->
        <div class="fixed bottom-0 left-0 right-0 px-4 py-8">
            <ul class="flex justify-around">
                <li>
                    <a href="#" class="flex flex-col items-center justify-around gap-1 text-sky-400">
                        <ion-icon name="home-outline" class="text-2xl"></ion-icon>
                        <span class="text-base font-bold">Home</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex flex-col items-center text-gray-400 justify-around gap-1">
                        <ion-icon name="home-outline" class="text-2xl"></ion-icon>   
                        <span class="text-base font-normal">Galery</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex flex-col items-center text-gray-400 justify-around gap-1">
                        <ion-icon name="home-outline" class="text-2xl"></ion-icon>   
                        <span class="text-base font-normal">Kegiatan</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex flex-col items-center text-gray-400 justify-around gap-1">
                        <ion-icon name="home-outline" class="text-2xl"></ion-icon>   
                        <span class="text-base font-normal">Blog</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex flex-col items-center text-gray-400 justify-around gap-1">
                        <ion-icon name="apps-outline" class="text-2xl"></ion-icon> 
                        <span class="text-base font-normal">Lainnya</span>
                    </a>
                </li>
                

            </ul>
        </div>
    </nav>
    <!-- namvbar -->
    <!-- ionic -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
</body>
</html>