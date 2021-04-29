<?php

namespace App\DataTables;

use App\League;
use Carbon\Carbon;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class LeagueDatatable extends DataTable
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
            ->editColumn('updated_at', function ($query){
                return Carbon::parse($query->updated_at)->toDayDateTimeString();
            })
            ->editColumn('action', function ($query){
                return '<div class="btn" style="display: inline-flex;">
                        <a href="'.route('league.edit', $query->id).'" title="Edit Client" class="btn btn-icon btn-warning btn-sm shadow btn-circle mr-2"><i class="fa fa-sm fa-edit"></i></a>
                        <a href="'.route('league.delete', $query->id).'" onclick="return confirm(\'Are you sure you want to delete league?\')" title="Deactivate Client" class="btn btn-icon shadow btn-danger btn-sm btn-circle mr-2"><i class="fa fa-sm fa-trash"></i></a>
                        </div>';
            });
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\App\LeagueDatatable $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(League $model)
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
                  ->exportable(true)
                  ->printable(true)
                  ->width(60)
                  ->addClass('text-center'),
            Column::make('league_name')->title('League Name'),
            Column::make('created_at'),
            Column::make('updated_at'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'League_' . date('YmdHis');
    }
}
