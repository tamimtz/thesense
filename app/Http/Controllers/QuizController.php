<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('the sense.quiz');
    }


    public function createQuiz2(Request $request){

        $quizForm1 = ([
            'quiz_name' => $request->input('quiz_name'),
            'category' => $request->input('category'),
            'sub_category' => $request->input('sub_category'),
            'description' => $request->input('description'),
            'id' => Auth::user(),

        ]);
        session(['quizForm1Data' => $quizForm1]);

      

        // return redirect()->route('admin.createQuiz2');

        return view('admin.createQuiz2');
    }

    public function createQuiz3(){
        return session('quizForm1Data');
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
