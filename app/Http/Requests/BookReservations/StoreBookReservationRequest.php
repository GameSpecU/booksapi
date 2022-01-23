<?php

namespace App\Http\Requests\BookReservations;

use App\Http\Requests\BaseFormRequest;
use Illuminate\Foundation\Http\FormRequest;

class StoreBookReservationRequest extends BaseFormRequest
{
    public function rules(): array
    {
        return [
            'customer_email' => 'email|required',
            'book_id' => 'exists:App\Models\Book,id'
        ];
    }


}
