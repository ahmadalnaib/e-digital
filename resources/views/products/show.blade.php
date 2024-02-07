<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ $product->name }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
       
              <div class="py-12 text-gray-900">
                 
                  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 gap-4">
                    
                          <div class="bg-white p-6 overflow-hidden shadow-sm sm:rounded-lg">
                         <div>
                          {{ $product->name }}
                         </div>
                         <div>

                           {{ $product->description }}
                         </div>
                         <div>

                           {{ $product->price }}
                         </div>

                            <div class="mt-3">
                             <x-primary-button >
                               Pay
                             </x-primary-button>
                          </div>
                  </div>
          
          </div>
      </div>
  </div>
</x-app-layout>
