<?php 

namespace App\Libraries;

class Response {
  public static function success($message = null, $status = 'success') {
    $response['success'] = true;
    if ($message) {
        $response['message'] = $message;
    }
    if ($status) {
        $response['status'] = $status;
    }
    return response()->json($response);
  }
  
  public static function error($message = null, $status = 'error') {
    $response['success'] = false;
    if ($message) {
        $response['message'] = $message;
    }
    if ($status) {
        $response['status'] = $status;
    }
    return response()->json($response);
  }

  public static function validation($validation, $status = 'validation') {
    $response['success'] = false;
    $response['errors'] = $validation;
    $response['message'] = 'Error Validation';
    if ($status) {
        $response['status'] = $status;
    }
    return response()->json($response, 400);
  }
}