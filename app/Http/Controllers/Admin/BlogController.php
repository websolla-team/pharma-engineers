<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::orderBy('id', 'desc')->get();
        return view('admin.blogs.index', compact('blogs'));
    }

    public function create()
    {
        return view('admin.blogs.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'image' => 'required|image',
            'text.*' => 'required|string|min:3',
            'title.*' => 'required|string|min:3',
        ]);
        $fileName = Helper::storeImage($request->file('image'), 'blogs');
        $data['image'] = $fileName;
        Blog::create($data);
        return redirect()->route('blogs.index');

    }

    public function show(string $id)
    {
        //
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.blogs.edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'image' => 'nullable|image',
            'text.*' => 'required|string|min:3',
            'title.*' => 'required|string|min:3',
        ]);
        unset($data['image']);
        $blog = Blog::findOrFail($id);
        if ($request->image) {
            $fileName = Helper::updateImage($request->file('image'), $blog->image, 'blogs');
            $data['image'] = $fileName;
        }
        $blog->update($data);
        return redirect()->route('blogs.index');
    }

    public function destroy(Request $request, $id)
    {
        $blog = Blog::findOrFail($request->id);
        $oldImage = $blog->image ?? '0';
        Helper::deleteImage($oldImage);
        $blog->delete();
        return back();
    }
}
