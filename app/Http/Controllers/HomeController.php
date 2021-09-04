<?php

namespace App\Http\Controllers;

use App\Models\Bac;
use App\Models\Student;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /*public function __construct()
    {
        $this->middleware('auth');
    }*/


    public function index()
    {
        if(auth()->user()){
            $bac= Bac::all();
            $confirmed=0;
            if(auth()->user()->role =="Eleve"){
                $liste = Student::where('user_id','=',auth()->user()->id)->get();
                foreach ($liste as $item){
                    $confirmed++;
                }
            }
            return view('welcome',compact('bac','confirmed'));
        }
        else{
            return view('welcome');
        }

    }
}
