<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function pageName()
    {
        return ucfirst(Request::segments()[count(Request::segments()) -1]);
    }

    public function jsonSuccessResponse($msg)
    {
        return response()->json([
            'status' => 'success',
            'code' => '200',
            'msg' => $msg
        ]);
    }

    public function jsonFailureResponse($msg)
    {
        return response()->json([
            'status' => 'fail',
            'code' => '401',
            'msg' => $msg
        ]);
    }
}
