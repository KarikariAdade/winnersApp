<?php

namespace App\Http\Controllers;

use App\DataTables\MatchDatatable;
use App\Http\Requests\MatchRequest;
use App\League;
use App\Match;
use App\SportsType;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class MatchController extends Controller
{
    public function index(MatchDatatable $matchDatatable)
    {
        $pageName = $this->pageName();

        return $matchDatatable->render('matches.index', compact('pageName'));
    }


    public function create()
    {
        $pageName = $this->pageName();

        $leagues = League::query()->orderBy('id', 'desc')->get();

        $sports_types = SportsType::all();

        return view('matches.create', compact('leagues', 'pageName', 'sports_types'));
    }


    public function addMatchScores(Request $request)
    {
        $id = $request->get('match_data_id');

        $match = $this->getCurrentMatch($id);

        $data = [
            'home_scores' => $request->get('home_scores'),
            'away_scores' => $request->get('away_scores')
        ];

        $rules = [
            'home_scores' => 'required',
            'away_scores' => 'required'
        ];

        $validate = Validator::make($data, $rules);

        if ($validate->fails())
            return $this->jsonFailureResponse($validate->errors()->first());

        $match->update($data);

        return $this->jsonSuccessResponse('Match Scores updated successfully');

    }



    public function store(MatchRequest $request)
    {
        Match::query()->create($this->matchDump($request->all()));

        toast('Match created successfully', 'success');

        return redirect()->route('match.index');
    }


    public function show($id)
    {
        $match = $this->getCurrentMatch($id);

        $pageName = 'Match Details';

        if ($match->status == 'Won'){
            alert()->success('You Won!!!','Congratulations. You Won!');
        }

        return view('matches.show', compact('match', 'pageName'));
    }

    public function edit($id)
    {
        $pageName = 'Update Match';

        $match = $this->getCurrentMatch($id);

        $leagues = League::query()->orderBy('id', 'desc')->get();

        $sports_types = SportsType::all();

        return view('matches.edit', compact('match', 'pageName', 'leagues', 'sports_types'));
    }


    public function update(MatchRequest $request, $id)
    {
        $match = $this->getCurrentMatch($id);

        $match->update($this->matchDump($request->all()));

        toast('Match updated successfully', 'success');

        return back();

    }


    public function changeMatchStatus($id)
    {
        $match = $this->getCurrentMatch($id);

        $status = 'Won';

        if ($match->status === 'Won'){
            $match->update(['status' => 'Lost']);
            $status = 'Lost';
        }else{
            $match->update(['status' => $status]);
        }

        toast('Status successfully updated to '.$status, 'success');

        return redirect()->route('match.index');
    }


    public function delete($id)
    {
        $match = $this->getCurrentMatch($id);

        $match->delete();

        toast('Match deleted successfully', 'success');

        return redirect()->route('match.index');
    }


    public function getCurrentMatch($match_id)
    {
        return Match::query()->where('id', $match_id)->first();
    }


    public function matchDump($data)
    {
        return [
            'league_id' => $data['league'],
            'home_team' => $data['home_team'],
            'away_team' => $data['away_team'],
            'match_day' => $data['match_date'],
            'match_time' => $data['match_time'],
            'odds' => $data['odds'],
            'match_condition' => $data['match_condition'],
            'sports_type' => $data['sports_type'],
        ];
    }
}
