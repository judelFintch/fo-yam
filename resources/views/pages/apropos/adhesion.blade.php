@extends('layouts.app')
@secstion('content')


<section class="relative py-20 lg:py-32">
        <div class=" w-full mx-auto px-5 sm:px-8 md:px-10 lg:px-6 max-w-screen-lg lg:max-w-screen-xl">
          <div class="w-full flex flex-col md:items-center md:flex-row gap-10">
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
                    <span class="text-xs sm:text-sm line-clamp-1">Adhesion</span>
                  </div>
                </div>
                <h2 class="text-gray-700 mb-6 text-[32px] font-bold uppercase sm:text-[40px] lg:text-[36px] xl:text-[40px]">
                  Adherer a lorem ipsum dolor sit amet
                </h2>
                <p class="text-gray-600 mb-9 text-base leading-relaxed">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim adiqua
                  minim veniam quis nostrud exercitation ullamco
                </p>
                
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
                        <label class="block text-gray-500 required" for="contact_mail">Numero de telephone</label>
                        <input type="tel" id="contact_mail" name="contact_name" required="required"
                          class="text-gray-600 transition-all px-4 py-2 bg-gray-100 rounded-xl w-full border-2  border-transparent outline-none focus:border-blue-600 focus:bg-white">
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-500 required" for="contact_mail">Adresse physique</label>
                        <input type="text" id="contact_mail" name="contact_name" required="required"
                          class="text-gray-600 transition-all px-4 py-2 bg-gray-100 rounded-xl w-full border-2  border-transparent outline-none focus:border-blue-600 focus:bg-white">
                      </div>
    
                    <div class="w-max">
                      <button type="submit" class="relative w-full lg:w-max flex py-3 px-8
                                    items-center 
                                    justify-center before:absolute before:inset-0 
                                    before:rounded-3xl focus:before:bg-blue-600/10
                                    before:bg-blue-600 
                                     before:transition before:duration-300 hover:before:scale-105 
                                     active:duration-75 active:before:scale-95">
                        <span class="relative text-sm font-semibold text-white">Adherer maintenant</span>
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