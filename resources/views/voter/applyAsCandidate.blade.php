<x-app-layout>

        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
                {{ __('Welcome to Campus Voting System Arid') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto mb-4 sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-5 text-center bg-gray-900 text-white border-b border-gray-200">
                        <h1>DASHBOARD</h1><br>
                        <div class="text-2xl">Welcome {{ Auth::user()->name }}.</div><br>
                        <div class="text-xl">Account Approved.</div>
                    </div>
                    <div class="bg-white p-6">
                        <a href="" class="text-gray-600 font-bold ml-24">Details</a>
                        <a href="" class="text-gray-600 font-bold ml-12">Image</a>
                        <a href="" class="text-gray-600 font-bold ml-12">Password</a>
                        <a href="" class="text-gray-600 font-bold float-right mr-24">Logout</a>
                    </div>
                </div>
            </div>


        </div>

        <form class="flex flex-col justify-center items-center mb-4">

            <div class="md:flex md:items-center mb-6 justify-between">
              <div class="md:w-1/3">
                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                  Compaign
                </label>
              </div>

              <div class="md:w-3/3">
                <select class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" value= "{{ Auth::user()->name }}">
                    <option>Yes</option>
                    <option>No</option>
                    <option>Maybe</option>
                  </select>
                {{-- <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" value= "{{ Auth::user()->name }}"> --}}
              </div>
            </div>



            <div class="md:flex md:items-center">
              <div class="md:w-1/3"></div>
              <div class="md:w-1/3">
                <button class="h-12 text-lg rounded-lg shadow bg-purple-500 hover:bg-purple-700 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4" type="button">
                  Vote
                </button>
              </div>
            </div>
          </form>

           {{-- <div class="bg-gray-900 p-6 text-gray-100 flex flex-col justify-center items-center sticky-bottom">
             <ul>
                 <li class="h-10 ml-2">&copy; 2021 Voting, All Rights Reserved.</li>
             </ul>
          </div> --}}

</x-app-layout>
