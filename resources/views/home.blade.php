<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Products') }}
      </h2>
  </x-slot>

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
