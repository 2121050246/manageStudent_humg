<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
use App\Models\major;

use App\Models\course;

use App\Models\department;
use App\Models\year;


use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{




    public function index(){

        $count_student = student::count();
        $count_department = department::count();
        $count_major = major::count();
        $count_course = course::count();

        $year = year::all();

        // dd($count_student);

        return view('home' , compact('count_student' ,'count_department' ,'count_major' ,'count_course' , 'year' ));
    }



    public function profice(){

        $user_name = Auth::user()->name;
        $user_email = Auth::user()->email;



        return view('profice' , compact('user_name','user_email'));
    }



    // public function back(){
    //     return back();
    // }
}
