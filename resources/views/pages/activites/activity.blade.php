@extends('layouts.app')
@section('title', 'Nos Activites')


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
                                Notre file <span
                                    class="text-transparent bg-clip-text bg-gradient-to-tr from-blue-600 to-sky-400">amet
                                    d'actualite</span>
                            </h1>
                        </div>
                        <p class="text-gray-600 max-w-3xl">
                            Lisez toutes nos dernieres nouvelles ............
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end hero section -->

    <!-- our news -->
    <section class="">
        <div class="mx-auto w-full px-5 sm:px-8 md:px-10 lg:px-6 max-w-screen-lg lg:max-w-screen-xl">
            <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3 sm:items-stretch">

                <!-- card news -->
                <div class="flex !h-auto">
                    <div
                        class="group flex flex-col h-full p-1 rounded-3xl bg-white border border-gray-100 bg-opacity-50 shadow-2xl shadow-gray-200/60">
                        <div class="h-max min-h-max relative overflow-hidden rounded-xl">
                            <img src="images/unsflash.png" alt="art cover" loading="lazy" width="1000" height="667"
                                class="h-44 md:h-52 lg:h-64 w-full object-cover object-top transition duration-500 group-hover:scale-105" />
                        </div>
                        <div class="mt-3 px-4 pb-4 flex flex-col relative h-auto">
                            <div class="flex flex-col h-full">
                                <span
                                    class="flex items-center gap-2 text-gray-500 text-sm bg-gray-100 px-2 py-1 rounded-xl w-max">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        class="w-5 h-5">
                                        <path
                                            d="M5.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H6a.75.75 0 01-.75-.75V12zM6 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H6zM7.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H8a.75.75 0 01-.75-.75V12zM8 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H8zM9.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V10zM10 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H10zM9.25 14a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V14zM12 9.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V10a.75.75 0 00-.75-.75H12zM11.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H12a.75.75 0 01-.75-.75V12zM12 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H12zM13.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H14a.75.75 0 01-.75-.75V10zM14 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H14z" />
                                        <path fill-rule="evenodd"
                                            d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    12-12-2022
                                </span>
                                <a href="" class="pt-0.5 text-xl font-semibold text-gray-700 group-hover:text-blue-600">
                                    De fuga fugiat lorem ispum laboriosam expedita.
                                </a>
                                <p class="mt-4 mb-6 text-gray-600 line-clamp-2">
                                    Voluptates harum aliquam totam, doloribus eum impedit atque! Temporibus...
                                </p>
                            </div>
                            <div class="h-max min-h-max flex relative">
                                <a href="#" class="relative w-full lg:w-max flex py-2 px-4
                                                items-center 
                                                justify-center before:absolute before:inset-0 
                                                before:rounded-3xl focus:before:bg-blue-600/10
                                                before:bg-blue-600 
                                                before:transition before:duration-300 group-hover:before:scale-105 
                                                active:duration-75 active:before:scale-95">
                                    <span class="relative text-sm text-white flex items-center gap-2">
                                        Lire plus
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card news -->

                <!-- card news -->
                <div class="flex !h-auto">
                    <div
                        class="group flex flex-col h-full p-1 rounded-3xl bg-white border border-gray-100 bg-opacity-50 shadow-2xl shadow-gray-200/60">
                        <div class="h-max min-h-max relative overflow-hidden rounded-xl">
                            <img src="images/unsflash.png" alt="art cover" loading="lazy" width="1000" height="667"
                                class="h-44 md:h-52 lg:h-64 w-full object-cover object-top transition duration-500 group-hover:scale-105" />
                        </div>
                        <div class="mt-3 px-4 pb-4 flex flex-col relative h-auto">
                            <div class="flex flex-col h-full">
                                <span
                                    class="flex items-center gap-2 text-gray-500 text-sm bg-gray-100 px-2 py-1 rounded-xl w-max">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        class="w-5 h-5">
                                        <path
                                            d="M5.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H6a.75.75 0 01-.75-.75V12zM6 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H6zM7.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H8a.75.75 0 01-.75-.75V12zM8 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H8zM9.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V10zM10 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H10zM9.25 14a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V14zM12 9.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V10a.75.75 0 00-.75-.75H12zM11.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H12a.75.75 0 01-.75-.75V12zM12 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H12zM13.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H14a.75.75 0 01-.75-.75V10zM14 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H14z" />
                                        <path fill-rule="evenodd"
                                            d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    12-12-2022
                                </span>
                                <a href="" class="pt-0.5 text-xl font-semibold text-gray-700 group-hover:text-blue-600">
                                    De fuga fugiat lorem ispum laboriosam expedita.
                                </a>
                                <p class="mt-4 mb-6 text-gray-600 line-clamp-2">
                                    Voluptates harum aliquam totam, doloribus eum impedit atque! Temporibus...
                                </p>
                            </div>
                            <div class="h-max min-h-max flex relative">
                                <a href="#" class="relative w-full lg:w-max flex py-2 px-4
                                                items-center 
                                                justify-center before:absolute before:inset-0 
                                                before:rounded-3xl focus:before:bg-blue-600/10
                                                before:bg-blue-600 
                                                before:transition before:duration-300 group-hover:before:scale-105 
                                                active:duration-75 active:before:scale-95">
                                    <span class="relative text-sm text-white flex items-center gap-2">
                                        Lire plus
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card news -->

                <!-- card news -->
                <div class="flex !h-auto">
                    <div
                        class="group flex flex-col h-full p-1 rounded-3xl bg-white border border-gray-100 bg-opacity-50 shadow-2xl shadow-gray-200/60">
                        <div class="h-max min-h-max relative overflow-hidden rounded-xl">
                            <img src="images/unsflash.png" alt="art cover" loading="lazy" width="1000" height="667"
                                class="h-44 md:h-52 lg:h-64 w-full object-cover object-top transition duration-500 group-hover:scale-105" />
                        </div>
                        <div class="mt-3 px-4 pb-4 flex flex-col relative h-auto">
                            <div class="flex flex-col h-full">
                                <span
                                    class="flex items-center gap-2 text-gray-500 text-sm bg-gray-100 px-2 py-1 rounded-xl w-max">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        class="w-5 h-5">
                                        <path
                                            d="M5.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H6a.75.75 0 01-.75-.75V12zM6 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H6zM7.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H8a.75.75 0 01-.75-.75V12zM8 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H8zM9.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V10zM10 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H10zM9.25 14a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V14zM12 9.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V10a.75.75 0 00-.75-.75H12zM11.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H12a.75.75 0 01-.75-.75V12zM12 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H12zM13.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H14a.75.75 0 01-.75-.75V10zM14 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H14z" />
                                        <path fill-rule="evenodd"
                                            d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    12-12-2022
                                </span>
                                <a href="" class="pt-0.5 text-xl font-semibold text-gray-700 group-hover:text-blue-600">
                                    De fuga fugiat lorem ispum laboriosam expedita.
                                </a>
                                <p class="mt-4 mb-6 text-gray-600 line-clamp-2">
                                    Voluptates harum aliquam totam, doloribus eum impedit atque! Temporibus...
                                </p>
                            </div>
                            <div class="h-max min-h-max flex relative">
                                <a href="#" class="relative w-full lg:w-max flex py-2 px-4
                                                items-center 
                                                justify-center before:absolute before:inset-0 
                                                before:rounded-3xl focus:before:bg-blue-600/10
                                                before:bg-blue-600 
                                                before:transition before:duration-300 group-hover:before:scale-105 
                                                active:duration-75 active:before:scale-95">
                                    <span class="relative text-sm text-white flex items-center gap-2">
                                        Lire plus
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card news -->


                <!-- card news -->
                <div class="flex !h-auto">
                    <div
                        class="group flex flex-col h-full p-1 rounded-3xl bg-white border border-gray-100 bg-opacity-50 shadow-2xl shadow-gray-200/60">
                        <div class="h-max min-h-max relative overflow-hidden rounded-xl">
                            <img src="images/unsflash.png" alt="art cover" loading="lazy" width="1000" height="667"
                                class="h-44 md:h-52 lg:h-64 w-full object-cover object-top transition duration-500 group-hover:scale-105" />
                        </div>
                        <div class="mt-3 px-4 pb-4 flex flex-col relative h-auto">
                            <div class="flex flex-col h-full">
                                <span
                                    class="flex items-center gap-2 text-gray-500 text-sm bg-gray-100 px-2 py-1 rounded-xl w-max">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        class="w-5 h-5">
                                        <path
                                            d="M5.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H6a.75.75 0 01-.75-.75V12zM6 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H6zM7.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H8a.75.75 0 01-.75-.75V12zM8 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H8zM9.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V10zM10 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H10zM9.25 14a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V14zM12 9.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V10a.75.75 0 00-.75-.75H12zM11.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H12a.75.75 0 01-.75-.75V12zM12 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H12zM13.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H14a.75.75 0 01-.75-.75V10zM14 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H14z" />
                                        <path fill-rule="evenodd"
                                            d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    12-12-2022
                                </span>
                                <a href="" class="pt-0.5 text-xl font-semibold text-gray-700 group-hover:text-blue-600">
                                    De fuga fugiat lorem ispum laboriosam expedita.
                                </a>
                                <p class="mt-4 mb-6 text-gray-600 line-clamp-2">
                                    Voluptates harum aliquam totam, doloribus eum impedit atque! Temporibus...
                                </p>
                            </div>
                            <div class="h-max min-h-max flex relative">
                                <a href="#" class="relative w-full lg:w-max flex py-2 px-4
                                                items-center 
                                                justify-center before:absolute before:inset-0 
                                                before:rounded-3xl focus:before:bg-blue-600/10
                                                before:bg-blue-600 
                                                before:transition before:duration-300 group-hover:before:scale-105 
                                                active:duration-75 active:before:scale-95">
                                    <span class="relative text-sm text-white flex items-center gap-2">
                                        Lire plus
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card news -->


                <!-- card news -->
                <div class="flex !h-auto">
                    <div
                        class="group flex flex-col h-full p-1 rounded-3xl bg-white border border-gray-100 bg-opacity-50 shadow-2xl shadow-gray-200/60">
                        <div class="h-max min-h-max relative overflow-hidden rounded-xl">
                            <img src="images/unsflash.png" alt="art cover" loading="lazy" width="1000" height="667"
                                class="h-44 md:h-52 lg:h-64 w-full object-cover object-top transition duration-500 group-hover:scale-105" />
                        </div>
                        <div class="mt-3 px-4 pb-4 flex flex-col relative h-auto">
                            <div class="flex flex-col h-full">
                                <span
                                    class="flex items-center gap-2 text-gray-500 text-sm bg-gray-100 px-2 py-1 rounded-xl w-max">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        class="w-5 h-5">
                                        <path
                                            d="M5.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H6a.75.75 0 01-.75-.75V12zM6 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H6zM7.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H8a.75.75 0 01-.75-.75V12zM8 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H8zM9.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V10zM10 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H10zM9.25 14a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V14zM12 9.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V10a.75.75 0 00-.75-.75H12zM11.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H12a.75.75 0 01-.75-.75V12zM12 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H12zM13.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H14a.75.75 0 01-.75-.75V10zM14 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H14z" />
                                        <path fill-rule="evenodd"
                                            d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    12-12-2022
                                </span>
                                <a href="" class="pt-0.5 text-xl font-semibold text-gray-700 group-hover:text-blue-600">
                                    De fuga fugiat lorem ispum laboriosam expedita.
                                </a>
                                <p class="mt-4 mb-6 text-gray-600 line-clamp-2">
                                    Voluptates harum aliquam totam, doloribus eum impedit atque! Temporibus...
                                </p>
                            </div>
                            <div class="h-max min-h-max flex relative">
                                <a href="#" class="relative w-full lg:w-max flex py-2 px-4
                                                items-center 
                                                justify-center before:absolute before:inset-0 
                                                before:rounded-3xl focus:before:bg-blue-600/10
                                                before:bg-blue-600 
                                                before:transition before:duration-300 group-hover:before:scale-105 
                                                active:duration-75 active:before:scale-95">
                                    <span class="relative text-sm text-white flex items-center gap-2">
                                        Lire plus
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card news -->


                <!-- card news -->
                <div class="flex !h-auto">
                    <div
                        class="group flex flex-col h-full p-1 rounded-3xl bg-white border border-gray-100 bg-opacity-50 shadow-2xl shadow-gray-200/60">
                        <div class="h-max min-h-max relative overflow-hidden rounded-xl">
                            <img src="images/unsflash.png" alt="art cover" loading="lazy" width="1000" height="667"
                                class="h-44 md:h-52 lg:h-64 w-full object-cover object-top transition duration-500 group-hover:scale-105" />
                        </div>
                        <div class="mt-3 px-4 pb-4 flex flex-col relative h-auto">
                            <div class="flex flex-col h-full">
                                <span
                                    class="flex items-center gap-2 text-gray-500 text-sm bg-gray-100 px-2 py-1 rounded-xl w-max">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        class="w-5 h-5">
                                        <path
                                            d="M5.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H6a.75.75 0 01-.75-.75V12zM6 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H6zM7.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H8a.75.75 0 01-.75-.75V12zM8 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H8zM9.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V10zM10 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H10zM9.25 14a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V14zM12 9.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V10a.75.75 0 00-.75-.75H12zM11.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H12a.75.75 0 01-.75-.75V12zM12 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H12zM13.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H14a.75.75 0 01-.75-.75V10zM14 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H14z" />
                                        <path fill-rule="evenodd"
                                            d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    12-12-2022
                                </span>
                                <a href="" class="pt-0.5 text-xl font-semibold text-gray-700 group-hover:text-blue-600">
                                    De fuga fugiat lorem ispum laboriosam expedita.
                                </a>
                                <p class="mt-4 mb-6 text-gray-600 line-clamp-2">
                                    Voluptates harum aliquam totam, doloribus eum impedit atque! Temporibus...
                                </p>
                            </div>
                            <div class="h-max min-h-max flex relative">
                                <a href="#" class="relative w-full lg:w-max flex py-2 px-4
                                                items-center 
                                                justify-center before:absolute before:inset-0 
                                                before:rounded-3xl focus:before:bg-blue-600/10
                                                before:bg-blue-600 
                                                before:transition before:duration-300 group-hover:before:scale-105 
                                                active:duration-75 active:before:scale-95">
                                    <span class="relative text-sm text-white flex items-center gap-2">
                                        Lire plus
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card news -->
            </div>


            <!-- pagination -->
            <div class="pt-12 flex justify-center">
                <div class="w-max p-2 select-none bg-gray-50 border border-gray-200 rounded-full">
                    <ul class="flex items-center gap-2">
                        <li class="mr-4">
                            <a href="" class="text-gray-500 hover:text-blue-600 p-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-2 stroke-current"
                                    height="22.243" viewBox="0 0 12.621 22.243">
                                    <path id="Icon_feather-chevron-left" data-name="Icon feather-chevron-left"
                                        d="M22.5,27l-9-9,9-9" transform="translate(-12 -6.879)" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="3"></path>
                                </svg>
                            </a>
                            
                        </li>


                        <li class="rounded-full bg-blue-600 text-white">
                            <span class="flex h-8 w-8 items-center justify-center">1</span>
                        </li>
                        <li class="rounded-full text-gray-400 bg-transparent hover:bg-gray-100 transition">
                            <a class="h-10 w-10 grid place-content-center rounded-full" href="/blocks?page=2">2</a>
                        </li>
                        <li class="rounded-full text-gray-400 bg-transparent hover:bg-gray-100 transition">
                            <a class="h-10 w-10 grid place-content-center rounded-full" href="/blocks?page=3">3</a>
                        </li>
                        <li class="rounded-full text-gray-400 bg-transparent hover:bg-gray-100 transition">
                            <a class="h-10 w-10 grid place-content-center rounded-full" href="/blocks?page=4">4</a>
                        </li>
                        

                        <li class="ml-4">
                            <a href="news.html" class="text-gray-500 hover:text-blue-600 p-2">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="w-2 stroke-current" height="22.243"
                                    viewBox="0 0 12.621 22.243">
                                    <path id="Icon_feather-chevron-left" data-name="Icon feather-chevron-left"
                                        d="M22.5,27l-9-9,9-9" transform="translate(24.621 29.121) rotate(180)"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="3">
                                    </path>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- end pagination -->
        </div>
    </section>
    <!-- en our news -->


    <!-- :  call to action -->
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
    <!-- :  end call to action -->

@endsection