<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\department;
use App\Models\major;
use App\Models\year;
use App\Models\course;
use App\Models\student;
use App\Models\register_course;
use App\Models\score;



use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class InformateController extends Controller
{


    public function student(){
        $student = student::where('user_id' , Auth::id())->first();
        if($student != null ){
            $major = major::where('id' , $student->major_id)->first();
            $department = department::where('id' , $major->department_id)->first();
            $user = User::where('id' , $student->user_id)->first();



            return view('infomations.student', compact('student' , 'major' , 'department' , 'user'));
        } else {
            return view('infomations.student');
        }



    }

    public function courses(){
        $year = year::all();
        $department = department::all();
        $major = major::all();

        // dd($year);
        return view('infomations.courses' , compact('year', 'major','department'));
    }

    public function courses_post(Request $request){
        $year = year::orderByDesc('year_name')->get();;
        $department = department::all();
        $major = major::all();
        $course =course::all();


        $department_id = $request->department_id;
        $major_id = $request->major_id;



        // foreach ($department as $d){

        //     if ($d->id == $request->input('department_id') ){

        //         foreach($major as $m){
        //             if ($m->department_id == $d->id && $m->id == $request->input('major_id')){

        //                 foreach($course as $c){

        //                     if($c->year_id == 4  && $c->major_id == $m->id) {
        //                             echo $c->course_name;
        //                     }
        //                 }
        //             }
        //         }

        //     }
        // }




        return view('infomations.courses' , compact('year', 'major','department', 'course' , 'department_id','major_id' ));
    }



    public function result(){



        $student = student::where('user_id' , Auth::id())->first();
        if(isset($student)){

            $major =  major::where('id' , $student->major_id)->first();

            $course= course::where('major_id' , $major->id )->pluck('id')->toArray();

            $register_course = register_course::whereIn('course_id' ,  $course)->pluck('id')->toArray();

            $score = score::whereIn('subject_id', $register_course)->latest()->paginate(7);
            return view('infomations.result' ,compact('score'));
        } else {

            return view('infomations.result' );
        }






    }




// ------------------------ đăng kí môn
    public function register_subject(){
        $student = student::where('user_id', Auth::id())->first();


        if($student != null && $student->major_id != null){
            $major = major::where('id' , $student->major_id)->first();
            $course = course::where('major_id' , $major->id)->get();
            $register_course = register_course::all();
            return view('infomations.register_subject' ,  compact('course' ,'register_course'));
        } else {
            return view('infomations.register_subject' );
        }


    }


    public function register_subjected(Request $request){

        $student = student::where('user_id', Auth::id())->first();

        if(isset($request->check)) {
            foreach($request->check as $item) {

               $course = course::find($item);

                register_course::create([
                    'subject_name' => $course->course_name,
                    'subject_number' => $course->course_number,
                    'course_id' => $item,
                    'student_id' => $student->id
                ]);
            }
        }

        return back()->with('msg' , 'Đăng kí môn thành công');





    }


    // ----------- list register
    public function list_register(){
        $student = student::where('user_id', Auth::id())->first();

        if($student != null) {
            $register_course = register_course::where('student_id', $student->id)->latest()->paginate(7);
            return view('infomations.list_registers.list_show' , compact('register_course'));
        } else {
            $register_course = register_course::latest()->paginate(7);
            return view('infomations.list_registers.list_show' , compact('register_course') );
        }




    }

    public function list_register_delete($id){
        register_course::find($id)->delete();
        return back()->with('msg', 'Xoá thành công');
    }
}
