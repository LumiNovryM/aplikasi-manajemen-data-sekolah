<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nis' => 'unique:students|max:8|required',
            'name' => 'max:80|required',
            'gender' => 'max:1|required',
            'class_id' => 'max:1|required',
        ];
    }

    public function attributes()
    {
        return [
            'nis' => 'NIS',
            'name' => 'Name',
            'gender' => 'Gender',
            'class_id' => 'Class'
        ];
    }

    public function messages()
    {
        return [
            'nis.required' => 'NIS Wajib Diisi',
            'name.required' => 'Name Wajib Diisi',
            'gender.max' => 'Gender Tidak Boleh Lebih Dari Satu, Maximal :max Character',
            'class_id' => 'Class Tidak Boleh Lebih Dari Satu, Maximal :max Character'
        ];
    }
}
