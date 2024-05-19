<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\student;
use App\Http\Requests\LoginRequest;
use Illuminate\Validation\ValidationException;

use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{



    public function login(){


        if(Auth::check()){
            return redirect()->route('home');

        } else {
            return view('logins.form');
        }




    }


    public function logined(LoginRequest $request){
        $email = $request->email;
        $pass = $request->password;

        $remeber = $request->has('check');



        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $remeber)) {

            // Xác thực sau thành công để login
            $user = User::where('email' , $request->email)->first();
            Auth::login($user);


            // lấy tên và ảnh người dùng và hiển thị
            $student = student::where('user_id' ,$user->id )->first();

            // dd( $student);
            $request->session()->put('name', $user->name);

            if(isset($user)) {
                if($user->roles == 'admin'){
                    $request->session()->put('power', 'admin');
                } else {
                    $request->session()->put('power', 'student');
                }
            }





            if(isset( $student)){
                $request->session()->put('img', $student->student_path_full);
            }




            return redirect()->route('home');


        } else {

            return redirect()->route('login')->with('msg' , 'Tài khoản hoặc mật khẩu không đúng');

        }

    }

    public function logout(Request $request){

        Auth::logout();

        $request->session()->forget('name');
        $request->session()->forget('power');

        $request->session()->forget('img');


        return redirect()->route('login');

    }
}
