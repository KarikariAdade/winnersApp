@extends('layouts.master_layout')
@section('content')
<div class="container">
    <div class="card p-4">
        <form class="row" method="POST" action="{{ route('match.store') }}">
            @csrf
            <div class="form-group col-md-4">
                <label>Select Sports Type</label>
                <select class="form-control select2 @error('sports_type') is-invalid @enderror" data-placeholder="Choose one" name="sports_type">
                    <option></option>
                    @foreach($sports_types as $sports_type)
                        <option value="{{ $sports_type->name }}" {{ old('sports_type') === $sports_type->name ? 'selected' : null }}>{{ $sports_type->name }}</option>
                    @endforeach
                </select>
                @error('sports_type')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label>Select League</label>
                <select class="form-control select2 @error('league') is-invalid @enderror" data-placeholder="Choose one" name="league">
                    <option></option>
                    @foreach($leagues as $league)
                    <option value="{{ $league->id }}" {{ old('league') == $league->id ? 'selected' : null }}>{{ $league->league_name }} ({{$league->league_name}})</option>
                    @endforeach
                </select>
                @error('league')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label>Home Team</label>
                <input type="text" class="form-control @error('home_team') is-invalid @enderror" name="home_team" value="{{ old('home_team') }}">
                @error('home_team')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label>Away Team</label>
                <input type="text" class="form-control @error('home_team') is-invalid @enderror" name="away_team" value="{{ old('away_team') }}">
                @error('away_team')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label>Match Date</label>
                <div class="form-group">
                    <input type="date" name="match_date" class="form-control" value="{{ old('match_date') }}">
                </div>
                @error('match_date')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label>Match Time</label>
                <div class="form-group">
                    <input type="time" name="match_time" class="form-control" value="{{ old('match_time') }}">
                </div>
                @error('match_time')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label>Match Condition</label>
                <input type="text" name="match_condition" class="form-control @error('match_condition') is-invalid @enderror" value="{{ old('match_condition') }}">
                @error('match_condition')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label>Odds</label>
                <input class="form-control @error('odds') is-invalid @enderror" name="odds" type="text" value="{{ old('odds') }}">
                @error('odds')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="col-md-12 text-center">
                <button class="btn btn-primary" type="submit">Add Match</button>
            </div>
        </form>
    </div>
</div>
@endsection
