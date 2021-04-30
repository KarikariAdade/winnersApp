<?php

namespace App\Http\Controllers;

use App\DataTables\LeagueDatatable;
use App\League;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class LeagueController extends Controller
{

    public function index(Request $request, LeagueDatatable $leagueDatatable)
    {
        $pageName = $this->pageName();
        return $leagueDatatable->render('leagues.index', compact('pageName'));
    }

    public function store(Request $request)
    {
        $data = [
            'league_name' => $request->input('league_name')
        ];

        $validate = Validator::make($data, [
            'league_name' => 'required',
        ]);

        if ($validate->fails())
            return back()->withErrors($validate);

        League::query()->create($data);

        toast('League added successfully', 'success');

        return back();

    }

    public function edit($id)
    {

        $league = $this->getLeague($id);

        $pageName = 'Update League ('.($league->league_name).')';

        return view('leagues.edit', compact('league', 'pageName'));
    }


    public function update(Request $request, $id)
    {
        $league = $this->getLeague($id);

       $request->validate([
           'league_name' => 'required'
       ]);

        $league->update([
            'league_name' => $request->get('league_name')
        ]);

        toast('League updated successfully', 'success');

        return redirect()->route('league.index');

    }


    public function delete($id)
    {
        $league = $this->getLeague($id);

        $league->delete();

        toast('League deleted successfully', 'success');

        return back();
    }


    public function getLeague($leagueId)
    {
        return League::query()->where('id', $leagueId)->first();
    }
}
