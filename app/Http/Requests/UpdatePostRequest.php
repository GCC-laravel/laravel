<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdatePostRequest extends FormRequest
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
            'title' => 'required|alpha|min:20',
            'body' => 'required',
            'image' => Rule::requiredIf(function () {
                return !$this->has('old_image');
            })
        ];
    }

    public function messages()
    {
        return [
            'title.required' => trans('validation.required'),
            'title.alpha' => 'الاسم يجب ان يحتوي على حروف فقط',
            'body.required' => 'موضوع المنشور مطلوب'
        ];
    }
}
