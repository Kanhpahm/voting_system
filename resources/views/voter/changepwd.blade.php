<x-app-layout>

    <x-slot name="header">

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto mb-4 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-24 text-center bg-gray-900 text-white border-b border-gray-200">
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

    <form class="w-full max-w-6xl p-4 mt-5">

        <div class="md:flex md:items-center mb-6">
          <div class="md:w-1/3">
            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-password">
             Current Password
            </label>
          </div>
          <div class="md:w-2/3">
            <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-password" type="password" placeholder="******************">
          </div>
        </div>
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
              <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-password">
              New Password
              </label>
            </div>
            <div class="md:w-2/3">
              <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-password" type="password" placeholder="******************">
            </div>
          </div>
          <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
              <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-password">
               Confirm New Password
              </label>
            </div>
            <div class="md:w-2/3">
              <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-password" type="password" placeholder="******************">
            </div>
          </div>


        <div class="md:flex md:items-center">
          <div class="md:w-1/3"></div>
          <div class="md:w-2/3">
            <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button">
              Submit
            </button>
          </div>
        </div>
      </form>
      <div class="bg-gray-900 p-6 text-gray-100">
        <ul>
            <li id="copy">&copy; 2021 Voting, All Rights Reserved.</li>
            <li id="voting">Voting.</li>
        </ul>

    </div>

  </div>

</div>
</x-app-layout>

