<x-layout>

  <x-card class="p-5">
    <div>
      <a href="/listings/property" class="inline-block text-white hover:text-amber-500 rounded-md py-2 px-4 "
      ><i class="fa-solid fa-arrow-left"></i> Back
    </a>
    </div>
    <div class="mx-6 py-10 text-center md:text-left">
      <div class="grid grid-1 md:grid-cols-1 lg:grid-cols-2 gap-0">
  
        <div class="grid justify-items-stretch col-span-1 lg:col-span-1">
          <img
            class="w-full h-full mr-6 rounded-md"
            src="{{$listing->file ? asset('storage/' . $listing->file) : asset('images/h10.jpg')}}"
            alt=""
        />
        </div>
  
        <div  class="flex flex-col justify-center items-center lg:items-start bg-black/30 p-5">
          <h3 class="text-5xl text-amber-500 font-bold mb-2">{{$listing->propertyName}}</h3>
        
              <div class="flex gap-2">
                <span class="flex">
                    <x-listing-tags :tagsCsv="$listing-> tags"/>
                </span>           
                <span class="text-lg text-white">
                    <i class="fa-solid fa-location-dot text-white"></i> {{$listing->location}}
                </span>
              </div>
              <div class="text-xl font-light text-white">
                {{$listing->model}}
              </div>
        
                
              <div class="text-lg mb-2 text-white">
                <span class="text-white">Price: </span>
                {{$listing->price}}
             </div>
        

        <div  class="flex flex-col items-center lg:items-start bg-black/30 p-5 lg:mt-5">
          <h3 class="text-3xl font-bold mb-2 text-amber-500">
            Property Description
        </h3>
        <div class="text-lg space-y-6 text-white">
            <p>
              {{$listing->description}}
            </p>
        </div>
        </div>
      </div>

      </div>
    </div>      
    </x-card>

</x-layout>