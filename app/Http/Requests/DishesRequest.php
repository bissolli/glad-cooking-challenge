<?php

namespace CookingChallenge\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DishesRequest extends FormRequest
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
            'photo'                 => 'required|max:1000|mimes:jpg,png,jpeg',
            'name'                  => 'required',
            'description'           => 'required',
            'terms_and_conditions'  => 'accepted',
        ];
    }
}
