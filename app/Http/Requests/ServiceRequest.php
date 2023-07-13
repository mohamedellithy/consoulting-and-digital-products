<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'whatsapStatus' => 'required|in:0,1',
            'whatsapNumber' => 'required_if:whatsapStatus,1',
            'loginStatus' => "required|in:0,1",

        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'حقل الاسم مطلوب',
            'name.string' => 'يرجى ادخال نص',
            'name.max' => 'الاسم يجب ان يكون اقل من 255 حرف',
            'description.required' => ' مطلوب',
            'description.string' => 'يرجى ادخال نص',
            'image.required' => 'حقل الصورة مطلوب',
            'image.image' => 'يرجى رفع ملف من نوع صورة  ',
            'image.mimes' => 'صيغة الصورة يجب ان تكون jpeg,png,jpg,gif,svg,webp',
            'whatsapStatus.required' => 'حقل تفعيل مطلوب',
            'whatsapStatus.in' => 'يجب اختيار تفعيل او تعطيل الواتساب',
            'whatsapNumber.required_if' => ' ادخل رقم الواتساب ',
            // 'whatsapNumber.numeric' => 'حقل الواتساب يجب ان يكون رقم',
            'loginStatus.required' => 'حالة التسجيل مطلوب',
            'loginStatus.in' => 'يجب اختيار تفعيل او تعطيل التسجيل السم ',
        ];
    }
}
