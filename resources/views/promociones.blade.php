<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Promociones del Mes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        @foreach ($promotions as $promo)
                            <div class="border rounded-lg p-4 text-center">
                                <img src="{{ $promo->image_url }}" alt="{{ $promo->name }}" class="mx-auto mb-4">
                                <h3 class="text-lg font-bold">{{ $promo->name }}</h3>
                                <p class="text-gray-500">
                                    Antes: <span class="line-through">{{ $promo->old_price }} Bs</span>
                                </p>
                                <p class="text-red-500 text-xl font-bold">
                                    Ahora: {{ $promo->price }} Bs
                                </p>
                                <button class="mt-4 bg-green-500 text-white py-2 px-4 rounded">
                                    Comprar
                                </button>
                            </div>
                        @endforeach
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>