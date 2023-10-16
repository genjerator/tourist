<?php

declare(strict_types=1);

namespace App\Modules\Sanctum;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Exception\BadRequestException;

class SanctumService
{
    public function issueToken(array $rawData): string
    {
        $sanctumRequestDto = SanctumRequestDto::mapFrom($rawData);
        $user = User::where("email", $sanctumRequestDto->email)->first();

        if (!$user || !Hash::check($sanctumRequestDto->password, $user->password)) {
            throw new BadRequestException("Credential not correct!");
        }
        return $user->createToken($sanctumRequestDto->device)->plainTextToken;
    }
}
