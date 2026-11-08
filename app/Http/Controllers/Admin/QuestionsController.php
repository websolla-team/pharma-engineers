<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\questions;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $questions = questions::get();
        return view('admin.questions.index', compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.questions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'question.*' => 'required|string',
            'answer.*' => 'required|string',
        ]);
        questions::create($data);
        return redirect()->route('question.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(questions $questions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        $question = questions::findOrFail($id);
        return view('admin.questions.edit', compact('question'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, questions $questions, $id)
    {
        $data = $request->validate([
            'question.*' => 'nullable|string',
            'answer.*' => 'nullable|string',
        ]);
        $question = questions::findOrFail($id);
        $question->update($data);
        return redirect()->route('question.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        $questions = questions::findOrFail($request->id);
        // $oldImage = $blog->image ?? '0';
        // Helper::deleteImage($oldImage);
        $questions->delete();
        return back();
    }
}
