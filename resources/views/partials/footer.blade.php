<footer class="pt-10 pb-0 bg-gray-100">
        <div class="mx-auto w-full px-5 sm:px-8 md:px-10 lg:px-6 max-w-screen-lg lg:max-w-screen-xl">
            
            <div class="grid grid-cols-2 gap-x-8 gap-y-10 lg:gap-x-12 sm:grid-cols-4 pt-8">
                <div>
                    <div class="flex flex-col">
                        <img src="{{asset('images/logo.svg')}}" alt="logo site" class="h-12 w-auto" />
                        <p class="text-gray-600 pt-2 ">
                       
                        </p>

                        <div class="flex gap-4 text-gray-600 pt-8">
                            <a href="#" target="blank" aria-label="github" class="hover:text-blue-600">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                                    <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                                </svg>
                            </a>
                            <a href="#" target="blank" aria-label="twitter" class="hover:text-blue-600">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                                    <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div>
                    <h6 class="text-lg font-medium text-gray-800 pb-5">Apropos</h6>
                    <ul class="list-inside space-y-2 text-gray-600">
                        <li>
                            <a href="{{route('pages.about')}}" class="hover:text-blue-600 transition">Qui sommes-nous?</a>
                        </li>
                        <li>
                            <a href="{{route('pages.vision')}}" class="hover:text-blue-600 transition">Notre Vision</a>
                        </li>
                        <li>
                            <a href="{{route('pages.status')}}" class="hover:text-blue-600 transition">Status</a>
                        </li>
                        <li>
                            <a href="{{route('pages.reglement')}}" class="hover:text-blue-600 transition">Reglement Interieurs</a>
                        </li>
                       
                    </ul>
                </div>
                <div>
                    <h6 class="text-lg font-medium text-gray-800 pb-5">Actualités</h6>
                    <ul class="list-inside space-y-2 text-gray-600">
                       
                          
                    </ul>
                </div>
                <div>
                    <h6 class="text-lg font-medium text-gray-800 pb-5">Ressources</h6>
                    <ul class="list-inside space-y-2 text-gray-600">
                        <li>
                            <a href="#" class="hover:text-blue-600 transition">Termes</a>
                        </li>
                        <li>
                            <a href="#" class="hover:text-blue-600 transition">Confidentialite</a>
                        </li>
                        <li>
                            <a href="#" class="hover:text-blue-600 transition">FAQ</a>
                        </li>
                    </ul>
                </div>
            </div>
            
        </div>
        <div class="flex justify-center px-4 py-3 text-gray-600 w-full bg-gray-200 mt-6">
            <span>&copy; fo-yam <span id="year"></span></span>
        </div>
    </footer>