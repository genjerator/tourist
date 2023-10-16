<?php
declare(strict_types=1);

namespace App\Modules\Core;

abstract class HTTPResponseCodes
{
    const Sucess = [
        "title"=>"Sucess",
        "code"=>200,
        "message"=>"Request has been successfully processed.",
    ];

    const NotFound = [
        "title"=>"not_found",
        "code"=>404,
        "message"=>"Could not locate resource.",
    ];

    const InvalidArgument = [
        "title"=>"invalid_argument",
        "code"=>404,
        "message"=>"invalid_argument",
    ];

    const BadRequest = [
        "title"=>"bad_request",
        "code"=>400,
        "message"=>"bad_request",
    ];
}
