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

                         @money($product->price)
                         </div>
                          
                         <form action="{{route('cart.product.store')}}" method="post">
                          @csrf
                          <input type="hidden" name="product_id" value="{{$product->id}}">
                           <div class="mt-3">
                            <x-primary-button >
                              ADD TO CART
                            </x-primary-button>
                         </div>
                         </form>
                  </div>
          
          </div>
      </div>
  </div>
</x-app-layout>
