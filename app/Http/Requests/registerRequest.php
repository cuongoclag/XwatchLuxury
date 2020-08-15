<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class registerRequest extends FormRequest
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
            'username' => 'required|min:5|max:30',
            'password' => 'required|min:8|max:30',
            'confirm_password' => 'required|same:password',
            'email' => 'required|min:10|max:50|email',
            'phone' => 'required|min:9|max:11',
            'address' => 'required|min:5|max:128'
        ];
    }
    public function messages() 
    {
        return [
            
            'username.required' => __('Bạn chưa nhập Tên người dùng.'),
            'password.required' => __('Bạn chưa nhập Mật khẩu.'),
            'confirm_password.required' => __('Bạn chưa xác nhập lại Mật khẩu.'),
            'email.required' => __('Bạn chưa nhập Email.'),
            'phone.required' => __('Bạn chưa nhập số điện thoại.'),
            'address.required' => __('Bạn chưa nhập địa chỉ.'),

            'username.min' => __('Tên người dùng phải hơn 5 ký tự.'),
            'username.max' => __('Tên người dùng phải không được vượt quá 30 ký tự.'),
    

            'password.min' => __('Mật Khẩu phải hơn 8 ký tự.'),
            'password.max' => __('Mật Khẩu phải không được vượt quá 30 ký tự.'),

            'confirm_password.same' => __('Mật khẩu không trùng nhau.'),

            'email.min' => __('Email phải hơn 8 ký tự.'),
            'email.max' => __('Email phải không được vượt quá 50 ký tự.'),
            'email.email' => __('Phải đúng định dạng eamil.'),

            'phone.min' => __('Số điện thoại phải hơn 9 ký tự.'),
            'phone.max' => __('Số điện thoại không được vượt quá 11 ký tự.'),

            'address.min' => __('Địa chỉ phải hơn 5 ký tự.'),
            'address.max' => __('Địa chỉ phải không được vượt quá 128 ký tự.')
        ];
    }
}