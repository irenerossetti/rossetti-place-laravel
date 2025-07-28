<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Catálogo de Perfumes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

                @foreach ($products as $product)
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <img src="{{ asset($product->image_url) }}" alt="{{ $product->name }}" class="w-full h-5000 object-cover">
                        
                        <div class="p-4">
                            <h3 class="text-lg font-bold text-gray-900">{{ $product->name }}</h3>
                            
                            <p class="text-sm text-gray-600 mt-1">{{ $product->description }}</p>

                            <p class="text-xl font-semibold text-gray-800 mt-4">{{ $product->price }} Bs</p>

                            <button class="mt-4 w-full bg-yellow-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-yellow-600 transition">
                                Comprar
                            </button>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</x-app-layout>