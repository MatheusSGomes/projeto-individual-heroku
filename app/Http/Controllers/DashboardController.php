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
        $users = User::all();
        $user = Auth::user();
        $allProducts = Product::all();
        $products = Product::where('user_id', $user->id)->get();
        $categories = Category::all();
        return view('dashboard', compact('users', 'products', 'categories', 'allProducts'));
    }
}
