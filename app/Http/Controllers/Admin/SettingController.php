<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $setting = Setting::first();
        return view('admin.settings.index', compact('setting'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Setting $setting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Setting $setting)
    {
        $data = $request->validate([
            'keywords.*' => 'required|string|max:255',
            'description.*' => 'required|string',
            'mission_statement.*' => 'required|string',
            'our_policy.*' => 'required|string',
            'our_philosophy.*' => 'required|string',
            'OUR_CORE_VALUES.*' => 'required|string',
            'main_image' => 'nullable|image',
            'video_image' => 'nullable|image',
            'video' => 'nullable|url',
        ]);
        unset($data['main_image']);
        unset($data['video_image']);
        if ($request->main_image) {
            $fileName = Helper::updateImage($request->file('main_image'), $setting->main_image, 'settings');
            $data['main_image'] = $fileName;
        }
        if ($request->video_image) {
            $fileName = Helper::updateImage($request->file('video_image'), $setting->video_image, 'settings');
            $data['video_image'] = $fileName;
        }
        $setting->update($data);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
