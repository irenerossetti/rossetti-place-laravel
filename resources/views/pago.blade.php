<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Método de Pago') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-md mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-center mb-6">Método de Pago</h3>
                    
                    <form>
                        <div class="mb-4">
                            <label for="card_number" class="block text-sm font-medium text-gray-700">Número de Tarjeta</label>
                            <input type="text" id="card_number" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" placeholder="XXXX XXXX XXXX XXXX">
                        </div>

                        <div class="grid grid-cols-2 gap-4 mb-4">
                            <div>
                                <label for="cvv" class="block text-sm font-medium text-gray-700">Número del reverso</label>
                                <input type="text" id="cvv" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" placeholder="CVV">
                            </div>
                            <div>
                                <label for="expiry_date" class="block text-sm font-medium text-gray-700">DD/MM/AA</label>
                                <input type="text" id="expiry_date" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" placeholder="MM/AA">
                            </div>
                        </div>

                        <div class="mb-6">
                            <label for="amount" class="block text-sm font-medium text-gray-700">Monto</label>
                            <input type="text" id="amount" value="150.00 Bs" disabled class="mt-1 block w-full border-gray-300 rounded-md shadow-sm bg-gray-100">
                        </div>

                        <button type="submit" class="w-full bg-yellow-500 text-white font-bold py-3 px-4 rounded-lg hover:bg-yellow-600">
                            Pagar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>