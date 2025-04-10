<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Http\JsonResponse;
trait ApiResponses
{


    protected static function successResponse(array $params = [], int $code = 200): JsonResponse
{
    return response()->json([
        'data' => $params['data'] ?? null,
        'code' => $code, // This is part of the response body
        'message' => $params['message'] ?? 'Success',
        'count' => $params['count'] ?? 0,
    ], $code); // Pass the status code here
}


  
}

?>
