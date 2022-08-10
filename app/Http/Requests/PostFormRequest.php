<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     * return true cause user should be able to perform this request
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
        $rules = [
            'description' => 'required'|max:255|unique:posts,'. $this->user_id,
            'img_url' => ['max:5048']
        ];
        if(in_array($this->method(),['POST'])) {
            $rules['img_url'] = ['required'|max:255|unique:posts,'];
        }
        return $rules;
    }
}
