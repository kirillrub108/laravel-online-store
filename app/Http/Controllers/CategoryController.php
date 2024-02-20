<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all(); // Получаем все категории из базы данных
        return view('categories', compact('categories')); // Передаем категории в представление
    }

    public function showCategoryProducts($category_id) // Лучше явно указать, что это ID
    {
        $category = Category::findOrFail($category_id); // Получаем объект категории по ID или возвращаем 404 ошибку, если такой категории нет
        $products = $category->products; // Получаем продукты этой категории, предполагая, что у вас настроено отношение в модели Category

        return view('category', compact('category', 'products')); // Передаём и категорию, и продукты в представление
    }



}
