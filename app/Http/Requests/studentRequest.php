<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class studentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function rules(): array
    {
        return [
            'student_code' => 'required',
            'student_name' => 'required',
            'student_birth' => 'required',
            'student_gender' => 'required',
            'student_phone' => 'required',
            'student_img' => 'required',
            'student_nation' => 'required',
            'student_address' => 'required',
            'user_id' => 'required',
            'student_year' => 'required',
            'student_status' => 'required',
            'major_id' =>  'required',




        ];
    }

    public function messages() {
        return [
            'required' => 'Vui lòng nhập trường :attribute',

        ];
    }

    public function attributes(){
        return [
            'student_code' => 'mã sinh viên',
            'student_name' => 'tên sinh viên',
            'student_birth' => 'ngày sinh',
            'student_gender' => 'giới tính',
            'student_status' => 'trang thái',

            'student_year' => 'năm học',
            'user_id' => 'tài khoản',
            'student_address' => 'địa chỉ',
            'student_nation' => 'dân tộc',
            'student_img' => 'ảnh',
            'student_phone' => 'điện thoại',
            'major_id' => 'chuyên nghành',


        ];
    }
}
