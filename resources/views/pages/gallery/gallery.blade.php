@extends('layouts.app')
@section("title", "Fo-yam - Notre Gallerie")


@section('content')
 <!-- hero section -->
 <section class="relative w-full h-max">
        <div class="mx-auto w-full px-5 sm:px-8 md:px-10 lg:px-6 max-w-screen-lg lg:max-w-screen-xl">
            <div
                class="relative flex items-center z-10 mx-auto w-full px-5 sm:px-8 md:px-14 lg:px-8 lg:max-w-screen-xl">
                <div
                    class="absolute top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2 w-1/5 aspect-video blur-3xl opacity-40 skew-x-6 bg-gradient-to-tr from-sky-600 to-blue-400">
                </div>
                <div class="relative z-10 pt-10 pb-16 mx-auto max-w-screen-lg">
                    <div class="relative z-20 mx-auto flex flex-col space-y-4 text-center items-center gap-4">
                        <div class="flex items-center flex-col">
                            <h1
                                class="max-w-4xl mx-auto text-2xl pb-1 sm:text-3xl md:text-5xl lg:text-6xl line-clamp-3 font-bold text-gray-800 flex">
                                Notre<span
                                    class="text-transparent bg-clip-text bg-gradient-to-tr from-blue-600 to-sky-400">Gallerie</span>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end hero section -->
    
    <section class="pb-20">
        <div class="mx-auto w-full px-5 sm:px-8 md:px-10 lg:px-6 max-w-screen-lg lg:max-w-screen-xl">
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 md:gap-8">
                <a data-fslightbox="first-lightbox" href="images/unsflash.png" class="col-span-1 w-full aspect-square transition overflow-hidden rounded-xl">
                    <img src="images/unsflash.png" alt="Image" width="400" class="transition-all duration-300 ease-linear w-full h-full object-cover hover:scale-105">
                </a>
                <a data-fslightbox="first-lightbox" href="./images/young-and-styled.jpg" class="col-span-1 w-full aspect-square transition overflow-hidden rounded-xl">
                    <img src="images/young-and-styled.jpg" alt="Image" width="400" class="transition-all duration-300 ease-linear w-full h-full object-cover hover:scale-105">
                </a>
                <a data-fslightbox="first-lightbox" href="images/unsflash.png" class="col-span-1 w-full aspect-square transition overflow-hidden rounded-xl">
                    <img src="images/unsflash.png" alt="Image" width="400" class="transition-all duration-300 ease-linear w-full h-full object-cover hover:scale-105">
                </a>
                <a data-fslightbox="first-lightbox" href="./images/young-and-styled.jpg" class="col-span-1 w-full aspect-square transition overflow-hidden rounded-xl">
                    <img src="images/young-and-styled.jpg" alt="Image" width="400" class="transition-all duration-300 ease-linear w-full h-full object-cover hover:scale-105">
                </a>
            </div>
        </div>
    </section>



@endsection