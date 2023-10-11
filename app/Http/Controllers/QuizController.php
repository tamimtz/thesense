<?php

namespace App\Http\Controllers;

use App\Models\Quizze;
use App\Models\QuizQuestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('the sense.quiz');
    }


    public function newQuiz(Request $request){


        
        $quizForm1 = ([
            'quiz_name' => $request->input('quiz_name'),
            'category' => $request->input('category'),
            'sub_category' => $request->input('sub_category'),
            'description' => $request->input('description'),
            'id' => Auth::user(),

        ]);

        Quizze::create ([
            'quiz_name' => $request->input('quiz_name'),
            'category' => $request->input('category'),
            'sub_category' => $request->input('sub_category'),
            'description' => $request->input('description'),
            'id' => Auth::user()->id,
        ]);
        session(['quizForm1Data' => $quizForm1]);

      

        // return redirect()->route('admin.createQuiz2');

        return view('admin.createQuestions');
    }

    public function createQuestions(Request $request){

        $data = $request->all();
        
       
        
        $questionCount = 0;

        foreach ($data as $key => $value) {
            if (strpos($key, 'quiz_question') === 0) {
                $questionCount++;
            }
        }

        $itemCount = count($data);

       // echo "Number of quiz questions: " . $questionCount ."Number of items: " . $itemCount;


        
        
       
        $id = Quizze::latest()->first();
        
       // return $data;
        $quizQuestions = [];

        for ($i = 1; $i <= $questionCount; $i++) {


            if ($request->hasFile("image$i")) {
                $image = $request->file("image$i");
                $imageName = $image->getClientOriginalName();
                Storage::disk('public')->putFileAs('images', $image, $imageName);
            }else{
                $imageName = null;
            }


            $quizQuestionData = [

                

                'quiz_id' => $id->quiz_id,
                'question_title' => $data["quiz_question{$i}"],
                'image' => $imageName,                            
                'option_1' => $data["option1{$i}"],
                'option_2' => $data["option2{$i}"],
                'option_3' => $data["option3{$i}"],
                'option_4' => $data["option4{$i}"],
                'answer' => $data["answer{$i}"],
                'point' => $data["points{$i}"],
            ];
    
           // $quizQuestions[] = new QuizQuestion($quizQuestionData);
            // echo json_encode($quizQuestionData);
            QuizQuestion::create($quizQuestionData);

        }
        

        // QuizQuestion::insert($quizQuestions);


    }
        // // return $id;
        // return session('questionFormData');

        // $questionForm = ([
        //     'quiz_id'
        // ]);

        // return session('quizForm1Data');

    //     QuizQuestion::create([

    //         'quiz_id' => $id->quiz_id,
    //         'question_title' => $request->input('quiz_question1'), 
    //         'image'  => $request->input('image1'), 
    //         'option_1'  => $request->input('option1'), 
    //         'option_2'  => $request->input('option2'), 
    //         'option_3'  => $request->input('option3'), 
    //         'option_4'  => $request->input('option4'), 
    //         'answer'  => $request->input('answer'), 
    //         'point'  => $request->input('points'), 
    //     ]);
    // }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }


    public function dota2Quiz(){

      // $dota2Quiz = Quizze::where('category', 'games')->with('questions')->paginate(20);

       $quizes = Quizze::find(2);

       return $quizes;

       

    //    foreach ($quizes->questions as $question){

    //     echo $question->question_title;

    //    }
       
       return $quizes->questions;
       

      //  return $dota2Quiz;
        
        return view('the sense.dota2Quiz', compact(['quizes', 'dota2Quiz']));
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
