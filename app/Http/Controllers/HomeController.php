<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Courses;
use App\Models\Gallery;
use App\Models\Page;
use App\Models\questions;
use App\Models\Review;
use App\Models\Service;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $slider = Slider::get(['id', 'image', 'title']);
        $services = Service::latest()->get();
        $galleries = Gallery::with('category')->inRandomOrder()->limit(15)->get();
        $clients = Brand::latest()->get(['image']);
        $reviews = Review::latest()->get();
        $blogs = Blog::latest()->limit(3)->get();
        $qustions = questions::get(['answer', 'question']);
        $cources = Courses::get();
        return view('website.index', compact(
            'slider',
            'services',
            'galleries',
            'clients',
            'reviews',
            'blogs',
            'qustions',
            'cources',
        ));
    }

    public function gallery()
    {
        $categories = Category::all();
        $galleries = Gallery::with('category:id,title')->latest()->get();
        return view('website.gallery', compact('galleries', 'categories'));
    }

    public function galleryDetails($id)
    {
        $gallery = Gallery::findOrFail($id);
        $galleries = Gallery::where('id', '!=', $id)->with('category')->latest()->get();
        return view('website.gallery-details', compact('gallery', 'galleries'));
    }
    public function services()
    {
        $services = Service::latest()->get();
        return view('website.services', compact('services'));
    }

    public function serviceDetails($id)
    {
        $service = Service::findOrFail($id);
        $services = Service::where('id', '!=', $id)->latest()->limit(5)->get();
        return view('website.service-details', compact('service', 'services'));
    }

    public function blogs(Request $request)
    {
        $blogs = Blog::when(isset($request->search), function ($query) use ($request) {
            return $query->where('title->en', 'like', "%{$request->search}%")
                ->orWhere('title->ar', 'like', "%{$request->search}%")
                ->orWhere('text->en', 'like', "%{$request->search}%")
                ->orWhere('text->ar', 'like', "%{$request->search}%");
        })->latest()->get();
        $latests = Blog::latest()->limit(3)->get();
        $brands = Brand::latest()->get();
        return view('website.blogs', compact('blogs', 'latests', 'brands'));
    }

    public function blogDetails($id)
    {
        $blog = Blog::findOrFail($id);
        $latests = Blog::where('id', '!=', $id)->latest()->limit(3)->get();
        $blogs = Blog::get();
        return view('website.blog-details', compact('blog', 'latests', 'blogs'));
    }

    public function page($id = 1)
    {
        $page = Page::findOrFail($id);
        return view('website.about', compact('page'));
    }

    public function contacts()
    {
        return view('website.contact');
    }
}
