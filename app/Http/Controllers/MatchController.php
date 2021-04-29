<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatchController extends Controller
{
    public function index()
    {
        return view('matches.index');
    }

    public function create()
    {
        return view('matches.create');
    }

    public function store(Request $request)
    {
        return $request->all();
    }


    public function show($id)
    {
        return $id;
    }

    public function edit($id)
    {
        return $id;
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
