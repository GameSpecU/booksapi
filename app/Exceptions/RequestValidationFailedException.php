<?php

namespace App\Exceptions;

use Illuminate\Contracts\Validation\Validator;
use Symfony\Component\HttpKernel\Exception\HttpException;

class RequestValidationFailedException extends HttpException
{
    public function __construct(Validator $validator, \Throwable $previous = null, array $headers = [], $code = 0)
    {
        parent::__construct(422, $validator->errors()->toJson(), $previous, $headers, $code);
    }
}
