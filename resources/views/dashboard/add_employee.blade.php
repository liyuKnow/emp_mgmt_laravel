{{-- extends mater --}}
@extends('dashboard.master')

{{-- title --}}
@section('title')
    Home
@endsection

    
    {{-- content --}}   
@section('content')
<div class="flex flex-wrap">
    <div class="w-full lg:w-full my-6 pr-0 lg:pr-2">
        <p class="text-xl pb-6 flex items-center">
            <i class="fas fa-list mr-3"></i> Contact Form
        </p>
        <div class="leading-loose">
            <form class="p-10 bg-white rounded shadow-xl" action="/add_employee" method="POST">
                <div class="flex flex-wrap -mx-3 mb-2">
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block text-sm text-gray-600" for="name">First Name</label>
                        <input class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded" id="name" name="name" type="text" required="" placeholder="Your Name" aria-label="Name">
                    </div>
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block text-sm text-gray-600" for="name">Middle Name</label>
                        <input class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded" id="name" name="name" type="text" required="" placeholder="Your Name" aria-label="Name">
                    </div>
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block text-sm text-gray-600" for="name">Last Name</label>
                        <input class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded" id="name" name="name" type="text" required="" placeholder="Your Name" aria-label="Name">
                    </div>
                </div>

                <div class="flex flex-wrap -mx-3 mb-2">
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                        City
                      </label>
                      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" placeholder="Albuquerque">
                    </div>
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                        State
                      </label>
                      <div class="relative">
                        <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                          <option>New Mexico</option>
                          <option>Missouri</option>
                          <option>Texas</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                      </div>
                    </div>
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                        Zip
                      </label>
                      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" type="text" placeholder="90210">
                    </div>
                  </div>
                <div class="mt-6">
                    <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
    
    {{-- script --}}    
@section('script')

@endsection