@extends('layouts.app')
@section('title', ' Fo-yam- Notre vision')
@section('content')
 <!-- hero section -->
 <section class="relative w-full h-max">
        <div class="mx-auto w-full px-5 sm:px-8 md:px-10 lg:px-6 max-w-screen-lg lg:max-w-screen-xl">
            <div
                class="relative flex items-center z-10 mx-auto w-full px-5 sm:px-8 md:px-14 lg:px-8 lg:max-w-screen-xl">
                <div class="absolute top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2 w-1/5 aspect-video blur-3xl opacity-40 skew-x-6 bg-gradient-to-tr from-sky-600 to-blue-400"></div>
                <div class="relative z-10 pt-28 pb-20 mx-auto max-w-screen-lg">
                    <div class="relative z-20 mx-auto flex flex-col space-y-4 text-center items-center gap-4">
                        <div class="flex items-center flex-col">
                            <div class="w-max">
                                <div
                                    class="border flex items-center gap-2 p-1 pr-5 rounded-3xl bg-blue-600 text-gray-200">
                                    <span class="bg-white text-blue-600 relative p-1 rounded-full">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                            class="w-3">
                                            <path fill-rule="evenodd"
                                                d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                    <span class="text-xs sm:text-sm line-clamp-1">plus qu'une famille</span>
                                </div>
                            </div>
                            <h1
                                class="max-w-4xl mx-auto text-2xl pb-1 sm:text-3xl md:text-5xl lg:text-6xl line-clamp-3 font-bold text-gray-800 ">
                                Lorem ipsum dolor sit <span
                                    class="text-transparent bg-clip-text bg-gradient-to-tr from-blue-600 to-sky-400">amet
                                    consectetur</span> adipisicing elit.
                            </h1>
                        </div>
                        <p class="text-gray-600 max-w-3xl">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. ggg Expedita, nulla ipsa?
                            Ullam fugit adipisci nobis sint aut debitis cumque quod voluptatum, laborum aperiam
                            fugiat officiis aliquid explicabo corrupti eveniet possimus.
                        </p>
                        <div class="pt-2 flex justify-center mx-auto">
                            <a href="#" class="relative flex py-3 px-8
                                        items-center 
                                        justify-center before:absolute before:inset-0 
                                        before:rounded-3xl focus:before:bg-blue-600/10
                                        before:bg-blue-600 
                                        before:transition before:duration-300 hover:before:scale-105 
                                        active:duration-75 active:before:scale-95">
                                <span class="relative text-sm font-semibold text-white">Adherer maintenant</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end hero section -->


    <!-- about section -->
    <section id="vision" class="pt-32">
        <div class="mx-auto w-full px-5 sm:px-8 md:px-10 lg:px-6 max-w-screen-lg lg:max-w-screen-xl">
            <div class="grid md:items-center md:grid-cols-2 gap-10">
                <div class="flex md:h-full">
                    <img src="images/young-and-styled.jpg" alt="about img"
                        class="md:h-full w-full rounded-3xl object-cover">
                </div>
                <div class="flex flex-col space-y-7">
                    <div class="flex flex-col space-y-6">
                        <div class="">
                            <div class="w-max">
                                <div
                                    class="border flex items-center gap-2 p-1 pr-5 rounded-3xl bg-blue-600 text-gray-200">
                                    <span class="bg-white text-blue-600 relative p-1 rounded-full">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                            class="w-3">
                                            <path fill-rule="evenodd"
                                                d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                    <span class="text-xs line-clamp-1">Qui nous sommes</span>
                                </div>
                            </div>
                            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-gray-800">
                                Nous creons un monde <span
                                    class="text-transparent bg-clip-text bg-gradient-to-tr from-blue-600 to-sky-400 ">lorem
                                    ispum</span>
                            </h2>
                        </div>

                        <div class="space-y-2">
                            <p class="text-gray-600 line-clamp-6">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil, cumque laborum in
                                aperiam enim, ipsa quidem veritatis molestiae exercitationem saepe, doloremque hic quos
                                ad facere? Accusantium tempora sit eum vero.
                            </p>
                            <p class="text-gray-600 line-clamp-6">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil, cumque laborum in
                                aperiam enim, ipsa quidem veritatis molestiae exercitationem saepe, doloremque hic quos
                                ad facere? Accusantium tempora sit eum vero.
                            </p>
                            <p class="text-gray-600">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil, cumque laborum in
                                aperiam enim, ipsa quidem veritatis molestiae exercitationem saepe, doloremque hic quos
                                ad facere? Accusantium tempora sit eum vero.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about section -->


    <!-- : notre vision -->
    <section class="pt-32">

        <div class="mx-auto w-full px-5 sm:px-8 md:px-10 lg:px-6 max-w-screen-lg lg:max-w-screen-xl">
            <div class="grid md:items-center md:grid-cols-2 gap-10 relative">
                <div
                    class="absolute top-20 left-0 w-40 h-24 sm:w-64 sm:h-36 skew-y-12 blur-3xl opacity-50 rounded-full bg-gradient-to-tr from-blue-600 to-sky-400">
                </div>
                <div class="flex flex-col space-y-7 relative">
                    <div class="flex flex-col space-y-6">
                        <div class="">
                            <div class="w-max">
                                <div
                                    class="border flex items-center gap-2 p-1 pr-5 rounded-3xl bg-blue-600 text-gray-200">
                                    <span class="bg-white text-blue-600 relative p-1 rounded-full">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                            class="w-3">
                                            <path fill-rule="evenodd"
                                                d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                    <span class="text-xs line-clamp-1">Ce que nous visons</span>
                                </div>
                            </div>
                            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-gray-800">
                                Nous avons une <span
                                    class="text-transparent bg-clip-text bg-gradient-to-tr from-blue-600 to-sky-400">VIsion
                                    lorem</span>
                            </h2>
                        </div>

                        <div class="space-y-2">
                            <p class="text-gray-600">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil, cumque laborum in
                                aperiam enim, ipsa quidem veritatis molestiae exercitationem saepe, doloremque hic quos
                                ad facere? Accusantium tempora sit eum vero.
                                <br> <br>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil, cumque laborum in
                                aperiam enim, ipsa quidem veritatis molestiae exercitationem saepe, doloremque hic quos
                                ad facere? Accusantium tempora sit eum vero.
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil, cumque laborum in
                                aperiam enim, ipsa quidem veritatis molestiae exercitationem saepe, doloremque hic quos
                                ad facere? Accusantium tempora sit eum vero.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="flex md:h-full">
                    <img src="images/young-and-styled.jpg" alt="about img"
                        class="md:h-full w-full rounded-3xl object-cover">
                </div>
            </div>
        </div>
    </section>
    <!-- : notre vision -->

    <!--  : mision et nos objectifs -->
    <section class="pt-32">
        <div class="mx-auto w-full px-5 sm:px-8 md:px-10 lg:px-6 max-w-screen-lg lg:max-w-screen-xl">
           
            <div class="grid md:items-stretch md:grid-cols-2 sm:gap-8 gap-6 lg:gap-10">
                <div class="md:!h-auto flex flex-col h-full p-10 rounded-3xl bg-white border border-gray-100 bg-opacity-50 shadow-2xl shadow-gray-200/60 ">
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-800">Notre <span class="text-transparent bg-clip-text bg-gradient-to-tr from-blue-600 to-sky-400">mission</span></h2>
                    <div class="pt-7 space-y-2">
                        <p class="text-gray-600">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil, cumque laborum in
                            aperiam enim, ipsa quidem veritatis molestiae exercitationem saepe, doloremque hic quos
                            ad facere? Accusantium tempora sit eum vero.
                            <br>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil, cumque laborum in
                            aperiam enim, ipsa quidem veritatis molestiae exercitationem saepe, doloremque hic quos
                            ad facere? Accusantium tempora sit eum vero.
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil, cumque laborum in
                            aperiam enim, ipsa quidem veritatis molestiae exercitationem saepe, doloremque hic quos
                            ad facere? Accusantium tempora sit eum vero.
                        </p>
                    </div>
                </div>

                <div class="md:!h-auto flex flex-col h-full p-10 rounded-3xl bg-white border border-gray-100 bg-opacity-50 shadow-2xl shadow-gray-200/60 ">
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-800">Nos <span class="text-transparent bg-clip-text bg-gradient-to-tr from-blue-600 to-sky-400">mission</span></h2>
                    <div class="pt-7 space-y-2">
                        <p class="text-gray-600">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil, cumque laborum in
                            aperiam enim, ipsa quidem veritatis molestiae exercitationem saepe, doloremque hic quos
                            ad facere? Accusantium tempora sit eum vero.
                            <br>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil, cumque laborum in
                            aperiam enim, ipsa quidem veritatis molestiae exercitationem saepe, doloremque hic quos
                            ad facere? Accusantium tempora sit eum vero.
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil, cumque laborum in
                            aperiam enim, ipsa quidem veritatis molestiae exercitationem saepe, doloremque hic quos
                            ad facere? Accusantium tempora sit eum vero.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  : mision et nos objectifs -->

    <!-- call to action -->
    <section class="pt-12 pb-16">
        <div class="mx-auto w-full px-5 sm:px-8 md:px-10 lg:px-6 max-w-screen-lg lg:max-w-screen-xl">
            <div class="bg-gradient-to-tr from-blue-600 to-sky-400 relative rounded-3xl">
                <div class="absolute top-1/2 -translate-y-1/2 left-1/2 blur-2xl -translate-x-1/2 w-40 h-36 skew-x-12 bg-gradient-to-tr from-blue-200 to-sky-600 rounded-full"></div>
                <div class="relative py-10 px-8">
                    <div class="m-auto space-y-6 md:w-8/12 lg:w-7/12">
                        <h1 class="text-center text-4xl font-bold text-white md:text-5xl">Get Started now</h1>
                        <p class="text-center text-xl text-gray-300">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae modi doloribus vitae sequi ipsa impedit 
                        </p>
                        <div class="flex flex-wrap justify-center gap-6">
                            <a href="adhesion.html" class="relative w-full sm:w-max flex py-3 px-8
                                    items-center 
                                    justify-center before:absolute before:inset-0 
                                    before:rounded-3xl focus:before:bg-blue-600/10
                                    before:bg-blue-600 
                                    before:transition before:duration-300 hover:before:scale-105 
                                    active:duration-75 active:before:scale-95">
                                <span class="relative text-white">Adherer maintenant</span>
                            </a>

                            <a href="about.html" class="relative w-full sm:w-max flex py-3 px-8
                                    items-center 
                                    justify-center before:absolute before:inset-0 
                                    before:rounded-3xl focus:before:bg-blue-600/10
                                    before:bg-blue-50 
                                    before:transition before:duration-300 hover:before:scale-105 
                                    active:duration-75 active:before:scale-95 before:border before:border-gray-200">
                                <span class="relative text-blue-600">En savoir plus</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end call to action -->
    @endsection