<?php

namespace App\Http\Controllers;


use App\User;
use App\ClasseMatiere;
use App\Questionnaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClasseMatiereController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
    }


    public function create()
    {




        return view('classeMatiereProf.choix');

    }


    public function store()
    {

           $data = request()->validate([

             'classe'=> 'required',
             'matiere' =>'required'
          ]);


           $user = auth()->user()->usertoClasseMatiere()->create($data);



        return redirect('home');

    }










}
