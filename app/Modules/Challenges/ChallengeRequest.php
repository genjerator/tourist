<?php

namespace App\Modules\Challenges;

use Illuminate\Foundation\Http\FormRequest;

class ChallengeRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'description' => 'string',
        ];
    }
}
