<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\student;
use Illuminate\Support\Facades\Mail;

// use App\Models\student;





class EmailController extends Controller
{


    public function email_index(){
        $student = student::all();
        $data = [];
        foreach($student  as $s){
            $data[] = $s->user_id;
        }

        $user = User::whereIn('id' , $data)->get();
        return view('emails.index' , compact('user'));
    }


    public function email_sent(Request $request)
    {




        // Lấy dữ liệu từ request
        $emailAddresses = $request->email;
        $title = $request->title;
        $value = $request->content;



        // Gửi email
        Mail::send('emails.content', compact('title', 'value'), function ($message) use ($emailAddresses, $title) {
            // Tiêu đề email
            $message->subject($title);

            // Địa chỉ người nhận
            $message->to($emailAddresses);
        });

        // Trả về view với thông báo thành công
        return back()->with('msg', 'Gửi thành công');
    }





}
