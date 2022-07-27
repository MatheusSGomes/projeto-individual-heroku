<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new Category;
        $category->name = $request->input('name');
        if($request->image)
            $category->image = $request->file('image')->store('categories', 'public');
        $category->save();
        session()->flash('category-created', 'Categoria cadastrada com sucesso!');
        if(Auth::user())
            return redirect()->route('dashboard');
        return redirect()->route('categories.index'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::find($id);
        return view('categories.show', compact('category'));
    }

    public function showproducts($id)
    {
        $category = Category::with('products')->where('id', $id)->first();
        return view('categories.showproducts', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view('categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->name = $request->input('name');
        if($request->image)
            $category->image = $request->file('image')->store('categories', 'public');
        $category->save();
        session()->flash('category-updated', 'Categoria atualizada com sucesso!');
        if(Auth::user())
            return redirect()->route('dashboard');
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        if($category->image)
            unlink(public_path('storage/'.$category->image));
        session()->flash('category-destroy', 'Categoria apagada com sucesso!');
        if(Auth::user())
            return redirect()->route('dashboard');
        return redirect()->route('categories.index');
    }
}
