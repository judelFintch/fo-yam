@extends('layouts.app')
@section("title", "Fo-yam - Contactez-nous")


@section('content')
<section class="relative py-20 lg:py-32">
      <div class=" w-full mx-auto px-5 sm:px-8 md:px-10 lg:px-6 max-w-screen-lg lg:max-w-screen-xl">
        <div class="w-full flex flex-col md:flex-row gap-10">
          <div class="w-full px-4 md:w-2/5 lg:w-1/2">
            <div class="mb-12 max-w-[570px] lg:mb-0">
              <div class="w-max">
                <div class="border flex items-center gap-2 p-1 pr-5 rounded-3xl bg-blue-600 text-gray-200">
                  <span class="bg-white text-blue-600 relative p-1 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-3">
                      <path fill-rule="evenodd"
                        d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                        clip-rule="evenodd" />
                    </svg>
                  </span>
                  <span class="text-xs sm:text-sm line-clamp-1">Contact</span>
                </div>
              </div>
              <h2 class="text-gray-700 mb-6 text-[32px] font-bold uppercase sm:text-[40px] lg:text-[36px] xl:text-[40px]">
                PRENDRE CONTACT AVEC NOUS
              </h2>
              <p class="text-gray-600 mb-9 text-base leading-relaxed">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius
                tempor incididunt ut labore et dolore magna aliqua. Ut enim adiqua
                minim veniam quis nostrud exercitation ullamco
              </p>
              <div class="mb-8 flex w-full max-w-[370px]">
                <div
                  class="bg-blue-600 text-blue-600 mr-6 flex h-[60px] w-full max-w-[60px] items-center justify-center overflow-hidden rounded bg-opacity-5 sm:h-[70px] sm:max-w-[70px]">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6">
                    <path fill-rule="evenodd"
                      d="M9.69 18.933l.003.001C9.89 19.02 10 19 10 19s.11.02.308-.066l.002-.001.006-.003.018-.008a5.741 5.741 0 00.281-.14c.186-.096.446-.24.757-.433.62-.384 1.445-.966 2.274-1.765C15.302 14.988 17 12.493 17 9A7 7 0 103 9c0 3.492 1.698 5.988 3.355 7.584a13.731 13.731 0 002.273 1.765 11.842 11.842 0 00.976.544l.062.029.018.008.006.003zM10 11.25a2.25 2.25 0 100-4.5 2.25 2.25 0 000 4.5z"
                      clip-rule="evenodd" />
                  </svg>
                </div>
                <div class="w-full">
                  <h4 class="text-gray-700 mb-1 text-xl font-bold">Adresse physique</h4>
                  <p class="text-gray-600 text-base">
                    99 S.t Jomblo Park Pekanbaru 28292. Indonesia
                  </p>
                </div>
              </div>
              <div class="mb-8 flex w-full max-w-[370px]">
                <div
                  class="bg-blue-600 text-blue-600 mr-6 flex h-[60px] w-full max-w-[60px] items-center justify-center overflow-hidden rounded bg-opacity-5 sm:h-[70px] sm:max-w-[70px]">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6">
                    <path fill-rule="evenodd"
                      d="M2 3.5A1.5 1.5 0 013.5 2h1.148a1.5 1.5 0 011.465 1.175l.716 3.223a1.5 1.5 0 01-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 006.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 011.767-1.052l3.223.716A1.5 1.5 0 0118 15.352V16.5a1.5 1.5 0 01-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 012.43 8.326 13.019 13.019 0 012 5V3.5z"
                      clip-rule="evenodd" />
                  </svg>
  
                </div>
                <div class="w-full">
                  <h4 class="text-gray-700 mb-1 text-xl font-bold">Numero tele</h4>
                  <p class="text-gray-600 text-base">(+62)81 414 257 9980</p>
                </div>
              </div>
              <div class="mb-8 flex w-full max-w-[370px]">
                <div
                  class="bg-blue-600 text-blue-600 mr-6 flex h-[60px] w-full max-w-[60px] items-center justify-center overflow-hidden rounded bg-opacity-5 sm:h-[70px] sm:max-w-[70px]">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6">
                    <path fill-rule="evenodd"
                      d="M2.106 6.447A2 2 0 001 8.237V16a2 2 0 002 2h14a2 2 0 002-2V8.236a2 2 0 00-1.106-1.789l-7-3.5a2 2 0 00-1.788 0l-7 3.5zm1.48 4.007a.75.75 0 00-.671 1.342l5.855 2.928a2.75 2.75 0 002.46 0l5.852-2.926a.75.75 0 10-.67-1.342l-5.853 2.926a1.25 1.25 0 01-1.118 0l-5.856-2.928z"
                      clip-rule="evenodd" />
                  </svg>
  
                </div>
                <div class="w-full">
                  <h4 class="text-gray-700 mb-1 text-xl font-bold">Adresse mail</h4>
                  <p class="text-gray-600 text-base">info@fondationyamba.org</p>
                </div>
              </div>
            </div>
          </div>
          <div class="w-full px-4 md:w-3/5 lg:w-1/2">
            <div class="relative rounded-3xl bg-white p-8 sm:p-12 shadow-2xl shadow-gray-200/60 border border-gray-100">
              <div class="">
                <form name="contact_form" method="post" class="mt-8 text-gray-500">
                  <div class="mb-6">
                    <label class="block text-gray-500 required" for="contact_name">Nom</label>
                    <input type="text" id="contact_name" name="contact_name" required="required"
                      class="text-gray-600 transition-all px-4 py-2 bg-gray-100 rounded-xl w-full border-2  border-transparent outline-none focus:border-blue-600 focus:bg-white">
                  </div>
                  <div class="mb-6">
                    <label class="block text-gray-500 required" for="contact_mail">Adresse mail</label>
                    <input type="email" id="contact_mail" name="contact_name" required="required"
                      class="text-gray-600 transition-all px-4 py-2 bg-gray-100 rounded-xl w-full border-2  border-transparent outline-none focus:border-blue-600 focus:bg-white">
                  </div>
  
                  <div class="mb-6">
                    <label class="block text-gray-500 required" for="contact_object">Objet message</label>
                    <input type="text" id="contact_object" name="contact_name" required="required"
                      class="text-gray-600 transition-all px-4 py-2 bg-gray-100 rounded-xl w-full border-2  border-transparent outline-none focus:border-blue-600 focus:bg-white">
                  </div>
  
  
                  <div class="mb-6">
                    <label class="block text-gray-500 required" for="contact_message">Message</label>
                    <textarea id="contact_message" name="contact_message" required="required" is="app-textarea-autogrow"
                      row="20"
                      class="text-gray-600 h-24 resize-none transition-all px-4 py-2 bg-gray-100 rounded-xl w-full border-2 border-transparent outline-none focus:border-blue-600 focus:bg-white"></textarea>
                  </div>
  
                  <div class="w-max">
                    <button type="submit" class="relative w-full lg:w-max flex py-3 px-8
                                  items-center 
                                  justify-center before:absolute before:inset-0 
                                  before:rounded-3xl focus:before:bg-blue-600/10
                                  before:bg-blue-600 
                                   before:transition before:duration-300 hover:before:scale-105 
                                   active:duration-75 active:before:scale-95">
                      <span class="relative text-sm font-semibold text-white">Envoyer le message</span>
                    </button>
                  </div>
                </form>
              </div>
              <div>
                <span class="absolute -top-10 -right-9 z-[-1]">
                  <svg width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M0 100C0 44.7715 0 0 0 0C55.2285 0 100 44.7715 100 100C100 100 100 100 0 100Z" fill="#3056D3" />
                  </svg>
                </span>
                <span class="absolute -right-10 top-[90px] z-[-1]">
                  <svg width="34" height="134" viewBox="0 0 34 134" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="31.9993" cy="132" r="1.66667" transform="rotate(180 31.9993 132)" fill="#13C296" />
                    <circle cx="31.9993" cy="117.333" r="1.66667" transform="rotate(180 31.9993 117.333)"
                      fill="#13C296" />
                    <circle cx="31.9993" cy="102.667" r="1.66667" transform="rotate(180 31.9993 102.667)"
                      fill="#13C296" />
                    <circle cx="31.9993" cy="88" r="1.66667" transform="rotate(180 31.9993 88)" fill="#13C296" />
                    <circle cx="31.9993" cy="73.3333" r="1.66667" transform="rotate(180 31.9993 73.3333)"
                      fill="#13C296" />
                    <circle cx="31.9993" cy="45" r="1.66667" transform="rotate(180 31.9993 45)" fill="#13C296" />
                    <circle cx="31.9993" cy="16" r="1.66667" transform="rotate(180 31.9993 16)" fill="#13C296" />
                    <circle cx="31.9993" cy="59" r="1.66667" transform="rotate(180 31.9993 59)" fill="#13C296" />
                    <circle cx="31.9993" cy="30.6666" r="1.66667" transform="rotate(180 31.9993 30.6666)"
                      fill="#13C296" />
                    <circle cx="31.9993" cy="1.66665" r="1.66667" transform="rotate(180 31.9993 1.66665)"
                      fill="#13C296" />
                    <circle cx="17.3333" cy="132" r="1.66667" transform="rotate(180 17.3333 132)" fill="#13C296" />
                    <circle cx="17.3333" cy="117.333" r="1.66667" transform="rotate(180 17.3333 117.333)"
                      fill="#13C296" />
                    <circle cx="17.3333" cy="102.667" r="1.66667" transform="rotate(180 17.3333 102.667)"
                      fill="#13C296" />
                    <circle cx="17.3333" cy="88" r="1.66667" transform="rotate(180 17.3333 88)" fill="#13C296" />
                    <circle cx="17.3333" cy="73.3333" r="1.66667" transform="rotate(180 17.3333 73.3333)"
                      fill="#13C296" />
                    <circle cx="17.3333" cy="45" r="1.66667" transform="rotate(180 17.3333 45)" fill="#13C296" />
                    <circle cx="17.3333" cy="16" r="1.66667" transform="rotate(180 17.3333 16)" fill="#13C296" />
                    <circle cx="17.3333" cy="59" r="1.66667" transform="rotate(180 17.3333 59)" fill="#13C296" />
                    <circle cx="17.3333" cy="30.6666" r="1.66667" transform="rotate(180 17.3333 30.6666)"
                      fill="#13C296" />
                    <circle cx="17.3333" cy="1.66665" r="1.66667" transform="rotate(180 17.3333 1.66665)"
                      fill="#13C296" />
                    <circle cx="2.66536" cy="132" r="1.66667" transform="rotate(180 2.66536 132)" fill="#13C296" />
                    <circle cx="2.66536" cy="117.333" r="1.66667" transform="rotate(180 2.66536 117.333)"
                      fill="#13C296" />
                    <circle cx="2.66536" cy="102.667" r="1.66667" transform="rotate(180 2.66536 102.667)"
                      fill="#13C296" />
                    <circle cx="2.66536" cy="88" r="1.66667" transform="rotate(180 2.66536 88)" fill="#13C296" />
                    <circle cx="2.66536" cy="73.3333" r="1.66667" transform="rotate(180 2.66536 73.3333)"
                      fill="#13C296" />
                    <circle cx="2.66536" cy="45" r="1.66667" transform="rotate(180 2.66536 45)" fill="#13C296" />
                    <circle cx="2.66536" cy="16" r="1.66667" transform="rotate(180 2.66536 16)" fill="#13C296" />
                    <circle cx="2.66536" cy="59" r="1.66667" transform="rotate(180 2.66536 59)" fill="#13C296" />
                    <circle cx="2.66536" cy="30.6666" r="1.66667" transform="rotate(180 2.66536 30.6666)"
                      fill="#13C296" />
                    <circle cx="2.66536" cy="1.66665" r="1.66667" transform="rotate(180 2.66536 1.66665)"
                      fill="#13C296" />
                  </svg>
                </span>
                <span class="absolute -left-7 -bottom-7 z-[-1]">
                  <svg width="107" height="134" viewBox="0 0 107 134" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="104.999" cy="132" r="1.66667" transform="rotate(180 104.999 132)" fill="#13C296" />
                    <circle cx="104.999" cy="117.333" r="1.66667" transform="rotate(180 104.999 117.333)"
                      fill="#13C296" />
                    <circle cx="104.999" cy="102.667" r="1.66667" transform="rotate(180 104.999 102.667)"
                      fill="#13C296" />
                    <circle cx="104.999" cy="88" r="1.66667" transform="rotate(180 104.999 88)" fill="#13C296" />
                    <circle cx="104.999" cy="73.3333" r="1.66667" transform="rotate(180 104.999 73.3333)"
                      fill="#13C296" />
                    <circle cx="104.999" cy="45" r="1.66667" transform="rotate(180 104.999 45)" fill="#13C296" />
                    <circle cx="104.999" cy="16" r="1.66667" transform="rotate(180 104.999 16)" fill="#13C296" />
                    <circle cx="104.999" cy="59" r="1.66667" transform="rotate(180 104.999 59)" fill="#13C296" />
                    <circle cx="104.999" cy="30.6666" r="1.66667" transform="rotate(180 104.999 30.6666)"
                      fill="#13C296" />
                    <circle cx="104.999" cy="1.66665" r="1.66667" transform="rotate(180 104.999 1.66665)"
                      fill="#13C296" />
                    <circle cx="90.3333" cy="132" r="1.66667" transform="rotate(180 90.3333 132)" fill="#13C296" />
                    <circle cx="90.3333" cy="117.333" r="1.66667" transform="rotate(180 90.3333 117.333)"
                      fill="#13C296" />
                    <circle cx="90.3333" cy="102.667" r="1.66667" transform="rotate(180 90.3333 102.667)"
                      fill="#13C296" />
                    <circle cx="90.3333" cy="88" r="1.66667" transform="rotate(180 90.3333 88)" fill="#13C296" />
                    <circle cx="90.3333" cy="73.3333" r="1.66667" transform="rotate(180 90.3333 73.3333)"
                      fill="#13C296" />
                    <circle cx="90.3333" cy="45" r="1.66667" transform="rotate(180 90.3333 45)" fill="#13C296" />
                    <circle cx="90.3333" cy="16" r="1.66667" transform="rotate(180 90.3333 16)" fill="#13C296" />
                    <circle cx="90.3333" cy="59" r="1.66667" transform="rotate(180 90.3333 59)" fill="#13C296" />
                    <circle cx="90.3333" cy="30.6666" r="1.66667" transform="rotate(180 90.3333 30.6666)"
                      fill="#13C296" />
                    <circle cx="90.3333" cy="1.66665" r="1.66667" transform="rotate(180 90.3333 1.66665)"
                      fill="#13C296" />
                    <circle cx="75.6654" cy="132" r="1.66667" transform="rotate(180 75.6654 132)" fill="#13C296" />
                    <circle cx="31.9993" cy="132" r="1.66667" transform="rotate(180 31.9993 132)" fill="#13C296" />
                    <circle cx="75.6654" cy="117.333" r="1.66667" transform="rotate(180 75.6654 117.333)"
                      fill="#13C296" />
                    <circle cx="31.9993" cy="117.333" r="1.66667" transform="rotate(180 31.9993 117.333)"
                      fill="#13C296" />
                    <circle cx="75.6654" cy="102.667" r="1.66667" transform="rotate(180 75.6654 102.667)"
                      fill="#13C296" />
                    <circle cx="31.9993" cy="102.667" r="1.66667" transform="rotate(180 31.9993 102.667)"
                      fill="#13C296" />
                    <circle cx="75.6654" cy="88" r="1.66667" transform="rotate(180 75.6654 88)" fill="#13C296" />
                    <circle cx="31.9993" cy="88" r="1.66667" transform="rotate(180 31.9993 88)" fill="#13C296" />
                    <circle cx="75.6654" cy="73.3333" r="1.66667" transform="rotate(180 75.6654 73.3333)"
                      fill="#13C296" />
                    <circle cx="31.9993" cy="73.3333" r="1.66667" transform="rotate(180 31.9993 73.3333)"
                      fill="#13C296" />
                    <circle cx="75.6654" cy="45" r="1.66667" transform="rotate(180 75.6654 45)" fill="#13C296" />
                    <circle cx="31.9993" cy="45" r="1.66667" transform="rotate(180 31.9993 45)" fill="#13C296" />
                    <circle cx="75.6654" cy="16" r="1.66667" transform="rotate(180 75.6654 16)" fill="#13C296" />
                    <circle cx="31.9993" cy="16" r="1.66667" transform="rotate(180 31.9993 16)" fill="#13C296" />
                    <circle cx="75.6654" cy="59" r="1.66667" transform="rotate(180 75.6654 59)" fill="#13C296" />
                    <circle cx="31.9993" cy="59" r="1.66667" transform="rotate(180 31.9993 59)" fill="#13C296" />
                    <circle cx="75.6654" cy="30.6666" r="1.66667" transform="rotate(180 75.6654 30.6666)"
                      fill="#13C296" />
                    <circle cx="31.9993" cy="30.6666" r="1.66667" transform="rotate(180 31.9993 30.6666)"
                      fill="#13C296" />
                    <circle cx="75.6654" cy="1.66665" r="1.66667" transform="rotate(180 75.6654 1.66665)"
                      fill="#13C296" />
                    <circle cx="31.9993" cy="1.66665" r="1.66667" transform="rotate(180 31.9993 1.66665)"
                      fill="#13C296" />
                    <circle cx="60.9993" cy="132" r="1.66667" transform="rotate(180 60.9993 132)" fill="#13C296" />
                    <circle cx="17.3333" cy="132" r="1.66667" transform="rotate(180 17.3333 132)" fill="#13C296" />
                    <circle cx="60.9993" cy="117.333" r="1.66667" transform="rotate(180 60.9993 117.333)"
                      fill="#13C296" />
                    <circle cx="17.3333" cy="117.333" r="1.66667" transform="rotate(180 17.3333 117.333)"
                      fill="#13C296" />
                    <circle cx="60.9993" cy="102.667" r="1.66667" transform="rotate(180 60.9993 102.667)"
                      fill="#13C296" />
                    <circle cx="17.3333" cy="102.667" r="1.66667" transform="rotate(180 17.3333 102.667)"
                      fill="#13C296" />
                    <circle cx="60.9993" cy="88" r="1.66667" transform="rotate(180 60.9993 88)" fill="#13C296" />
                    <circle cx="17.3333" cy="88" r="1.66667" transform="rotate(180 17.3333 88)" fill="#13C296" />
                    <circle cx="60.9993" cy="73.3333" r="1.66667" transform="rotate(180 60.9993 73.3333)"
                      fill="#13C296" />
                    <circle cx="17.3333" cy="73.3333" r="1.66667" transform="rotate(180 17.3333 73.3333)"
                      fill="#13C296" />
                    <circle cx="60.9993" cy="45" r="1.66667" transform="rotate(180 60.9993 45)" fill="#13C296" />
                    <circle cx="17.3333" cy="45" r="1.66667" transform="rotate(180 17.3333 45)" fill="#13C296" />
                    <circle cx="60.9993" cy="16" r="1.66667" transform="rotate(180 60.9993 16)" fill="#13C296" />
                    <circle cx="17.3333" cy="16" r="1.66667" transform="rotate(180 17.3333 16)" fill="#13C296" />
                    <circle cx="60.9993" cy="59" r="1.66667" transform="rotate(180 60.9993 59)" fill="#13C296" />
                    <circle cx="17.3333" cy="59" r="1.66667" transform="rotate(180 17.3333 59)" fill="#13C296" />
                    <circle cx="60.9993" cy="30.6666" r="1.66667" transform="rotate(180 60.9993 30.6666)"
                      fill="#13C296" />
                    <circle cx="17.3333" cy="30.6666" r="1.66667" transform="rotate(180 17.3333 30.6666)"
                      fill="#13C296" />
                    <circle cx="60.9993" cy="1.66665" r="1.66667" transform="rotate(180 60.9993 1.66665)"
                      fill="#13C296" />
                    <circle cx="17.3333" cy="1.66665" r="1.66667" transform="rotate(180 17.3333 1.66665)"
                      fill="#13C296" />
                    <circle cx="46.3333" cy="132" r="1.66667" transform="rotate(180 46.3333 132)" fill="#13C296" />
                    <circle cx="2.66536" cy="132" r="1.66667" transform="rotate(180 2.66536 132)" fill="#13C296" />
                    <circle cx="46.3333" cy="117.333" r="1.66667" transform="rotate(180 46.3333 117.333)"
                      fill="#13C296" />
                    <circle cx="2.66536" cy="117.333" r="1.66667" transform="rotate(180 2.66536 117.333)"
                      fill="#13C296" />
                    <circle cx="46.3333" cy="102.667" r="1.66667" transform="rotate(180 46.3333 102.667)"
                      fill="#13C296" />
                    <circle cx="2.66536" cy="102.667" r="1.66667" transform="rotate(180 2.66536 102.667)"
                      fill="#13C296" />
                    <circle cx="46.3333" cy="88" r="1.66667" transform="rotate(180 46.3333 88)" fill="#13C296" />
                    <circle cx="2.66536" cy="88" r="1.66667" transform="rotate(180 2.66536 88)" fill="#13C296" />
                    <circle cx="46.3333" cy="73.3333" r="1.66667" transform="rotate(180 46.3333 73.3333)"
                      fill="#13C296" />
                    <circle cx="2.66536" cy="73.3333" r="1.66667" transform="rotate(180 2.66536 73.3333)"
                      fill="#13C296" />
                    <circle cx="46.3333" cy="45" r="1.66667" transform="rotate(180 46.3333 45)" fill="#13C296" />
                    <circle cx="2.66536" cy="45" r="1.66667" transform="rotate(180 2.66536 45)" fill="#13C296" />
                    <circle cx="46.3333" cy="16" r="1.66667" transform="rotate(180 46.3333 16)" fill="#13C296" />
                    <circle cx="2.66536" cy="16" r="1.66667" transform="rotate(180 2.66536 16)" fill="#13C296" />
                    <circle cx="46.3333" cy="59" r="1.66667" transform="rotate(180 46.3333 59)" fill="#13C296" />
                    <circle cx="2.66536" cy="59" r="1.66667" transform="rotate(180 2.66536 59)" fill="#13C296" />
                    <circle cx="46.3333" cy="30.6666" r="1.66667" transform="rotate(180 46.3333 30.6666)"
                      fill="#13C296" />
                    <circle cx="2.66536" cy="30.6666" r="1.66667" transform="rotate(180 2.66536 30.6666)"
                      fill="#13C296" />
                    <circle cx="46.3333" cy="1.66665" r="1.66667" transform="rotate(180 46.3333 1.66665)"
                      fill="#13C296" />
                    <circle cx="2.66536" cy="1.66665" r="1.66667" transform="rotate(180 2.66536 1.66665)"
                      fill="#13C296" />
                  </svg>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


 @endsection