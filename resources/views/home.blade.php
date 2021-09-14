@extends('layouts.default') @section('content')
<div class="bg-gray-200 min-h-screen pt-2 font-mono my-16">
   <div class="container mx-auto">
      <div class="w-full bg-cover bg-center" style="height: 32rem; background-image: url(https://images.unsplash.com/photo-1504384308090-c894fdcc538d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80);">
         <div class="flex items-center justify-center h-full w-full bg-gray-900 bg-opacity-50">
            <div class="text-center">
               <h1 class="text-white text-2xl font-semibold uppercase md:text-3xl">
                  Create a profile account and <br />
                  song link here
               </h1>
               <div class="inline-flex">
                  <a href="/profile">
                  <button class="p-2 my-5 mx-2 bg-indigo-700 hover:bg-indigo-800 font-bold text-white rounded border-2 border-transparent hover:border-indigo-800 shadow-md transition duration-500 md:text-xl">
                  Create artist profle!
                  </button>
                  </a>
                  <a href="/link">
                  <button
                     class="p-2 my-5 mx-2 bg-transparent border-2 bg-indigo-200 bg-opacity-75 hover:bg-opacity-100 border-indigo-700 rounded hover:border-indigo-800 font-bold text-indigo-800 shadow-md transition duration-500 md:text-lg"
                     >
                  Create song/album link
                  </button>
                  </a>
               </div>
            </div>
         </div>
      </div>
      <!-- about block -->
      <section class="bg-gray-100">
        <div class="max-w-5xl px-6 py-16 mx-auto">
            <div class="items-center md:flex md:space-x-6">
                <div class="md:w-1/2">
                    <h3 class="text-2xl text-center font-semibold text-gray-800 uppercase underline">about bigfan</h3>
                    <p class="max-w-md mt-4 text-gray-600">The bigfan site, its a project that has  been made in order to put a connection between the listeners and musicians.</p>
                    <a href="/about" class="block mt-8 text-right text-indigo-700 underline uppercase">read more!</a>
                </div>

                <div class="mt-8 md:mt-0 md:w-1/2">
                    <div class="flex items-center justify-center">
                        <div class="max-w-md">
                            <img class="object-cover object-center w-full rounded-md shadow" style="height: 500px;"
                                src="https://images.unsplash.com/photo-1618346136472-090de27fe8b4?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=673&q=80">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
      <!-- main ends here -->
      <!-- footer -->


     <footer class="bg-gray-900 text-white pt-12 pb-8 px-4">
        <div class="container overflow-hidden flex flex-col lg:flex-row justify-between mx-auto px-4">
            <section class="text-white body-font flex md:flex-row flex-col items-center bg-gray-500">
                <div
                    class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                    <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Express yourself</h1>
                    <p class="mb-8 leading-relaxed">Join over 10,000 people who receive daily updates in the entertainment Industry.</p>
                    <div class="flex flex-row justify-start w-full max-w-md shadow-xl border-t border-b border-green-900">
                        <input class="border-l-4 border-red-700 bg-white focus:outline-none px-4 w-full m-0" placeholder="Email"
                            type="text">
                        <button
                            class="inline-flex text-white py-2 px-6 focus:outline-none text-lg m-0 h-12 bg-pink-400">Subscribe</button>
                    </div>
                    <p class="text-sm mt-2 text-gray-500 mb-8 w-full">Keep in tough with us.</p>
                    <div class="flex lg:flex-row md:flex-col">
                        <a
                            class="mx-2 text-gray-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-white">
                            <i class="fab fa-envelope"></i>
                        </a>
                        <a
                            class="mx-2 text-blue-900 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-blue-300">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a
                            class="mx-2 text-blue-900 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-blue-300">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a
                            class="mx-2 text-red-700 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-white">
                            <i class="fab fa-youtube"></i>
                        </a>

                    </div>
                </div>

            </section>
           <div class="w-3/4 block sm:flex text-sm mt-6 lg:mt-0">
              <ul class="text-gray-700 list-none p-0 font-thin flex flex-col text-left w-full">
                 <li class="inline-block py-2 px-3 text-white uppercase font-medium tracking-wide">Product</li>
                 <li><a href="#" class="inline-block py-2 pl-3 pr-5 text-gray-500 hover:text-white no-underline">Features</a></li>
                 <li><a href="#" class="inline-block py-2 pl-3 pr-5 text-gray-500 hover:text-white no-underline">Integrations</a></li>
                 <li><a href="#" class="inline-block py-2 pl-3 pr-5 text-gray-500 hover:text-white no-underline">Pricing</a></li>
                 <li><a href="#" class="inline-block py-2 pl-3 pr-5 text-gray-500 hover:text-white no-underline">FAQ</a></li>
              </ul>
              <ul class="text-gray-700 list-none p-0 font-thin flex flex-col text-left w-full">
                 <li class="inline-block py-2 px-3 text-white uppercase font-medium tracking-wide">Company</li>
                 <li><a href="#" class="inline-block py-2 pl-3 pr-5 text-gray-500 hover:text-white no-underline">Privacy</a>
                 </li>
                 <li><a href="#" class="inline-block py-2 pl-3 pr-5 text-gray-500 hover:text-white no-underline">Terms of Service</a></li>
              </ul>
              <ul class="text-gray-700 list-none p-0 font-thin flex flex-col text-left w-full">
                 <li class="inline-block py-2 px-3 text-white uppercase font-medium tracking-wide">Developers</li>
                 <li><a href="#" class="inline-block py-2 pl-3 pr-5 text-gray-500 hover:text-white no-underline">Developer API</a></li>
                 <li><a href="#" class="inline-block py-2 pl-3 pr-5 text-gray-500 hover:text-white no-underline">Documentation</a></li>
                 <li><a href="#" class="inline-block py-2 pl-3 pr-5 text-gray-500 hover:text-white no-underline">Guides</a></li>
                 </li>
              </ul>

              <div class="text-gray-700 flex flex-col w-full">
                 <div class="inline-block py-2 px-3 text-white uppercase font-medium tracking-wide">Follow Us</div>
                 <div class="flex pl-4 justify-start mt-2">
                    <a class="block flex items-center text-gray-300 hover:text-white mr-6 no-underline" href="#">
                       <svg viewBox="0 0 24 24" class="fill-current w-5 h-5" xmlns="http://www.w3.org/2000/svg">
                          <path d="M23.998 12c0-6.628-5.372-12-11.999-12C5.372 0 0 5.372 0 12c0 5.988 4.388 10.952 10.124 11.852v-8.384H7.078v-3.469h3.046V9.356c0-3.008 1.792-4.669 4.532-4.669 1.313 0 2.686.234 2.686.234v2.953H15.83c-1.49 0-1.955.925-1.955 1.874V12h3.328l-.532 3.469h-2.796v8.384c5.736-.9 10.124-5.864 10.124-11.853z" />
                       </svg>
                    </a>
                    <a class="block flex items-center text-gray-300 hover:text-white mr-6 no-underline" href="#">
                       <svg viewBox="0 0 24 24" class="fill-current w-5 h-5" xmlns="http://www.w3.org/2000/svg">
                          <path d="M23.954 4.569a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.691 8.094 4.066 6.13 1.64 3.161a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.061a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.937 4.937 0 004.604 3.417 9.868 9.868 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63a9.936 9.936 0 002.46-2.548l-.047-.02z" />
                       </svg>
                    </a>
                 </div>
              </div>
           </div>
        </div>
        <div class="pt-4 mt-4 pt-6 text-white border-t border-gray-800 flex flex-col md:flex-row justify-center items-center">
           <div>© (2016 - 2021) Pearlbrains Ltd.</div>
           <div>&nbsp;All rights reserved.</div>
        </div>
     </footer>

@endsection
