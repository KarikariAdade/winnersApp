@extends('layouts.master_layout')
@section('content')
    <div class="container">
        <div class="card p-4">
            <h2>Update League ({{ $league->league_name }})</h2>
            <form class="row" method="POST" action="{{ route('league.update', $league->id) }}">
                @csrf
                @method('PATCH')
                <div class="col-md-6 form-group">
                    <label>League Name</label>
                    <input type="text" name="league_name" class="form-control @error('league_name') is-invalid @enderror" value="{{ $league->league_name ?? old('league_name') }}">
                    @error('league_name')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-md-6 mt-md-5">
                    <button class="btn btn-primary">Update League</button>
                </div>
            </form>
        </div>
    </div>
@endsection
