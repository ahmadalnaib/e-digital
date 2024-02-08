<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Products') }}
      </h2>
  </x-slot>

  <section class="w-full py-20 bg-white">
    <div class="flex flex-col items-center px-12 mx-auto max-w-7xl lg:flex-row">
        <div class="relative z-20 flex flex-col items-start justify-center w-full h-full lg:w-5/12">
            <p class="pb-5 text-sm font-medium tracking-wide text-pink-500 uppercase">The Ultimate Design Treasury</p>
            <h1 class="text-5xl font-bold xl:text-6xl pb-7 ">The Definitive Design Vault</h1>
            <p class="text-lg text-gray-500 pb-7">Dive into our carefully assembled selection of designs, meticulously constructed to deliver pure excellence for your projects.</p>
            <div class="flex flex-col items-center w-full sm:w-auto sm:flex-row sm:space-x-10">
                <a href="#_" class="px-7 sm:w-auto justify-center w-full flex items-center overflow-hidden group relative py-3.5 text-xl font-medium text-white bg-gray-900 rounded-full">
                    <span class="absolute inset-0 w-full h-0 transition-all duration-300 ease-out bg-pink-500 group-hover:h-full"></span>
                    <span class="relative">Get Started</span>
                </a>
                <a href="#_" class="flex items-center mt-10 text-xl font-medium underline transition duration-150 ease-out hover:text-pink-500 sm:mt-0">
                    <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path></svg>
                    <span>Learn More</span>
                </a>
            </div>
        </div>

        <div class="relative z-10 w-full h-full my-16 lg:my-0 lg:w-7/12">
            <img class="relative z-40 w-full h-full" src="https://cdn.devdojo.com/images/june2021/home-hero.png">
            <div class="box-content absolute inset-0 z-30 hidden scale-150 translate-x-40 translate-y-10 rounded-full w-80 lg:block h-80 xl:w-96 xl:h-96 bg-pink-50"></div>
            <div class="absolute bottom-0 left-0 z-20 hidden -translate-x-3 -translate-y-12 rounded-full opacity-50 w-72 lg:block h-72 bg-yellow-50"></div>
            <div class="absolute top-0 left-0 z-20 hidden -translate-x-12 -translate-y-12 rounded-full opacity-50 w-72 lg:block h-72 bg-blue-50"></div>
        </div>
    </div>
</section>


  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
       
              <div class="py-12 text-gray-900">
                 
                  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                      @foreach ($products as $product)
                          <a href="{{route('product.show',$product)}}" class="bg-white p-6 overflow-hidden shadow-sm sm:rounded-lg">
                              <div class="p-6">
                                  <h2 class="text-2xl font-bold mb-2">{{ $product->name }}</h2>
                                  <p class="text-gray-600 mb-4">{{ $product->description }}</p>
                                  <p class="text-gray-800 font-bold text-xl">{{ $product->price }}</p>
                              </div>
                          </a>
                      @endforeach
                  </div>
          
          </div>
      </div>
  </div>
</x-app-layout>
