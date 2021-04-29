@extends('layouts.master_layout')
@section('content')
    <div class="container">
        <div class="card p-4">
            <h2>Add League</h2>
        <form class="row" method="POST" action="{{ route('league.store') }}">
            @csrf
            <div class="col-md-6 form-group">
                <label>League Name</label>
                <input type="text" name="league_name" class="form-control @error('league_name') is-invalid @enderror" value="{{ old('league_name') }}">
                @error('league_name')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="col-md-6 mt-md-5">
                <button class="btn btn-primary">Create League</button>
            </div>
        </form>
        </div>
    </div>
    <div class="container">
        <div class="card p-4">
            <h4>League Center</h4>
            {!! $dataTable->table(['class' => 'table']) !!}
        </div>
    </div>
@endsection
@push('scripts')
    {!! $dataTable->scripts() !!}
@endpush
