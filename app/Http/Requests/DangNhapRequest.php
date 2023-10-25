<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DangNhapRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'ten_dang_nhap' => 'bail|required|between:6,16',
            'password' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'ten_dang_nhap.required' => 'Chưa nhập tên đăng nhập',
            'ten_dang_nhap.between' => 'Tên đăng nhập có độ dài :min đến :max ký tự',
            'password.required' => 'Chưa nhập mật khẩu',
        ];
    }
}
