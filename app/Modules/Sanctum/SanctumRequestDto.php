<?php

declare(strict_types=1);

namespace App\Modules\Sanctum;
class SanctumRequestDto
{
    public function __construct(public string $email,
                                public string $password,
                                public string $device)
    {

    }

    public static function mapFrom(array $data):self{
        return new SanctumRequestDto(
            $data['email'],
            $data['password'],
            $data['device']
        );
    }
}
