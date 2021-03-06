@extends('layouts.default')

@section('content')

<section class="bg-gray-100">
      <div class="flex flex-col text-center w-full mt-20 underline uppercase ">
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">about bigfan</h1>
      </div>

      <!----background---->

    <div class="max-w-5xl px-6 py-16 mx-auto">
        <h2 class="text-3xl font-semibold text-gray-800">background</h2>
        <p class="max-w-lg mt-4 text-gray-600">A Dream to change our music indusrty fron anlog to digital, through<br> digitalizing the entire entertainment industry starting from Uganda <br>as moving to the whole world.</p>
        <div class="grid gap-8 mt-10 md:mt-20 md:grid-cols-2">
            <div class="flex space-x-4">
                <svg class="w-6 h-6 text-red-900" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M47.6268 23.7062C48.2466 24.4484 48.2466 25.5277 47.6268 26.2699L44.4812 30.0372C43.803 30.8493 43.4742 31.8971 43.5669 32.9512L44.0044 37.9287C44.0912 38.9165 43.4411 39.8188 42.4765 40.0491L38.0619 41.1031C36.9808 41.3612 36.0559 42.0575 35.5089 43.025L33.2053 47.099C32.6961 47.9995 31.5844 48.3631 30.6415 47.9375L26.6498 46.1358C25.6003 45.6621 24.3976 45.6636 23.3493 46.14L19.3597 47.9531C18.4161 48.3819 17.3014 48.0189 16.7912 47.1168L14.4911 43.0489C13.9441 42.0814 13.0192 41.3851 11.9381 41.127L7.52286 40.0728C6.55849 39.8426 5.90838 38.9406 5.99496 37.9529L6.43346 32.9505C6.52583 31.8968 6.19706 30.8494 5.5191 30.0375L2.37029 26.2665C1.75138 25.5253 1.75043 24.4477 2.36803 23.7054L5.52362 19.9127C6.1988 19.1012 6.52582 18.0557 6.43339 17.0041L5.99624 12.0308C5.90922 11.0408 6.56225 10.1372 7.52946 9.90904L11.9298 8.87123C13.0153 8.61522 13.9446 7.91765 14.4935 6.94684L16.7947 2.87709C17.3039 1.97664 18.4156 1.61302 19.3585 2.03858L23.3544 3.8422C24.4007 4.31444 25.5993 4.31444 26.6456 3.8422L30.6415 2.03858C31.5844 1.61301 32.6961 1.97663 33.2053 2.87709L35.5089 6.95112C36.0559 7.9186 36.9808 8.61486 38.0619 8.87297L42.4765 9.92701C43.4411 10.1573 44.0912 11.0596 44.0044 12.0474L43.5669 17.0249C43.4742 18.079 43.803 19.1268 44.4812 19.939L47.6268 23.7062ZM25 37.9326C26.8075 37.9326 28.2727 36.4674 28.2727 34.6599V34.4275C28.2727 32.6201 26.8075 31.1548 25 31.1548C23.1925 31.1548 21.7273 32.6201 21.7273 34.4275V34.6599C21.7273 36.4674 23.1925 37.9326 25 37.9326ZM25 28.377C26.8075 28.377 28.2727 26.9117 28.2727 25.1042V15.3162C28.2727 13.5087 26.8075 12.0435 25 12.0435C23.1925 12.0435 21.7273 13.5087 21.7273 15.3162V25.1042C21.7273 26.9117 23.1925 28.377 25 28.377Z"
                        stroke="currentColor" stroke-width="2" />
                </svg>

                <div>
                    <h4 class="text-xl font-medium text-gray-800">Bigfan service</h4>
                    <p class="max-w-lg mt-4 text-gray-600">Vitae nulla nunc euismod vel nunc euismod velpretium tellus
                        accumsan nulla nunc euismod ve semper.</p>
                </div>
            </div>

            <div class="flex space-x-4">
                <svg class="w-6 h-6 text-red-900" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M1 25C1 11.8023 11.8023 1 25 1C38.1977 1 49 11.8023 49 25C49 38.1977 38.1977 49 25 49C11.8023 49 1 38.1977 1 25ZM33.36 35.3573C34.7228 36.1959 36.5074 35.771 37.346 34.4082C38.1913 33.0346 37.7522 31.2351 36.3692 30.4053L28.221 25.5164C27.6186 25.155 27.25 24.504 27.25 23.8014V14.375C27.25 12.7872 25.9628 11.5 24.375 11.5C22.7872 11.5 21.5 12.7872 21.5 14.375V25.8236C21.5 27.2127 22.2206 28.5023 23.4036 29.2302L33.36 35.3573Z"
                        stroke="currentColor" stroke-width="2" />
                </svg>

                <div>
                    <h4 class="text-xl font-medium text-gray-800">Developing websites</h4>
                    <p class="max-w-lg mt-4 text-gray-600">Vitae nulla euismod velpretium tellus accumsan nulla nunc
                        euismod ve semper. Vitae nulla euismod velpretium tellus
                        accumsan nulla nunc euismod ve semper. Vitae nulla euismod velpretium tellus accumsan nulla nunc
                        euismod ve semper.</p>
                </div>
            </div>
        </div>
    </div>

    <!------OUR TEAM--->
    <div class="flex flex-col text-center w-full mt-20 underline uppercase ">
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">some of the team members</h1>
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-4">

        <div class="flex flex-col items-center justify-center bg-white p-4 shadow rounded-lg">
            <div class="inline-flex shadow-lg border border-gray-200 rounded-full overflow-hidden h-40 w-40">
                <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&w=128&h=128&q=60&facepad=2"
                     alt=""
                     class="h-full w-full">
            </div>

            <h2 class="mt-4 font-bold text-xl">Sebastian Bennett</h2>
            <h6 class="mt-2 text-sm font-medium">Founder</h6>

            <p class="text-xs text-gray-500 text-center mt-3">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab enim molestiae nulla.
            </p>

            <ul class="flex flex-row mt-4 space-x-2">
                <li>
                    <a href="" class="flex items-center hover:text-green-700 bg-blue-400 justify-center h-8 w-8 border rounded-full text-white border-gray-800">
                        <i class="fab fa-facebook"></i>
                    </a>
                </li>
                <li>
                    <a href="" class="flex items-center justify-center h-8 w-8 border hover:text-green-700 bg-blue-400 rounded-full text-white border-gray-800">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="" class="flex items-center justify-center h-8 w-8 border rounded-full hover:text-green-700 bg-red-100 text-white border-gray-800">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
            </ul>
        </div>

        <div class="flex flex-col items-center justify-center bg-white p-4 shadow rounded-lg">
            <div class="inline-flex shadow-lg border border-gray-200 rounded-full overflow-hidden h-40 w-40">
                <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&w=128&h=128&q=60&facepad=2"
                     alt=""
                     class="h-full w-full">
            </div>

            <h2 class="mt-4 font-bold text-xl">Sebastian Bennett</h2>
            <h6 class="mt-2 text-sm font-medium">Founder</h6>

            <p class="text-xs text-gray-500 text-center mt-3">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab enim molestiae nulla.
            </p>

            <ul class="flex flex-row mt-4 space-x-2">
                <li>
                    <a href="" class="flex items-center hover:text-green-700 bg-blue-400 justify-center h-8 w-8 border rounded-full text-white border-gray-800">
                        <i class="fab fa-facebook"></i>
                    </a>
                </li>
                <li>
                    <a href="" class="flex items-center justify-center hover:text-green-700 bg-blue-400 h-8 w-8 border rounded-full text-white border-gray-800">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="" class="flex items-center justify-center hover:text-green-700 bg-red-100 h-8 w-8 border rounded-full text-white border-gray-800">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
            </ul>
        </div>

        <div class="flex flex-col items-center justify-center bg-white p-4 shadow rounded-lg">
            <div class="inline-flex shadow-lg border border-gray-200 rounded-full overflow-hidden h-40 w-40">
                <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&w=128&h=128&q=60&facepad=2"
                     alt=""
                     class="h-full w-full">
            </div>

            <h2 class="mt-4 font-bold text-xl">Sebastian Bennett</h2>
            <h6 class="mt-2 text-sm font-medium">Founder</h6>

            <p class="text-xs text-gray-500 text-center mt-3">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab enim molestiae nulla.
            </p>

            <ul class="flex flex-row mt-4 space-x-2">
                <li>
                    <a href="" class="flex items-center hover:text-green-700 bg-blue-400 justify-center h-8 w-8 border rounded-full text-white border-gray-800">
                        <i class="fab fa-facebook"></i>
                    </a>
                </li>
                <li>
                    <a href="" class="flex items-center hover:text-green-700 bg-blue-400 justify-center h-8 w-8 border rounded-full text-white border-gray-800">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="" class="flex items-center hover:text-green-700 bg-red-100 justify-center h-8 w-8 border rounded-full text-white border-gray-800">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
            </ul>
        </div>

        <div class="flex flex-col items-center justify-center bg-white p-4 shadow rounded-lg">
            <div class="inline-flex shadow-lg border border-gray-200 rounded-full overflow-hidden h-40 w-40">
                <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&w=128&h=128&q=60&facepad=2"
                     alt=""
                     class="h-full w-full">
            </div>

            <h2 class="mt-4 font-bold text-xl">Sebastian Bennett</h2>
            <h6 class="mt-2 text-sm font-medium">Founder</h6>

            <p class="text-xs text-gray-500 text-center mt-3">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab enim molestiae nulla.
            </p>

            <ul class="flex flex-row mt-4 space-x-2">
                <li>
                    <a href="" class="flex items-center hover:text-green-700 bg-blue-400 justify-center h-8 w-8 border rounded-full text-white border-gray-800">
                        <i class="fab fa-facebook"></i>
                    </a>
                </li>
                <li>
                    <a href="" class="flex items-center hover:text-green-700 bg-blue-400 justify-center h-8 w-8 border rounded-full text-white border-gray-800">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="" class="flex items-center hover:text-green-700 bg-blue-400 justify-center h-8 w-8 border rounded-full text-white bg-gray-800">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
            </ul>
        </div>

    </div>

</section>


@endsection
