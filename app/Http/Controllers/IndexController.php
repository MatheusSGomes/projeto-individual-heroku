<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    Category,
    Product
};

class IndexController extends Controller
{
    public function __construct(Product $products)
    {
        $this->model = $products;
    }

    public function index()
    {
        $categories = Category::with('products')->get();
        $products = Product::paginate(9);
        return view('index', compact('categories', 'products'));
    }

    public function search(Request $request)
    {
        $products = $this->model->getProducts($request->search ?? '');
        $search = $request->search;
        return view('search', compact('products', 'search'));
    }
}
