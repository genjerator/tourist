<?php
declare(strict_types=1);

namespace App\Http\Controllers;


use App\Modules\Core\HTTPResponseCodes;
use App\Modules\Sanctum\SanctumRequest;
use App\Modules\Sanctum\SanctumService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SanctumController extends Controller
{
    public function __construct(private readonly SanctumService $sanctumService)
    {
    }

    public function issueToken(SanctumRequest $request): Response
    {
        $validated = $request->validated();
        try {
            $dataArray = ($request->toArray() !== [])
                ? $request->toArray()
                : $request->json()->all();
            return new Response(
                $this->sanctumService->issueToken($dataArray),
                HTTPResponseCodes::Sucess['code']
            );
        } catch (\Exception $error) {
            return new Response([
                "exception" => get_class($error),
                "error" => $error->getMessage()
            ],
                HTTPResponseCodes::BadRequest['code']);
        }
    }
}
