@extends('layouts.app')
@section('title', ' Fo-yam -  Acceuil')
@section('content')
<section class="relative w-full h-max">
        <div class="swiper-hero swiper !w-full !relative">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper !bg-transparent w-full relative">

                <div class="swiper-slide flex items-center relative">
                    <img src="{{asset('images/immat.jpg')}}" alt="bg" width="800"
                        class=" w-full h-full absolute left-0 top-0 object-cover z-0">
                    <div class="absolute z-10 inset-0 bg-slate-600 bg-opacity-70"></div>
                    <div
                        class="relative flex items-center z-40 mx-auto w-full px-5 sm:px-8 md:px-14 lg:px-8 lg:max-w-screen-xl">
                        <div class="relative z-40 py-32 mx-auto max-w-screen-lg">
                            <div class="relative z-40 mx-auto flex flex-col space-y-4 text-center items-center gap-4">
                                <div class="flex items-center flex-col">
                                   <!-- <div class="w-max">
                                        <div
                                            class="border flex items-center gap-2 p-1 pr-5 bg-blue-800 bg-opacity-40 rounded-3xl border-blue-600 text-gray-200">
                                            <span
                                                class="bg-white bg-opacity-50 text-blue-600 relative p-1.5 sm:p-2 rounded-full">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                    fill="currentColor" class="w-3 h-3 sm:w-4 sm:h-4">
                                                    <path fill-rule="evenodd"
                                                        d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </span>
                                            <span class="text-xs sm:text-sm line-clamp-1">plus qu'une famille</span>
                                        </div>
                                    </div>-->
                                    <h1
                                        class="max-w-4xl mx-auto text-2xl pb-1 sm:text-3xl md:text-5xl lg:text-6xl line-clamp-3 font-bold text-white flex">
                                        Ensemble  travallons à réduire la pauvreté,  et à soutenir les personnes les plus vulnérables
                                    </h1>
                                </div>
                                <p class="text-gray-100 max-w-3xl">
                                   
                               Rejoignez-nous et contribuez à faire une différence. Avec votre soutien, nous serons en mesure de fournir des soins et des services plus précieux aux communautés et de fournir un soutien aux initiatives qui ont le plus besoin d'aide.
                                </p>
                                <div class="pt-2 flex justify-center mx-auto">
                                    <a href="#" class="relative flex py-3 px-8
                                        items-center 
                                        justify-center before:absolute before:inset-0 
                                        before:rounded-3xl focus:before:bg-blue-600/10
                                        before:bg-blue-600 
                                        before:transition before:duration-300 hover:before:scale-105 
                                        active:duration-75 active:before:scale-95">
                                        <span class="relative text-sm font-semibold text-white">En Savoir plus</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="swiper-slide flex items-center relative">
                    <img src="{{asset('images/adherez.jpg')}}" alt="bg" width="800"
                        class=" w-full h-full absolute left-0 top-0 object-cover z-0">
                    <div class="absolute z-10 inset-0 bg-slate-600 bg-opacity-70"></div>
                    <div
                        class="relative flex items-center z-40 mx-auto w-full px-5 sm:px-8 md:px-14 lg:px-8 lg:max-w-screen-xl">
                        <div class="relative z-40 py-32 mx-auto max-w-screen-lg">
                            <div class="relative z-40 mx-auto flex flex-col space-y-4 text-center items-center gap-4">
                                <div class="flex items-center flex-col">
                                    <div class="w-max">
                                        <div
                                            class="border flex items-center gap-2 p-1 pr-5 bg-blue-800 bg-opacity-40 rounded-3xl border-blue-600 text-gray-200">
                                            <span
                                                class="bg-white bg-opacity-50 text-blue-600 relative p-1.5 sm:p-2 rounded-full">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                    fill="currentColor" class="w-3 h-3 sm:w-4 sm:h-4">
                                                    <path fill-rule="evenodd"
                                                        d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </span>
                                            <span class="text-xs sm:text-sm line-clamp-1">Bienvenue sur le site offciels de FO</span>
                                        </div>
                                    </div>
                                    <h1
                                        class="max-w-4xl mx-auto text-2xl pb-1 sm:text-3xl md:text-5xl lg:text-6xl line-clamp-3 font-bold text-white flex">
                                        Rejoignez notre fondation et faites votre part pour que le changement ait lieu
                                    </h1>
                                </div>
                                <p class="text-gray-100 max-w-3xl">
                                Nous luttons pour des causes vitales, que ce soit pour l'éco-responsabilité, les droits des femmes, Les enfant en rupture familiale, Les personnes vivant avec Handicap, les viols des filles mineurs et veuves, la défense des droits humains. Nous sommes ouverts à tous et chacun peut contribuer selon ses moyens. Filez vite à notre rencontre et devenez le composant actif de ce mouvement pour le changement!
                                </p>
                                <div class="pt-2 flex justify-center mx-auto">
                                    <a href="#" class="relative flex py-3 px-8
                                        items-center 
                                        justify-center before:absolute before:inset-0 
                                        before:rounded-3xl focus:before:bg-blue-600/10
                                        before:bg-blue-600 
                                        before:transition before:duration-300 hover:before:scale-105 
                                        active:duration-75 active:before:scale-95">
                                        <span class="relative text-sm font-semibold text-white">En Savoir plus</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide flex items-center relative">
                    <img src="{{asset('images/adherez.jpg')}}" alt="bg" width="800"
                        class=" w-full h-full absolute left-0 top-0 object-cover z-0">
                    <div class="absolute z-10 inset-0 bg-slate-600 bg-opacity-70"></div>
                    <div
                        class="relative flex items-center z-40 mx-auto w-full px-5 sm:px-8 md:px-14 lg:px-8 lg:max-w-screen-xl">
                        <div class="relative z-40 py-32 mx-auto max-w-screen-lg">
                            <div class="relative z-40 mx-auto flex flex-col space-y-4 text-center items-center gap-4">
                                <div class="flex items-center flex-col">
                                    <div class="w-max">
                                        <div
                                            class="border flex items-center gap-2 p-1 pr-5 bg-blue-800 bg-opacity-40 rounded-3xl border-blue-600 text-gray-200">
                                            <span
                                                class="bg-white bg-opacity-50 text-blue-600 relative p-1.5 sm:p-2 rounded-full">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                    fill="currentColor" class="w-3 h-3 sm:w-4 sm:h-4">
                                                    <path fill-rule="evenodd"
                                                        d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </span>
                                            <span class="text-xs sm:text-sm line-clamp-1">plus qu'une famille</span>
                                        </div>
                                    </div>
                                    <h1
                                        class="max-w-4xl mx-auto text-2xl pb-1 sm:text-3xl md:text-5xl lg:text-6xl line-clamp-3 font-bold text-white flex">
                                        Travaillons sans relâche pour améliorer les conditions de vie. 
                                    </h1>
                                </div>
                                <p class="text-gray-100 max-w-3xl">
                                Rejoignez notre mouvement pour faire une différence réelle dans la vie des personnes les plus vulnérables dans notre communauté. En tant qu'organisation non gouvernementale, travaillons sans relâche pour améliorer les conditions de vie des sans-abris, des personnes âgées et des enfants à risque. Avec votre soutien, nous pouvons continuer à fournir des repas chauds, des soins de santé et des logements abordables pour ceux qui en ont le plus besoin. Faites un don aujourd'hui et faites partie de la solution pour construire une société plus juste et plus équitable pour tous..
                                </p>
                                <div class="pt-2 flex justify-center mx-auto">
                                    <a href="#" class="relative flex py-3 px-8
                                        items-center 
                                        justify-center before:absolute before:inset-0 
                                        before:rounded-3xl focus:before:bg-blue-600/10
                                        before:bg-blue-600 
                                        before:transition before:duration-300 hover:before:scale-105 
                                        active:duration-75 active:before:scale-95">
                                        <span class="relative text-sm font-semibold text-white">En Savoir plus</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>


            <div class="absolute w-full bottom-14 z-10 right-0">
                <div class="mx-auto px-5 sm:px-8 md:px-10 lg:px-6 w-max">
                    <div class="p-1.5 bg-blue-600/60 rounded-full border-blue-600 border">
                        <div class="home-swiper-pagination flex gap-2 items-center"></div>
                    </div>
                </div>
            </div>

            <div
                class="absolute top-32 md:top-1/2 md:-translate-y-1/2 left-0 z-10 w-full md:flex hidden invisible md:visible">
                <!-- If we need navigation buttons -->
                <div
                    class="mx-auto w-full flex justify-center md:justify-between text-white items-center gap-2 px-5 sm:px-8 md:px-10 lg:px-6 max-w-screen-lg lg:max-w-screen-xl relative">
                    <div
                        class="swip-prev-homeslide cursor-pointer relative p-3 rounded-full bg-slate-800 bg-opacity-70 text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                            <path fill-rule="evenodd"
                                d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div
                        class="swip-next-homeslide cursor-pointer relative p-3 rounded-full bg-slate-800 bg-opacity-70 text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                            <path fill-rule="evenodd"
                                d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="pt-32">
        <div class="mx-auto w-full px-5 sm:px-8 md:px-10 lg:px-6 max-w-screen-lg lg:max-w-screen-xl">
            <div class="grid md:items-center md:grid-cols-2 gap-10">
                <div class="flex md:h-full">
                    <img src="{{asset('images/immat.jpg')}}" alt="about img"
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
                                    <span class="text-xs line-clamp-1">Présentation générale de la fondation</span>
                                </div>
                            </div>
                            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-gray-800">
                            Bienvenue sur le site officiel de <span class="text-transparent bg-clip-text bg-gradient-to-tr from-blue-600 to-sky-400 ">FO-YAM</span>
                            </h2>
                        </div>

                        <div class="space-y-2">
                            <p class="text-gray-600 line-clamp-6">
                            Créée A Lubumbashi, chef lieu de la province du haut katanga, en Date du 08 Juillet 2020 conforment a la loi n 004/2001 du 30 Juillet 2001 portant disposition générales applicables aux assoctions sans but lucratif dénommée <span class="text-transparent bg-clip-text bg-gradient-to-tr from-blue-600 to-sky-400 ">FONDATION YAMBA << FO-YAM>></span>  
                            </p>
                            <p  class="text-gray-600 line-clamp-6">
                            

                            Une organisation dédiée à apporter une aide vitale aux enfants en rupture familiale, aux orphelins, aux personnes âgées, aux personnes vivant avec un handicap, aux filles mineures et veuves victimes de violences commises par des hommes.
                            </p>
                           
                        </div>
                    </div>
                    <div class="">
                        <a href="{{ route('pages.about')}}" class="relative w-full lg:w-max flex py-3 px-8
                                items-center 
                                justify-center before:absolute before:inset-0 
                                before:rounded-3xl focus:before:bg-blue-600/10
                                before:bg-blue-600 
                                 before:transition before:duration-300 hover:before:scale-105 
                                 active:duration-75 active:before:scale-95">
                            <span class="relative text-sm font-semibold text-white">En savoir plus</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                                Notre Mission<span class="text-transparent bg-clip-text bg-gradient-to-tr from-blue-600 to-sky-400"> fo-yam</span>
                            </h2>
                        </div>

                        <div class="space-y-2">
                            <p class="text-gray-600">
                            Notre mission est de soutenir les groupes les plus vulnérables de notre société en leur offrant une aide financière, matérielle et morale. Nous croyons en leur potentiel et en leur capacité à surmonter les défis auxquels ils sont confrontés et à construire un avenir meilleur pour eux-mêmes et pour leur communauté.
                            </p>
                            <p>

                            Nos actions:
                                Aide financière pour les soins médicaux, la nourriture et le logement
                                Programme d'éducation pour les enfants en rupture familiale et les orphelins
                                Soutien aux personnes âgées pour améliorer leur qualité de vie
                                Services pour les personnes vivant avec un handicap pour les aider à surmonter les obstacles de la vie quotidienne
                                Aide aux filles mineures et veuves victimes de violences pour les aider à surmonter les traumatismes 
                            </p>
                        </div>
                    </div>
                </div>
                <div class="flex md:h-full">
                    <img src="{{asset('images/immat.jpg')}}" alt="about img"
                        class="md:h-full w-full rounded-3xl object-cover">
                </div>
            </div>
        </div>
    </section>

    <section class="pt-32">
        <div class="mx-auto w-full px-5 sm:px-8 md:px-10 lg:px-6 max-w-screen-lg lg:max-w-screen-xl">
            <div class="flex flex-col items-center text-center">
                <div class="w-max">
                    <div class="border flex items-center gap-2 p-1 pr-5 rounded-3xl bg-blue-600 text-gray-200">
                        <span class="bg-white text-blue-600 relative p-1 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-3">
                                <path fill-rule="evenodd"
                                    d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                        <span class="text-xs line-clamp-1">Nos dernieres nouvelles</span>
                    </div>
                </div>
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-800">Actualites</h2>
            </div>
            <div class="pt-7 w-full">
                <div class="latestnews-swiper swiper">
                    <div class="swiper-wrapper !bg-transparent">

                        <!-- swiper slide start -->
                        <div class="swiper-slide !h-auto">
                            <div
                                class="group flex flex-col h-full p-1 rounded-3xl bg-white border border-gray-100 bg-opacity-50 shadow-2xl shadow-gray-200/60">
                                <div class="h-max min-h-max relative overflow-hidden rounded-xl">
                                    <img src="{{asset('images/immat.jpg')}}"
                                        alt="art cover" loading="lazy" width="1000" height="667"
                                        class="h-44 md:h-52 lg:h-64 w-full object-cover object-top transition duration-500 group-hover:scale-105" />
                                </div>
                                <div class="mt-3 px-4 pb-4 flex flex-col relative h-auto">
                                    <div class="flex flex-col h-full">
                                        <span class="flex items-center gap-2 text-gray-500 text-sm bg-gray-100 px-2 py-1 rounded-xl w-max">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                                <path d="M5.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H6a.75.75 0 01-.75-.75V12zM6 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H6zM7.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H8a.75.75 0 01-.75-.75V12zM8 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H8zM9.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V10zM10 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H10zM9.25 14a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V14zM12 9.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V10a.75.75 0 00-.75-.75H12zM11.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H12a.75.75 0 01-.75-.75V12zM12 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H12zM13.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H14a.75.75 0 01-.75-.75V10zM14 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H14z" />
                                                <path fill-rule="evenodd" d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z" clip-rule="evenodd" />
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
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- swiper slide end -->

                        <!-- swiper slide start -->
                        <div class="swiper-slide !h-auto">
                            <div
                                class="group flex flex-col h-full p-1 rounded-3xl bg-white border border-gray-100 bg-opacity-50 shadow-2xl shadow-gray-200/60">
                                <div class="h-max min-h-max relative overflow-hidden rounded-xl">
                                    <img src="{{asset('images/immat.jpg')}}"
                                        alt="art cover" loading="lazy" width="1000" height="667"
                                        class="h-44 md:h-52 lg:h-64 w-full object-cover object-top transition duration-500 group-hover:scale-105" />
                                </div>
                                <div class="mt-3 px-4 pb-4 flex flex-col relative h-auto">
                                    <div class="flex flex-col h-full">
                                        <span class="flex items-center gap-2 text-gray-500 text-sm bg-gray-100 px-2 py-1 rounded-xl w-max">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                                <path d="M5.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H6a.75.75 0 01-.75-.75V12zM6 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H6zM7.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H8a.75.75 0 01-.75-.75V12zM8 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H8zM9.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V10zM10 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H10zM9.25 14a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V14zM12 9.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V10a.75.75 0 00-.75-.75H12zM11.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H12a.75.75 0 01-.75-.75V12zM12 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H12zM13.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H14a.75.75 0 01-.75-.75V10zM14 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H14z" />
                                                <path fill-rule="evenodd" d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z" clip-rule="evenodd" />
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
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- swiper slide end -->

                        <!-- swiper slide start -->
                        <div class="swiper-slide !h-auto">
                            <div
                                class="group flex flex-col h-full p-1 rounded-3xl bg-white border border-gray-100 bg-opacity-50 shadow-2xl shadow-gray-200/60">
                                <div class="h-max min-h-max relative overflow-hidden rounded-xl">
                                    <img src="{{asset('images/immat.jpg')}}"
                                        alt="art cover" loading="lazy" width="1000" height="667"
                                        class="h-44 md:h-52 lg:h-64 w-full object-cover object-top transition duration-500 group-hover:scale-105" />
                                </div>
                                <div class="mt-3 px-4 pb-4 flex flex-col relative h-auto">
                                    <div class="flex flex-col h-full">
                                        <span class="flex items-center gap-2 text-gray-500 text-sm bg-gray-100 px-2 py-1 rounded-xl w-max">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                                <path d="M5.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H6a.75.75 0 01-.75-.75V12zM6 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H6zM7.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H8a.75.75 0 01-.75-.75V12zM8 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H8zM9.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V10zM10 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H10zM9.25 14a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V14zM12 9.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V10a.75.75 0 00-.75-.75H12zM11.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H12a.75.75 0 01-.75-.75V12zM12 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H12zM13.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H14a.75.75 0 01-.75-.75V10zM14 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H14z" />
                                                <path fill-rule="evenodd" d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z" clip-rule="evenodd" />
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
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- swiper slide end -->

                        <!-- swiper slide start -->
                        <div class="swiper-slide !h-auto">
                            <div
                                class="group flex flex-col h-full p-1 rounded-3xl bg-white border border-gray-100 bg-opacity-50 shadow-2xl shadow-gray-200/60">
                                <div class="h-max min-h-max relative overflow-hidden rounded-xl">
                                    <img src="{{asset('images/immat.jpg')}}"
                                        alt="art cover" loading="lazy" width="1000" height="667"
                                        class="h-44 md:h-52 lg:h-64 w-full object-cover object-top transition duration-500 group-hover:scale-105" />
                                </div>
                                <div class="mt-3 px-4 pb-4 flex flex-col relative h-auto">
                                    <div class="flex flex-col h-full">
                                        <span class="flex items-center gap-2 text-gray-500 text-sm bg-gray-100 px-2 py-1 rounded-xl w-max">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                                <path d="M5.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H6a.75.75 0 01-.75-.75V12zM6 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H6zM7.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H8a.75.75 0 01-.75-.75V12zM8 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H8zM9.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V10zM10 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H10zM9.25 14a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V14zM12 9.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V10a.75.75 0 00-.75-.75H12zM11.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H12a.75.75 0 01-.75-.75V12zM12 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H12zM13.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H14a.75.75 0 01-.75-.75V10zM14 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H14z" />
                                                <path fill-rule="evenodd" d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z" clip-rule="evenodd" />
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
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- swiper slide end -->

                        <!-- swiper slide start -->
                        <div class="swiper-slide !h-auto">
                            <div
                                class="group flex flex-col h-full p-1 rounded-3xl bg-white border border-gray-100 bg-opacity-50 shadow-2xl shadow-gray-200/60">
                                <div class="h-max min-h-max relative overflow-hidden rounded-xl">
                                    <img src="{{asset('images/immat.jpg')}}"
                                        alt="art cover" loading="lazy" width="1000" height="667"
                                        class="h-44 md:h-52 lg:h-64 w-full object-cover object-top transition duration-500 group-hover:scale-105" />
                                </div>
                                <div class="mt-3 px-4 pb-4 flex flex-col relative h-auto">
                                    <div class="flex flex-col h-full">
                                        <span class="flex items-center gap-2 text-gray-500 text-sm bg-gray-100 px-2 py-1 rounded-xl w-max">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                                <path d="M5.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H6a.75.75 0 01-.75-.75V12zM6 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H6zM7.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H8a.75.75 0 01-.75-.75V12zM8 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H8zM9.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V10zM10 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H10zM9.25 14a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V14zM12 9.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V10a.75.75 0 00-.75-.75H12zM11.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H12a.75.75 0 01-.75-.75V12zM12 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H12zM13.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H14a.75.75 0 01-.75-.75V10zM14 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H14z" />
                                                <path fill-rule="evenodd" d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z" clip-rule="evenodd" />
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
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- swiper slide end -->


                        

                    </div>
                </div>
                <div class="pt-4 flex justify-between items-center gap-5">
                    <div class="flex items-center gap-2">
                        <button title="Prev" class="btn-prev-swiper-news btn-swiper-control-news">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                <path fill-rule="evenodd" d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z" clip-rule="evenodd" />
                            </svg>                              
                        </button>
                        <button title="nex" class="btn-next-swiper-news btn-swiper-control-news">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                            </svg>                              
                        </button>
                    </div>
                    <div class="">
                        <a href="news.html" class="text-blue-600 flex items-center gap-2 transition-all  group">
                            Plus d'actualite 
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 group-hover:pl-2 transition-all duration-300 ease-in">
                                <path fill-rule="evenodd" d="M2 10a.75.75 0 01.75-.75h12.59l-2.1-1.95a.75.75 0 111.02-1.1l3.5 3.25a.75.75 0 010 1.1l-3.5 3.25a.75.75 0 11-1.02-1.1l2.1-1.95H2.75A.75.75 0 012 10z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- call to action -->
    <section class="pt-12 pb-16">
        <div class="mx-auto w-full px-5 sm:px-8 md:px-10 lg:px-6 max-w-screen-lg lg:max-w-screen-xl">
            <div class="bg-gradient-to-tr from-blue-600 to-sky-400 relative rounded-3xl">
                <div class="absolute top-1/2 -translate-y-1/2 left-1/2 blur-2xl -translate-x-1/2 w-40 h-36 skew-x-12 bg-gradient-to-tr from-blue-200 to-sky-600 rounded-full"></div>
                <div class="relative py-10 px-8">
                    <div class="m-auto space-y-6 md:w-8/12 lg:w-7/12">
                        <h1 class="text-center text-4xl font-bold text-white md:text-5xl">Faire un don</h1>
                        <p class="text-center text-xl text-gray-300">
                        En faisant un don, vous aiderez à changer des vies et à soutenir nos programmes. Tous les dons sont déductibles d'impôt et sont utilisés pour aider les groupes cibles mentionnés.
                        </p>
                        <div class="flex flex-wrap justify-center gap-6">
                            <a href="{{route('pages.adhesion')}}" class="relative w-full sm:w-max flex py-3 px-8
                                    items-center 
                                    justify-center before:absolute before:inset-0 
                                    before:rounded-3xl focus:before:bg-blue-600/10
                                    before:bg-blue-600 
                                    before:transition before:duration-300 hover:before:scale-105 
                                    active:duration-75 active:before:scale-95">
                                <span class="relative text-white">Faire un don</span>
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