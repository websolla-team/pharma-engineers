<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\Courses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Courses::get();
        return view('admin.Courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.Courses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'image' => 'required|image',
            'title.*' => 'required|string',
            'text.*' => 'required|string',
        ]);
        $fileName = Helper::storeImage($request->file('image'), 'courses');
        $data['image'] = $fileName;
        Courses::create($data);
        return redirect()->route('courses.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Courses $coursers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Courses $coursers, $id)
    {
        $course = Courses::findOrFail($id);
        return view('admin.Courses.edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'image' => 'nullable|image',
            'title.*' => 'nullable|string',
            'text.*' => 'nullable|string',
        ]);
        unset($data['image']);
        $course = Courses::findOrFail($id);
        if ($request->image) {
            $fileName = Helper::updateImage($request->file('image'), $course->image, 'courses');
            $data['image'] = $fileName;
        }
        $course->update($data);
        return redirect()->route('courses.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        $course = Courses::findOrFail($request->id);
        $oldImage = $blog->image ?? '0';
        Helper::deleteImage($oldImage);
        $course->delete();
        return back();
    }
}
