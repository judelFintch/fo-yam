<header class="sticky w-full top-0 z-50 bg-white bg-opacity-80 backdrop-filter backdrop-blur-sm  border-b border-gray-100">
                <nav class="w-full flex justify-center">
                    <div class=" w-full px-5 sm:px-8 md:px-10 lg:px-6 max-w-screen-lg lg:max-w-screen-xl">
                        <div class="flex relative justify-between py-3 items-center">
                            <div class="flex items-center">
                                <a href="{{route('pages.home')}}" aria-label="logo" class="flex space-x-2 items-center">
                                    <div aria-hidden="true" class="flex space-x-1">
                                        <div class="h-4 w-4 rounded-full bg-gray-900"></div>
                                        <div class="h-6 w-2 bg-blue-600 rounded-full"></div>
                                    </div>
                                    <span class="text-base font-bold text-gray-600">Fondation Yamba</span>
                                </a>
                            </div>
                            
                            <div data-nav-bar class="invisible opacity-0 transition duration-300 
                                lg:visible lg:opacity-100  
                                w-full  lg:justify-end items-center mb-16 lg:mb-0
                                space-y-8 p-6 
                                bg-white  lg:space-y-0 lg:p-0 lg:m-0 lg:flex  
                                lg:bg-transparent left-0
                                lg:w-max 
                                z-50  lg:relative fixed h-screen lg:h-max top-0 lg:pt-0 pt-16 overflow-auto-on-mob">
                                <div class="text-gray-600 lg:pr-4">
                                    <ul
                                        class="space-y-6 tracking-wide font-medium text-base lg:space-x-5 lg:text-sm lg:flex lg:space-y-0 text-gray-600">
                                        <li>
                                            <a href="{{route('pages.home')}}"
                                                class="flex w-full lg:w-max transition hover:text-blue-600 lg:hover:text-blue-800">
                                                Accueil
                                            </a>
                                        </li>

                                      


                                        <li data-has-drop-down class="group">
                                            <a data-drop-down-trigger href="#"
                                                class="flex justify-between lg:justify-start items-center gap-1 w-full lg:w-max lg:px-0 transition hover:text-blue-600 lg:hover:text-blue-800">
                                                Apropos
                                                <span class="lg:group-hover:-rotate-90 duration-300 transition-all text-current">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                                        <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                                    </svg>                                              
                                                </span>
                                            </a>
                                            <div data-drop-down data-opened="false" class="h-0 transition-all ease-linear duration-300 relative
                                            lg:invisible lg:opacity-75 lg:translate-y-5 lg:group-hover:visible lg:group-hover:opacity-100 lg:group-hover:translate-y-0
                                            lg:absolute lg:!min-h-max lg:!h-max overflow-hidden w-full lg:w-48 lg:bg-white lg:shadow-lg lg:shadow-gray-100/30 lg:border lg:border-gray-100 lg:py-3 lg:border-t-2 lg:border-t-blue-600 lg:top-full pl-3 lg:rounded-xl lg:pl-0">
                                                <ul role="list" class="w-full my-3 lg:my-0 flex flex-col lg:pl-0 text-gray-600 lg:border-l-0 border-l-2 border-l-gray-100">
                                                    <li class="flex">
                                                        <a href="{{route('pages.about')}}" class="px-4 py-2.5 transition hover:bg-gray-100 w-full">Qui sommes-nous?</a>
                                                    </li>
                                                    <li class="flex">
                                                        <a href="{{route('pages.vision')}}" class="px-4 py-2.5 transition hover:bg-gray-100 w-full">Notre Vision</a>
                                                    </li>
                                                    <li class="flex">
                                                        <a href="{{route('pages.status')}}" class="px-4 py-2.5 transition hover:bg-gray-100 w-full">Status</a>
                                                    </li>

                                                    <li class="flex">
                                                        <a href="{{route('pages.reglement')}}" class="px-4 py-2.5 transition hover:bg-gray-100 w-full">Reglement Interieurs</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li>
                                            <a href="{{route('pages.actu')}}"
                                                class="flex w-full lg:w-max  transition hover:text-blue-600 lg:hover:text-blue-800">
                                                Actualites
                                            </a>
                                        </li>
                                        <li data-has-drop-down class="group">
                                            <a data-drop-down-trigger href="#"
                                                class="flex justify-between lg:justify-start items-center gap-1 w-full lg:w-max lg:px-0 transition hover:text-blue-600 lg:hover:text-blue-800">
                                                S'engagez
                                                <span class="lg:group-hover:-rotate-90 duration-300 transition-all text-current">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                                        <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                                    </svg>                                              
                                                </span>
                                            </a>
                                            <div data-drop-down data-opened="false" class="h-0 transition-all ease-linear duration-300 relative
                                            lg:invisible lg:opacity-75 lg:translate-y-5 lg:group-hover:visible lg:group-hover:opacity-100 lg:group-hover:translate-y-0
                                            lg:absolute lg:!min-h-max lg:!h-max overflow-hidden w-full lg:w-48 lg:bg-white lg:shadow-lg lg:shadow-gray-100/30 lg:border lg:border-gray-100 lg:py-3 lg:border-t-2 lg:border-t-blue-600 lg:top-full pl-3 lg:rounded-xl lg:pl-0">
                                                <ul role="list" class="w-full my-3 lg:my-0 flex flex-col lg:pl-0 text-gray-600 lg:border-l-0 border-l-2 border-l-gray-100">
                                                    <li class="flex">
                                                        <a href="{{route('pages.adhesion')}}" class="px-4 py-2.5 transition hover:bg-gray-100 w-full">A d'adhesion</a>
                                                    </li>
                                                    <li class="flex">
                                                        <a href="#" class="px-4 py-2.5 transition hover:bg-gray-100 w-full">Newsletter</a>
                                                    </li>
                                                   
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="{{ route('pages.contact')}}"
                                                class="flex w-full lg:w-max transition hover:text-blue-600 lg:hover:text-blue-800">
                                                Gallerie
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ route('pages.contact')}}"
                                                class="flex w-full lg:w-max transition hover:text-blue-600 lg:hover:text-blue-800">
                                                Contact
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="w-full  flex md:w-max lg:pl-3">
                                    <a href="{{route('pages.adhesion')}}" class="relative w-full lg:w-max flex py-3 px-8
                                        items-center 
                                        justify-center before:absolute before:inset-0 
                                        before:rounded-3xl focus:before:bg-blue-600/10
                                        before:bg-blue-600 
                                        before:transition before:duration-300 hover:before:scale-105 
                                        active:duration-75 active:before:scale-95">
                                        <span class="relative text-sm font-semibold text-white">Adherer</span>
                                    </a>
                                </div>
                            </div>
                            <div class="flex items-center lg:hidden py-4 relative z-[60]">
                                <button data-toggle-nav
                                    class="peer-checked:hamburger block relative z-20 cursor-pointer lg:hidden">
                                    <span class="sr-only">Open Navbar</span>
                                    <div id="line1" aria-hidden="true"
                                        class="m-auto h-0.5 w-6 rounded bg-gray-600 transition duration-300">
                                    </div>
                                    <div id="line2" aria-hidden="true"
                                        class="m-auto mt-2 h-0.5 w-6 rounded bg-gray-600  transition duration-300">
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>