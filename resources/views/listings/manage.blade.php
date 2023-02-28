<x-layout>
  <x-card class="p-10">
    <div>
      <a href="/" class="inline-block text-white hover:text-amber-500 rounded-md py-2 px-4 "
      ><i class="fa-solid fa-arrow-left"></i> Back
    </a>
    </div>
            
    <header>
        <h1 class="text-5xl text-center text-yellow-500 font-bold mt-6 mb-20">
            Manage Properties
        </h1>
    </header>

    <div class="flex flex-col sm:m-5 lg:m-32 bg-black/30 rounded-md">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
          <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
            <div class="overflow-x-auto">
              <table class="min-w-full mb-10">
                
                <thead class="border-b border-cyan-600">
                  
                    <tr>
                      @unless($listings->isEmpty())
                      
                      <th scope="col" class="text-xl font-medium text-white px-6 py-10 text-left">
                        Property Name
                      </th>
                      <th scope="col" class="text-xl font-medium text-white px-6 py-10 text-left">
                        Image
                      </th>
                    </tr>
                  </thead>
                
                  @foreach($listings as $listing)
                <tbody>
                  <tr class="border-b border-cyan-600">

                    <td class="text-md text-white font-normal px-6 py-10 whitespace-nowrap">
                        <a href="/listings/{{$listing->id}}"> {{$listing->propertyName}} </a>
                    </td>
                    <td class="text-md text-white font-normal px-6 py-1 whitespace-nowrap">
                        <img
                        class="w-30 h-20"
                        src="{{$listing->file ? asset('storage/' . $listing->file) : asset('images/no-image.png')}}"
                        alt=""
                      />
                    </td>
    
                    
                        <td class="text-md text-white font-light px-1 py-10 whitespace-nowrap flex justify-end ml-32">
                            <a href="/listings/{{$listing->id}}/edit" class="text-white bg-blue-600 hover:bg-blue-800 hover:text-white marker:block font-medium rounded-lg text-sm px-5 py-2.5 text-center"><i class="fa-solid fa-pen-to-square"></i>
                            Edit</a>
                        </td>
                        <td class="text-md text-white font-light px-1 py-10 whitespace-nowrap">
                              
                              <form method="POST" action="/listings/{{$listing->id}}">
                                @csrf
                                @method('DELETE')
                                <button  class="text-red-500 text-white bg-red-600 hover:bg-red-800 marker:block font-medium rounded-lg text-sm px-5 py-2.5 text-center" ><i class="fa-solid fa-trash"></i>
                                    Delete
                                </button>
                                </form>
                              
                        </td>
                    
                  </tr>
                  @endforeach
                @else
               
                      <p class="text-center text-white text-2xl p-5 pt-5">No Listings Found</p>                  
                   
                @endunless
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
  </x-card>

</x-layout>



