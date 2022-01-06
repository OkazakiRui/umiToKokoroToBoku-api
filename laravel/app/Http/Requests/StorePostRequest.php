<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            "post_text" => "required|max:64",
            // TODO: 差出人の名前が必要な場合はnullを許容しないようにする
            // "user_name" => "",
            // "user_id" => ""
        ];
    }
}
