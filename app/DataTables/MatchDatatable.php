<?php

namespace App\DataTables;

use App\Match;
use Carbon\Carbon;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class MatchDatatable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->editColumn('created_at', function ($query){
                return Carbon::parse($query->created_at)->toDayDateTimeString();
            })
            ->editColumn('league_id', function ($query){
                return $query->league->league_name;
            })
            ->editColumn('match_day', function ($query){
                if ($query->match_day = Carbon::parse($query->match_day)->isToday()){
                    return 'Today';
                }
                return Carbon::parse($query->match_day)->toDateString();
            })
            ->escapeColumns([])
            ->editColumn('match_time', function($query){
                return Carbon::parse($query->match_time)->toTimeString();
            })
            ->editColumn('status', function($query){
                if ($query->status === 'Won'){
                    return '<p class="badge badge-success-gradient">'.$query->status.'</p>';
                }
                if ($query->status === 'Lost'){
                    return '<p class="badge badge-danger-gradient">'.$query->status.'</p>';
                }
            })
            ->editColumn('action', function ($query){
                return '<div class="btn" style="display: inline-flex;">
                        <a href="'.route('match.show', $query->id).'" class="btn btn-icon btn-success-gradient btn-sm shadow-info mr-2 btn-circle" title="View Details"><span class="fa fa-eye"></span></a>
                        <a href="'.route('match.changeStatus', $query->id).'" class="btn btn-icon btn-success btn-sm shadow-info mr-2 btn-circle" title="Mark as Win"><span class="fa fa-check-circle-o"></span></a>
                        <a href="#" class="btn btn-icon btn-info btn-sm shadow-info mr-2 btn-circle" onclick="return showMatchDataFunction('.$query->id.')"><span class="fa fa-soccer-ball-o"></span></a>
                        <a href="'.route('match.edit', $query->id).'" title="Edit Client" class="btn btn-icon btn-warning btn-sm shadow btn-circle mr-2"><i class="fa fa-sm fa-edit"></i></a>
                        <a href="'.route('match.delete', $query->id).'" onclick="return confirm(\'Are you sure you want to delete match?\')" title="Deactivate Client" class="btn btn-icon shadow btn-danger btn-sm btn-circle mr-2"><i class="fa fa-sm fa-trash"></i></a>
                        </div>';
            });
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\App\MatchDatatable $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Match $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->setTableId('dataTable')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->dom('Bfrtip')
            ->orderBy(1);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::computed('action')
                  ->exportable(false)
                  ->printable(false)
                  ->width(60)
                  ->addClass('text-center'),
            Column::make('id'),
            Column::make('league_id')->title('League'),
            Column::make('home_team')->title('Home Team'),
            Column::make('away_team')->title('Away Team'),
            Column::make('match_day')->title('Match Day'),
            Column::make('match_time')->title('Match Time'),
            Column::make('status')->title('Status'),
            Column::make('created_at'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Match_' . date('YmdHis');
    }
}
