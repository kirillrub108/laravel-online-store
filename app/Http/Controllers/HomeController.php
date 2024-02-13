<?php

namespace App\Http\Controllers;

use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::all(); // Получение всех продуктов из базы данных
        return view('index', compact('products')); // Передача продуктов в представление 'index.blade.php'
    }
}


