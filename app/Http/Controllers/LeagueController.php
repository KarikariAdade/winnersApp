<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeagueController extends Controller
{

    public function index(Request $request)
    {
        $pageName = ucfirst($request->segments()[count($request->segments()) -1]);
        return view('leagues.index', compact('pageName'));
    }

    public function store(Request $request)
    {
        return $request->all();
    }

    public function edit($id)
    {
        return view('leagues.edits');
    }

    public function update(Request $request, $id)
    {
        return $request->all();
    }

    public function delete($id)
    {
        return $id;
    }
}
