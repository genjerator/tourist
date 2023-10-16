<?php

declare(strict_types=1);

namespace App\Enums;

enum UserTypesEnum: int
{
    case CREATOR = 1;
    case CONTESTANT = 2;
}
