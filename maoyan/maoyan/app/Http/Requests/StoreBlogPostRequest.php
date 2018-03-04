<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class StoreBlogPostRequest extends Request
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
            'name' => 'required|unique:videos,name',
            'type' => 'required',
            'content' => 'required|max:255',
            'region' => 'regex:/\W/',
            'year1' => 'regex:/^[1-9]/|numeric',
            'month1' => 'regex:/^[1-9]/|numeric',
            'day1' => 'regex:/^[1-9]/|numeric',
            'language' => 'regex:/\W/',
            'time' => 'required|numeric|min:5400',          //影片时间不能为空,数值型,不能小于5400
            'photo' => 'required|mimes:jpeg,jpg,png|max:3072',
            'state' => 'between:0,3',
        ];
    }

    /**
     * 获取已定义验证规则的错误消息。
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => '影片名必填',
            'name.unique' => '影片名已存在',
            'type.required'  => '电影类型必选',
            'content.required'  => '电影简介为空',
            'content.max'  => '电影简介内容太长',
            'region.regex'  => '电影上映地区必选',
            'year1.regex'  => '电影上映时间年必选',
            'year1.numeric'  => '电影上映时间年必须为数字',
            'month1.regex'  => '电影上映时间月必选',
            'month1.numeric'  => '电影上映时间月必须为数字',
            'day1.regex'  => '电影上映时间日必选',
            'day1.numeric'  => '电影上映时间日必须为数字',
            'language.regex'  => '电影语言版本必选',
            'time.required'  => '电影时长必填',
            'time.numeric'  => '电影时长必须是数字',
            'time.min'  => '电影时长不能小于5400秒(90分钟)',
            'photo.required'  => '没有上传电影封面',
            'photo.mimes'  => '电影封面格式为jpg,png,jpeg',
            'photo.max'  => '电影封面图片不能大于3M(兆)',
            'state.between'  => '电影状态非法',
        ];
    }
}
