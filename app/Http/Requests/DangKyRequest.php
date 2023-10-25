<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DangKyRequest extends FormRequest
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
            'ten' => 'required',
            'ten_dang_nhap' => 'bail|required|between:8,16',
            'mat_khau' => 'required',
            'email' => 'required',
            'confirm_password' => 'same:mat_khau'
        ];
    }
    public function messages()
    {
        return [
            'ten.required' => 'Chưa nhập tên người dùng',
            'ten_dang_nhap.required' => 'Chưa nhập tên đăng nhập',
            'ten_dang_nhap.between' => 'Tên đăng nhập có độ dài :min đến :max ký tự',
            'mat_khau.required' => 'Chưa nhập mật khẩu',
            'confirm_password.same' => 'Mật khẩu xác nhận không khớp',
            'email.required' => 'Chưa nhập email',
        ];
    }
}
