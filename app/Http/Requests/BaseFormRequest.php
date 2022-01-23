<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use App\Exceptions\RequestValidationFailedException;

class BaseFormRequest extends FormRequest
{
protected function failedValidation(Validator $validator)
{
    if ($this->wantsJson()) {
        throw new RequestValidationFailedException($validator);
    }
    else {
        parent::failedValidation($validator);
    }
}
}
