@extends('layouts.default')

@section('content')

<section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto flex flex-wrap items-center justify-center" style="background:url('https://cdn.pixabay.com/photo/2017/08/19/19/43/nature-2659682_1280.jpg')">
      <div class="lg:w-3/5 lg:pr-0 pr-0">
        <h1 class="title-font font-medium font-bold text-5xl text-white">Space provided for a song link creation!</h1>
        <p class="leading-relaxed mt-4 text-white">Make sure you fill the space.</p>
      </div>
      <div class="lg:w-2/6 xl:w-2/5 md:w-2/3 bg-gray-100 rounded-lg p-8 flex flex-col lg:ml-auto w-full mt-10 lg:mt-0">
        <div class="container mx-auto">
            <div class="inputs w-full max-w-2xl p-6 mx-auto">
                <h2 class="text-2xl text-gray-900 uppercase">create a song title!</h2>
                <form class="mt-6 border-t border-gray-400 pt-4">
                    <div class='flex flex-wrap -mx-3 mb-6'>

                        <div class="w-full md:w-full px-3 mb-6">
                            <label for="title" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Title:</label>
                            <input type="text" name="Title" id="Title" autocomplete="given-name" class="block appearance-none text-gray-600 w-full bg-white border border-gray-400 shadow-inner px-4 py-2 pr-8 rounded">
                          </div>


                        <div class='w-full md:w-full px-3 mb-6'>
                            <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'>Language:</label>
                            <div class="flex-shrink w-full inline-block relative">
                                <select class="block appearance-none text-gray-600 w-full bg-white border border-gray-400 shadow-inner px-4 py-2 pr-8 rounded">
                                    <option>choose ...</option>
                                    <option>English</option>
                                    <option>Kiswahili</option>
                                    <option>Luganda</option>
                                </select>
                                <div class="pointer-events-none absolute top-0 mt-3  right-0 flex items-center px-2 text-gray-600">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                </div>
                            </div>
                        </div>
                        <div class="personal w-full border-t border-gray-400 pt-4">
                            <div class="flex justify-end">
                                <button class="appearance-none bg-gray-200 text-gray-900 px-2 py-1 shadow-sm border border-gray-400 rounded-md mr-3" type="submit">Submit:</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </section>

@endsection
