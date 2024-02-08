<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Cart
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="py-12 text-gray-900">
                @if (optional(optional($cart)->products)->count() > 0)

                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                        @foreach ($cart->products as $product)
                            <div class="bg-white p-6 overflow-hidden shadow-sm sm:rounded-lg border-b">
                                <div class="font-semibold">
                                    {{ $product->name }}
                                </div>
                                <div>
                                    {{ $product->description }}
                                </div>
                                <div class="text-green-600">
                                    {{ $product->price }}
                                </div>
                                <form action="{{route('cart.product.destroy',$product)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <div class="mt-3">
                                        <button class="text-indigo-500">
                                            REMOVE FROM CART
                                        </button>
                                    </div>
                                </form>
                            </div>
                        @endforeach
                   

                        <div class="mt-4">
                            <div class="mb-2">Cart total: {{$cart->total()}} </div>
                           
                                <x-primary-button>
                                    CHECKOUT
                                </x-primary-button>
                        



                    </div>
                    </div>
                   
                @else
                    <div class="bg-white p-6 overflow-hidden shadow-sm sm:rounded-lg">
                        <div>
                            Your cart is empty
                        </div>

                    </div>
                @endif
            </div>
        </div>
</x-app-layout>
