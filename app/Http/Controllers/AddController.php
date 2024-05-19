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


use App\Traits\uploadProfile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;



use App\Http\Requests\scoreRequest;
use App\Http\Requests\studentRequest;
use Illuminate\Http\Request;





class AddController extends Controller
{

    use uploadProfile;







    //! account
    public function show(){
        $admin = User::where('roles', 'admin')->latest()->paginate(4);
        $student = User::where('roles', 'student')->latest()->paginate(10);



        return view('add.accounts.account' , compact('admin' , 'student'));
    }

    public function create(){
        return view('add.accounts.account_create');
    }


    public function create_post(Request $request){

        // dd(User::all());


        User::create([
            'name' => $request->name,
            'password' => bcrypt($request->password),
            'email' => $request->email,
            'roles' => $request->role,
        ]);

        return redirect()->route('add.account')->with('msg' , 'Thêm thành công ');
    }



    public function update($id){
        $data = User::find($id);
        return view('add.accounts.account_update', compact('data'));
    }
    public function updated(Request $request,$id){
        $user = User::find($id);

        $user->update([
            'name' => $request->name,
            'password' => bcrypt($request->password),
            'email' => $request->email,
            'roles' => $request->role,
        ]);
        return redirect()->route('add.account')->with('msg' , 'Sửa thành công ');
    }


    public function delete($id){
        $user = User::find($id);



        $student = student::all();
        foreach ($student as $item){

            if($user->id == $item->user_id){
                Storage::delete($item->student_path);
            }

        }


        $user->delete();


        return back()->with('msg', 'Xoá thành công ');
    }



//    -----------------------

    //!department
    public function department_show(){
        $data = department::latest()->paginate(5);
        return view('add.departments.department_show', compact('data'));
    }


    public function department_create(){
        return view('add.departments.department_create');
    }

    public function department_post(Request $request){

        department::create([
            'department_code' => $request->code,
            'department_name' => $request->name,

        ]);

        return redirect()->route('add.department')->with('msg' , 'Thêm thành công ');


    }


    public function department_delete($id){

            department::find($id)->delete();
            return back()->with('msg', 'Xoá thành công ');

    }



    public function department_update($id){
        $data = department::find($id);
        return view('add.departments.department_update', compact('data'));
    }
    public function department_updated(Request $request,$id){
        $department = department::find($id);

        $department->update([
            'department_code' => $request->code,
            'department_name' => $request->name,
        ]);
        return redirect()->route('add.department')->with('msg' , 'Sửa thành công ');
    }


//    ----------------------

    // ! major
    public function major_show(){
        $major = major::latest()->paginate(5);
        $department = department::all();

        return view('add.majors.major_show' , compact('major' , 'department'));
    }




    public function major_create(){

        $data = department::all();
        return view('add.majors.major_create' , compact('data'));
    }

    public function major_post(Request $request){

        major::create([
            'major_name' => $request->major_name,
            'department_id' => $request->department_id,

        ]);

        return redirect()->route('add.major')->with('msg' , 'Thêm thành công ');
    }



    public function major_update($id){
        $data = department::all();
        $item = major::find($id);


        return view('add.majors.major_update', compact('data' , 'item'));
    }

    public function major_updated(Request $request , $id){

        $major = major::find($id);

        $major->update([
            'major_name' => $request->major_name,
            'department_id' => $request->department_id,

        ]);

        return redirect()->route('add.major')->with('msg' , 'Sửa thành công ');
    }


    public function major_delete($id){

        major::find($id)->delete();
        return back()->with('msg', 'Xoá thành công ');

    }


    // -------------------
    // ! year
    public function year_show(){
        $data = year::orderByDesc('year_name')->get();

        return view('add.years.year_show' , compact('data'));
    }

    public function year_create(){
        $currentYear = date('Y');
        return view('add.years.year_create' , compact('currentYear'));


    }

    public function year_post(Request $request ){
        year::create([
            'year_name' => $request->year,
        ]);

        return redirect()->route('add.year')->with('msg' , 'Thêm thành công ');

    }


    public function year_delete($id){

        year::find($id)->delete();
        return back()->with('msg', 'Xoá thành công ');

    }



//    ----------------------

    // ! course
    public function course_show(){
        $course = course::latest()->paginate(5);
        $major = major::all();
        $year = year::all();





        return view('add.courses.course_show' , compact('course' , 'major', 'year'));
    }




    public function course_create(){
        $year = year::all();
        $major = major::all();




        return view('add.courses.course_create' , compact('year','major'  ));
    }

    public function course_post(Request $request){

        course::create([
            'course_code' => $request->subject_code,
            'course_name' => $request->name_subject,
            'course_number' => $request->name_number,
            'major_id' => $request->name_major,
            'year_id' => $request->name_year,
        ]);

        return redirect()->route('add.course')->with('msg' , 'Thêm thành công ');
    }



    public function course_update($id){
        $year = year::all();
        $major = major::all();
        $item = course::find($id);

        return view('add.courses.course_update' , compact('year','major' , 'item'));


    }

    public function course_updated(Request $request , $id){

        $course = course::find($id);

        $course->update([
            'course_code' => $request->subject_code,
            'course_name' => $request->name_subject,
            'course_number' => $request->name_number,
            'major_id' => $request->name_major,
            'year_id' => $request->name_year,

        ]);

        return redirect()->route('add.course')->with('msg' , 'Sửa thành công ');
    }


    public function course_delete($id){

        course::find($id)->delete();
        return back()->with('msg', 'Xoá thành công ');

    }




    // ------------------------------

    // ! student
    public function student_show(){

        $major = major::all();
        $student = student::latest()->paginate(7);



        return view('add.students.student_show' , compact('student' , 'major'));

    }
    public function student_create(){
        $major = major::all();
        $student = student::all();

        $usered = [];

        foreach ($student as $s){
            $usered[] = $s->user_id;
        }

        $user = User::whereNotIn('id',$usered )->where('roles' , 'student')->get();
        $currentYear = date('Y');





        // call city from APi
        $url = 'https://esgoo.net/api-tinhthanh/1/0.htm';
        $response = Http::get($url);

        $data = $response->json();
        $cities = $data['data'];



        return view('add.students.student_create' , compact('major','currentYear' , 'user', 'cities'));
    }

    public function student_post(studentRequest $request){

        // take original name  of file and don'take extension vd  .png
        $filename = $request->file('student_img')->getClientOriginalName();
        $fileslug = pathinfo($request->file('student_img')->getClientOriginalName(), PATHINFO_FILENAME);
        // store in folder storage
        $path = $request->file('student_img')->storeAs('public/profile' , $filename);
        $path_full = Storage::url($path);

        student::create([
            'student_code' => $request->student_code,
            'student_name' => $request->student_name,
            'student_birth' => $request->student_birth,
            'student_gender' => $request->student_gender,
            'student_phone' => $request->student_phone,
            'student_nation' => $request->student_nation,
            'student_year' => $request->student_year,
            'student_status' => $request->student_status,
            'student_address' => $request->student_address,

            'student_path' => $path,
            'student_path_full' =>  $path_full,
            // 'student_slug' => Str::slug($fileslug),
            'student_slug' => $filename,

            'user_id' => $request->user_id,
            'major_id' => $request->major_id,
        ]);

        return redirect()->route('add.student')->with('msg', 'Thêm thành công');


    }


    public function student_update($id){
        $major = major::all();
        $student = student::all();
        $student_id = student::find($id);
        $currentYear = date('Y');

        $usered = [];
        foreach ($student as $s){
            $usered[] = $s->user_id;
        }


        $user = User::whereNotIn('id',$usered )->where('roles' , 'student')->get();




        return view('add.students.student_update'  ,compact('major', 'user', 'currentYear', 'student_id') );
    }


    public function student_updated(Request $request , $id){
        $student = student::find($id);
        if($request->hasFile('student_img')){

            // xoá file ảnh trước khi thay thế
            if (isset($student->student_path)){
                Storage::delete($student->student_path);
            }


            // take original name  of file and don'take extenssion vd  .png
            $filename = $request->file('student_img')->getClientOriginalName();

            // store in folder storage
            $path = $request->file('student_img')->storeAs('public/profile' , $filename);
            $path_full = Storage::url($path);

            $student->update([
                'student_code' => $request->student_code,
                'student_name' => $request->student_name,
                'student_birth' => $request->student_birth,
                'student_gender' => $request->student_gender,
                'student_phone' => $request->student_phone,
                'student_nation' => $request->student_nation,
                'student_year' => $request->student_year,
                'student_status' => $request->student_status,
                'student_address' => $request->student_address,

                'student_path' => $path,
                'student_path_full' =>  $path_full,

                // 'student_slug' => Str::slug($fileslug),
                'student_slug' => $filename,

                // 'user_id' => $request->user_id,
                'major_id' => $request->major_id,
            ]);
        } else {

            $student->update([
                'student_code' => $request->student_code,
                'student_name' => $request->student_name,
                'student_birth' => $request->student_birth,
                'student_gender' => $request->student_gender,
                'student_phone' => $request->student_phone,
                'student_nation' => $request->student_nation,
                'student_year' => $request->student_year,
                'student_status' => $request->student_status,
                'student_address' => $request->student_address,

                'major_id' => $request->major_id,
            ]);

        }



        return redirect()->route('add.student')->with('msg', 'Sửa thành công');
    }

    public function student_delete($id){
        $student = student::find($id);

        if (isset($student->student_path)){
            Storage::delete($student->student_path);
        }

        $student->delete();
        return back()->with('msg', 'Xoá thành công ');
    }





    // -------------------- score ----------------
    public function score_show(){
        $register_course = register_course::all();
        $major = major::all();
        $score = score::latest()->paginate(7);






        return view('add.scores.score_show' , compact('major' , 'score'));
    }

    // public function score_showed(Request $request){

    //     $major = major::all();
    //     $major_id = major::where('id' , $request->major_id)->first();

    //     $course = course::where('major_id' , $major_id->id )->get();
    //     $register_course = register_course::all();
    //     $score = score::latest()->paginate(7);





    //     return view('add.scores.score_show', compact('major','course','register_course' , 'score' ) );
    // }


    public function score_create(){



        $register_course = register_course::all();
        $score = score::all();



        return view('add.scores.score_create' , compact( 'register_course'  ,'score' ));

    }

    public function score_post(scoreRequest $request){


        $score_name = register_course::where('id' , $request->subject_id)->first();




        $ten = $request->A*0.6  + $request->B*0.3 + $request->C*0.1;
        $result = '';
        if($ten >= 4 ){
            $result = 'Qua';
        } else {
            $result = 'Trượt';
        }





        score::create([
            'score_name' => $score_name->subject_name,
            'score_a' => $request->A,
            'score_b' => $request->B,
            'score_c' => $request->C,
            'subject_id' => $request->subject_id,


            'result_ten' => $ten,

            'status' => $result,
        ]);

        return redirect()->route('add.score.show')->with('msg','Thêm thành công');

    }


    public function score_update($id){
        $score = score::find($id);


        return view('add.scores.score_update' , compact('score'));
    }
    public function score_updated(Request $request ,$id ){



        $score = score::find($id)->first();

        $ten = $request->A*0.6  + $request->B*0.3 + $request->C*0.1;
        $result = '';
        if($ten >= 4 ){
            $result = 'Qua';
        } else {
            $result = 'Trượt';
        }



        $score->update([

            'score_a' => $request->A,
            'score_b' => $request->B,
            'score_c' => $request->C,



            'result_ten' => $ten,

            'status' => $result,
        ]);



        return redirect()->route('add.score.show')->with('msg','Sửa thành công');

    }



    public function score_delete($id ){
        $score = score::find($id);


        $score->delete();
        return back()->with('msg', 'Xoá thành công ');
    }
}
