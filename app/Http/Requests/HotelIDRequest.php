<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class HotelIDRequest extends FormRequest {

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
            'id' => 'required|exists:hotels,id'
        ];
    }

    public function messages() {
        return [
            'id.exists' => 'A Name must be between 3-60',
            'id.required' => 'Oops It Semes you forgot Hotel ID',
        ];
    }

    /* protected function failedValidation(Validator $validator) {
      throw new HttpResponseException(response()->error($validator->errors(), 422));
      } */
}
