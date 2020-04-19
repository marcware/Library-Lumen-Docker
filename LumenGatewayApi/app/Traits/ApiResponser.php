<?php


namespace App\Traits;


use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Laravel\Lumen\Http\ResponseFactory;

trait ApiResponser
{
    /**
     * @param string|array $data
     * @param int $code
     * @return Response|ResponseFactory
     */
    public function succesResponse($data, $code = Response::HTTP_OK)
    {
        return \response($data, $code)->header('Content-Type', 'application/json');
    }

    /**
     * @param string $message
     * @param int $code
     * @return JsonResponse
     */
    public function errorResponse($message, $code)
    {
        return \response()->json(['error' => $message, 'code' => $code], $code);
    }

    /**
     * @param string $message
     * @param int $code
     * @return Response|ResponseFactory
     */
    public function errorMessage($message, $code)
    {
        return \response($message, $code)->header('Content-Type', 'application/json');
    }
}