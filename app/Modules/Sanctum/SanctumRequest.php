<?php

namespace App\Modules\Sanctum;

use Illuminate\Foundation\Http\FormRequest;

class SanctumRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'email' => 'required|email',
            'password' => 'required|string',
            'device' => 'required|string',
        ];
    }
}
