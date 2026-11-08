<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::orderBy('id', 'desc')->get();
        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'image' => 'nullable|image|max:2048',
            'icon' => 'nullable|image|max:2048',
            'text.*' => 'nullable|string|min:3',
            'title.*' => 'required|string|min:3',
        ]);
        // dd($request);
        $fileName = Helper::storeImage($request->file('image'), 'services');
        if ($request->icon) {
            $iconFile  = Helper::storeImage($request->file('icon'), 'services');
            $data['icon'] = $iconFile;
        }
        $data['image'] = $fileName;

        Service::create($data);
        return redirect()->route('services.index');
    }

    public function show(string $id)
    {
        //
    }

    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('admin.services.edit', compact('service'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'image' => 'nullable|image|max:2048',
            'icon' => 'nullable|image|max:2048',
            'text.*' => 'nullable|string|min:3',
            'title.*' => 'required|string|min:3',
        ]);
        unset($data['image']);
        $service = Service::findOrFail($id);
        if ($request->image) {
            $fileName = Helper::updateImage($request->file('image'), $service->image, 'services');
            $data['image'] = $fileName;
        }
        if ($request->icon) {
            $iconFile = Helper::updateImage($request->file('icon'), $service->image, 'services');
            $data['icon'] = $iconFile;
        }
        $service->update($data);
        return redirect()->route('services.index');
    }

    public function destroy(Request $request, $id)
    {
        $blog = Service::findOrFail($request->id);
        $oldImage = $blog->image ?? '0';
        Helper::deleteImage($oldImage);
        $blog->delete();
        return back();
    }
}
