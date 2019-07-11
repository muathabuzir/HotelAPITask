<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class HotelFormRequest extends FormRequest {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'name' => 'required|between:3,60',
            'code' => 'required|between:2,6',
            'latitude' => 'required|regex:/^[\d]{2}\.[\d]{6}$/',
            'longitude' => 'required|regex:/^[\d]{2}\.[\d]{6}$/',
            'description' => 'between:100,500', // nullable
            'terms_and_conditions' => 'between:100,500', // nullable
        ];
    }

    public function messages() {
        return [
            'name.required' => 'A Name is required',
            'code.required' => 'A Code is required',
        ];
    }

    protected function failedValidation(Validator $validator) {
        throw new HttpResponseException(response()->error($validator->errors(), 422));
    }

}
