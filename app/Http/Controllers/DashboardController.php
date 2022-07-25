<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\{
    Product,
    User,
    Category
};

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::paginate(5);
        $user = Auth::user();
        $products = Product::where('user_id', $user->id)->get();
        $categories = Category::paginate(5)->withPath('/categorias');
        $allProducts = Product::paginate(5);
        return view('dashboard', compact('users', 'products', 'categories', 'allProducts'));
    }
}
