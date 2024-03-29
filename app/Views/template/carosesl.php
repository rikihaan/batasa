 <!-- banner Hero -->
 <div class="grid grid-cols-12 justify-center items-center">
                <!-- content kiri -->
                <div class="col-span-5 p-6">
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
                <div class="col-span-7 ">
                    <!-- carosel -->
                    <div 
                    class="max-w-2xl mx-auto relative"
                    x-data="{
                        activeSlide:1,
                        slides:[
                                {id:1,title:'Slide1',body:'Lorem, ipsum 1 dolor sit amet consectetur adipisicing elit. Asperiores, numquam?'},
                                {id:2,title:'Slide2',body:'Lorem, ipsum 2 dolor sit amet consectetur adipisicing elit. Asperiores, numquam?'},
                                {id:3,title:'Slide3',body:'Lorem, ipsum 3 dolor sit amet consectetur adipisicing elit. Asperiores, numquam?'},
                                {id:4,title:'Slide4',body:'Lorem, ipsum 4 dolor sit amet consectetur adipisicing elit. Asperiores, numquam?'},
                                {id:5,title:'Slide5',body:'Lorem, ipsum 5 dolor sit amet consectetur adipisicing elit. Asperiores, numquam?'}
                                
                            ],
                            loop(){
                                setInterval(()=>{this.activeSlide = this.activeSlide === this.slides.length ? this.slides[0].id : this.activeSlide + 1},2000)
                            }
                        }"
                        x-init="loop"
                        > 
                        <!-- data lloping -->
                        <template x-for="slide in slides" :key="slide.id">
                            <div x-show="activeSlide === slide.id" 
                                 class="h-80 w-full flex items-center bg-slate-500 text-white rounded-lg opacity-30">
                                 <div>
                                    <h2 class="text-2xl font-bold" x-text="slide.title"></h2>
                                    <p class="text-base" x-text="slide.body"></p>
                                 </div>
                                    
                            </div>
                            
                        </template>

                        <!-- tombole prev/next -->
                        <div class="absolute inset-0 flex justify-center">
                            <div class="flex items-center justify-start w-1/2 -ml-12">
                                    <button  
                                    x-on:click="activeSlide = activeSlide === 1 ? slides.length : activeSlide - 1"
                                    class="w-12 h-12 rounded-full font-bold hover:bg-sky-400 hover:text-white"> 
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

                        <!-- button -->
                        <div class="absolute w-full flex items-center justify-center px-4 py-5">
                            <template x-for="slide in slides" :key="slide.id">
                                <button class="flex-1 h-2 w-4 mb-2 rounded-full overflow-hidden transition-colors duration-200 ease-out hover:bg-slate-600 hover:shadow-lg" :class="{
                                    'bg-red-400' : activeSlide === slide.id,
                                    'bg-slate-300' :activeSlide !== slide.id
                                }"
                                x-on:click="activeSlide = slide.id"
                                ></button>
                            </template>
                        </div>
                    </div>
                </div>
             </div>
            <!-- End Banner Hero -->