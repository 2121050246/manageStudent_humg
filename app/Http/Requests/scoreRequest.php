<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class scoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'subject_id' => 'required',
            'A' => 'required',
            'B' => 'required',

            'C' => 'required',


        ];
    }

    public function messages() {
        return [
            'required' => 'Vui lòng nhập trường :attribute',

        ];
    }

    public function attributes(){
        return [
            'subject_id' => 'tên môn học',
            'A' => 'điểm A',
            'B' => 'điểm B',
            'C' => 'điểm C',



        ];
    }
}
