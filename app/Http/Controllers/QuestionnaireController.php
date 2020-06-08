<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Questionnaire ;

class QuestionnaireController extends Controller
{
    //steps_7 : protecting whole controller
    public function __construct(){
       $this->middleware('auth');
    }
    //steps_3 : add methods for operations
    public function create(){
        return view('questionnaire.create');

    }
    public function store(){
        $data = request()->validate([
            'title' => 'required',
            'purpose' => 'required',
            
        ]);
        // $data['user_id'] =auth()->user()->id;
        // //dd($data);
        // $questionnaire = Questionnaire ::create($data);
        $questionnaire  = auth()->user()->questionnaires()->create($data);
        return redirect('/questionnaires/'.$questionnaire->id);
        //return view('questionnaire.store',compact(''));

    }
    public function show(Questionnaire $questionnaire){
        //nested relationships and we are removing n+1 problem
        // dd($questionnaire->load('questions.answers'));
        //steps_9 : lazy load for relationships and it is used when you need to create a relationship between tables and other stuff.
        $questionnaire->load('questions.answers.responses');
        //dd($questionnaire);
        return view('questionnaire.show',compact('questionnaire'));

    }

}
