<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogsRequest extends FormRequest
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
          "title" => "required",
          "content" =>"required",
          "author" =>"required",
          "category_id" =>"required",
          "img"=>"nullable|image|mimes:jpeg,jpg,png,gif,svg|max:2048"
        ];
    }
}
