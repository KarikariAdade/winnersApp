@extends('layouts.master_layout')
@section('content')
    <div class="container">
        <div class="card p-4">
            <h1 class="text-center">{{ strtoupper($match->league->league_name) }} ({{ $match->sports_type }})</h1><br>
            <div class="row text-center">
                <div class="col-md-5">
                    <h1> {{ strtoupper($match->home_team) }}</h1>
                    <h3>{{ $match->home_scores }}</h3>
                </div>
                <div class="col-md-2 pt-2">
                    <h3> VS </h3>
                </div>
                <div class="col-md-5">
                    <h1>{{ strtoupper($match->away_team) }}</h1>
                    <h3> {{ $match->away_scores }}</h3>
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-6">
                    <h3>Match Day: {{ date('l M d, Y', strtotime($match->match_day)) }}</h3><br>
                    <h3>Match Time: {{ date('h:ia', strtotime($match->match_time)) }}</h3>
                </div>
                <div class="col-md-6">
                    <h3>Conditions: <p class="badge badge-success"> {{ $match->match_condition }}</p></h3><br>
                    <h3>Odds: {{ $match->odds }}</h3>
                </div>
            </div>
        </div>
    </div>
@endsection
