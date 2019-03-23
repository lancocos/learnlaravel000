<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddGood extends FormRequest
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
            'name'=>'required|between:5,30|unique:goods,name',
            'price'=>'required|digits_between:0.01,9999999',
            'category_id'=>'required',
            'branch_id'=>'required',
            'content'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'标题不能为空',
            'name.between'=>'标题长度不合法',
            'price.require'=>'价格不能为空',
            'price.digits_between'=>'价格必须为0.01 到999999',
            'content.required'=>'内容不能为空',
            'name.unique'=>'标题已经存在'
        ];
    }
}
