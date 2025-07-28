<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function process(Request $request)
    {
        // Crea un nuevo pedido en la base de datos
        Order::create([
            'user_id' => Auth::id(), // Obtiene el ID del usuario autenticado
            'amount' => $request->input('amount'),
            'status' => 'completed' // Como es una simulación, lo marcamos como completado
        ]);

        // Redirige al usuario al dashboard con un mensaje de éxito
        return redirect()->route('dashboard')->with('success_message', '¡Tu pago ha sido procesado exitosamente!');
    }
}