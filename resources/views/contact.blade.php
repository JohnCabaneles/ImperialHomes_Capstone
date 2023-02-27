<div style="background-image: url('/images/deal1.jpg')" class="w-full h-960 bg-fixed bg-cover bg-no-repeat bg-center">
  <x-layout>
  
      <div>
          <a href="/listings/property" class="inline-block text-white hover:text-amber-500 rounded-md py-2 px-4 "
          ><i class="fa-solid fa-arrow-left"></i> Back
        </a>
        @if (session('success'))
        <div x-data="{show: true}" x-init="setTimeout(() => show = false, 5000)" x-show="show" class="alert alert-success flex fixed left-0 top-0 transform bg-yellow-500 text-white px-20 py-3 ml-20 animate__animated animate__fadeInDown">
        {{ session('success') }}
        </div>
        @endif
      </div>
  

  
  <section class="px-32 py-52 text-gray-800">
      <div class="text-gray-800 px-4 md:px-12">
        <div class="block rounded-lg shadow-lg py-10 md:py-12 px-4 md:px-6 bg-gradient-to-t from-cyan-800/60 to-cyan-500/40" style="
            margin-top: -100px;
            backdrop-filter: blur(5px);
          ">
          <div class="text-center mx-auto font-medium text-4xl text-white">
            <h1 class="title"><span class="text-amber-500">Contact</span> Us</h1>
          </div>
          <br />
          <br />
          <div class="max-w-[700px] mx-auto">
          
          <form action="/contact" method="POST">
              @csrf
              <div class="form-group mb-6">               
                  <input type="text" name="name" id="name" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Name">
              </div>
              <div class="form-group mb-6">
                  
                  <input type="email" name="email" id="email" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Email address">
              </div>
              <div class="form-group mb-6">
                  
                  <textarea name="content" id="content" cols="30" rows="10" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" rows="3" placeholder="Message"></textarea>
              </div>
              
              <button type="submit"
                class="w-full px-6 py-2.5 border-b-cyan-500 border-b-2 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-cyan-800 hover:shadow-lg focus:bg-cyan-800 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-cyan-800 active:shadow-lg transition duration-150 ease-in-out">
                Send
              </button>
            </form>
          </div>
        </div>
      </div>
    </section>
  </x-layout>
  </div>