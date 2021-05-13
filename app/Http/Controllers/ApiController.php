<?php

namespace App\Http\Controllers;

use App\Http\Resources\MatchResource;
use App\League;
use App\Match;
use App\SportsType;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ApiController extends Controller
{
    public function index()
    {
        $matches = Match::query()->with('league')->orderBy('id', 'desc')->get();

        return $this->jsonSuccessResponse($matches);
    }


    public function showMatch($id)
    {
        $match = Match::query()->with('league')->where('id', $id)->first();

        return $this->jsonSuccessResponse($match);
    }

    public function getSportTypes()
    {
        $sports_types = SportsType::query()->orderBy('id', 'desc')->get();

        return $this->jsonSuccessResponse($sports_types);
    }

    public function getLeagues()
    {
        $league = League::query()->orderBy('id', 'desc')->get();

        return $this->jsonSuccessResponse($league);
    }
}
