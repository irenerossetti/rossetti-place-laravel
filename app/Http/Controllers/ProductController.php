<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // No olvides importar el modelo 
class ProductController extends Controller
{
    

public function showCatalog()
{
    // Obtiene todos los productos de la categoría 'Perfumes'
    $products = Product::where('category', 'Perfumes')->get();

    // Devuelve la vista y le pasa los productos
    return view('catalogo', ['products' => $products]);
}
public function showPromotions()
{
    // La única diferencia es que ahora filtramos por la categoría 'Promociones'
    $promotions = Product::where('category', 'Promociones')->get();

    // Devolvemos una nueva vista llamada 'promociones' y le pasamos los datos
    return view('promociones', ['promotions' => $promotions]);
}
}


