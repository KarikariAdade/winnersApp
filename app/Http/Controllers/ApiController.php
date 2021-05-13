<?php

namespace App\Http\Controllers;

use App\Http\Resources\MatchResource;
use App\Match;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ApiController extends Controller
{
    public function index()
    {
        $matches = Match::query()->orderBy('id', 'desc')->get();
        return $this->jsonSuccessResponse($matches);
    }
}
