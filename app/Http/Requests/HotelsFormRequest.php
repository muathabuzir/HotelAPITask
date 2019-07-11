<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class HotelsFormRequest extends FormRequest {

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
            'name' => 'required_without_all:latitude,longitude|between:3,60',
            'latitude' => 'required_without_all:name|required_with_all:longitude|regex:/^[\d]{2}\.[\d]{6}$/',
            'longitude' => 'required_without_all:name|required_with_all:latitude|regex:/^[\d]{2}\.[\d]{6}$/',
        ];
    }

    public function messages() {
        return [
            'name.required' => 'A Name must be between 3-60',
        ];
    }

    protected function failedValidation(Validator $validator) {
        throw new HttpResponseException(response()->error($validator->errors(), 422));
    }

}
