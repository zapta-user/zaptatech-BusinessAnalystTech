<?php

namespace App\Traits;

use Illuminate\Http\Resources\Json\JsonResource;

trait ApiResponseTrait
{
    public function apiSuccessResponse($data = null , $message = null,$statusCode=200)
    {
      return response()->json(['status' => true, 'message' => $message, 'data' => $data,'statusCode'=>$statusCode] , $statusCode);
    }

    public function apiSuccessPaginationResponse(JsonResource $data = null , $message = null,$statusCode=200)
    {
      $data=$data->response()->getData(true);
      if(is_array($data)){
        if(array_key_exists('links',$data)){
          unset($data['links']);
        }
        if(array_key_exists('meta',$data)&& array_key_exists('links',$data['meta'])){
          unset($data['meta']['links']);
        }
      }

      return response()->json(['status' => true,'type'=>'pagination', 'message' => $message, 'data' => $data,'statusCode'=>$statusCode] , $statusCode);
    }

    public function apiErrorResponse($message = null , $errors = null,$errorCode=400)
    {
        return response()->json(['status' => false, 'message' => $message , 'errors' => $errors,'statusCode'=>$errorCode] , $errorCode);
    }

    public function apiWarningResponse($data = null , $message = null,$statusCode=200)
    {
        return response()->json(['status' => true, 'message' => $message, 'data' => $data,'statusCode'=>$statusCode]);
    }

    protected function ajaxSuccessResponse($message = null, $data = null, $status = true, $code = 200, $route = null)
    {
        return response()->json([
            'status' => $status,
            'statusCode' => $code,
            'data' =>    $data,
            'message' => $message,
            'route' => $route
        ], $code);
    }

    protected function ajaxErrorResponse($message = null, $code = 400, $status = false, $data = null)
    {
        return response()->json([
            'status' => $status,
            'statusCode' => $code,
            'message'    => $message,
            'data' => $data
        ], $code);
    }
}

