<?php

namespace App\Http\Controllers;

use App\Models\Questions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;
        $questions = Questions::all()->where('user_id', $id);
        return view('questionsList', ['questions'=>$questions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('questions');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $question = new Questions;

        $question->title = $request->title;
        $question->description = $request->description;
        $question->tags = $request->tags;
        $question->user_id = Auth::user()->id;

        $question->save();

        return redirect('questions');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Questions  $questions
     * @return \Illuminate\Http\Response
     */
    public function show(Questions $questions)
    {
        $auth = Auth::user()->id;
        
        $questions = Questions::all();
        return view('Forum', ['questions'=>$questions], ['auth'=>$auth]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Questions  $questions
     * @return \Illuminate\Http\Response
     */
    public function edit(request $request)
    {
        $id = $request->input('question_id');
        $question = Questions::all()->where('id', $id);
        return view('edit', ['question' => $question]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Questions  $questions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $question = new Questions;
        $id = $request->input('question_id');
        Questions::where('id', $id)->update(['title' => $request->input('title'),'description'=>$request->input('description'),'tags'=>$request->input('tags')]);
        
        return redirect('questions');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Questions  $questions
     * @return \Illuminate\Http\Response
     */
    public function destroy(request $request)
    {
        $question = new Questions;
        $id = $request->input('question_id');
        $question = Questions::where('id', $id)->find($id);
        $question = $question->delete();
        return redirect('questions');
    }
}
