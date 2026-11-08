<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('id', 'desc')->get();
        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title.*' => 'required|string',
        ]);
        Category::create($data);
        return redirect()->route('categories.index');

    }

    public function show(string $id)
    {
        //
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'title.*' => 'required|string|min:3',
        ]);
        $category = Category::findOrFail($id);
        $category->update($data);
        return redirect()->route('categories.index');
    }

    public function destroy(Request $request, $id)
    {
        $category = Category::findOrFail($request->id);
        $category->delete();
        return back();
    }
}