@extends('layouts.master_layout')
@section('content')
    <div class="container">
        <div class="card p-4">
            <h4>Match Center</h4>
            {!! $dataTable->table(['class' => 'table']) !!}
        </div>
    </div>
    <div class="modal fade" id="scoresModal" tabindex="-1" role="dialog" aria-labelledby="scoresModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="example-Modal2">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="row addScoresForm" method="POST" action="{{ route('match.addScore') }}">
                        @csrf
                        <div class="col-md-12 errorSection">
                            <small class=""></small>
                        </div>
                        <input type="hidden" id="match_data" value="" name="match_data_id">
                        <div class="form-group col-md-6">
                            <label>Home Scores</label>
                            <input type="number" class="form-control" min="0" name="home_scores">
                        </div>
                        <div class="col-md-6">
                            <label>Away Scores</label>
                            <input type="number" class="form-control" min="0" name="away_scores">
                        </div>
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">Add Scores</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    {!! $dataTable->scripts() !!}
    <script>
        function showMatchDataFunction(id){
            let matchDataValue = $('#match_data').val(id);
            $('#scoresModal').modal('show');
        }
    </script>
@endpush
