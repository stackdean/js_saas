<?php

namespace App\DataTables;

use App\Models\Package;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Html\Editor\Editor;

class PackagesDataTable extends DataTable
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
            ->addColumn('action', function (Package $package) {
                return view('package.action', compact('package'));
            });
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Package $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Package $model)
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
                    ->setTableId('packages-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Bfrtip')
                    ->orderBy(1)
                    ->language([
                        "paginate" => [
                            "next" => '<i class="ti ti-chevron-right"></i>',
                            "previous" => '<i class="ti ti-chevron-left"></i>'
                        ]
                    ])
                    ->parameters([
                        "dom" =>  "
                                        <'row'<'col-sm-12'><'col-sm-9 'B><'col-sm-3'f>>
                                        <'row'<'col-sm-12'tr>>
                                        <'row mt-3 '<'col-sm-5'i><'col-sm-7'p>>
                                        ",

                        'buttons'   => [
                            ['extend' => 'create', 'className' => 'btn btn-primary btn-sm no-corner add_user', 'action' => " function ( e, dt, node, config ) {}"],
                            ['extend' => 'export', 'className' => 'btn btn-primary btn-sm no-corner',],
                            ['extend' => 'print', 'className' => 'btn btn-primary btn-sm no-corner',],
                            ['extend' => 'reset', 'className' => 'btn btn-primary btn-sm no-corner',],
                            ['extend' => 'reload', 'className' => 'btn btn-primary btn-sm no-corner',],
                            ['extend' => 'pageLength', 'className' => 'btn btn-primary btn-sm no-corner',],
                        ],

                        "scrollX" => true
                    ])
                    ->language([
                        'buttons' => [
                            'create' => __('Create'),
                            'export' => __('Export'),
                            'print' => __('Print'),
                            'reset' => __('Reset'),
                            'reload' => __('Reload'),
                            'excel' => __('Excel'),
                            'csv' => __('CSV'),
                            'pageLength' => __('Show %d rows'),
                        ]
                    ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::make('id')->title(__('No')),
            Column::make('title')->title(__('Title')),
            Column::make('fees')->title(__('Fees')),
            Column::make('duration')->title(__('Duration')),
            Column::make('description')->title(__('Description')),
            Column::computed('action')->title(__('Action'))

                ->exportable(false)
                ->printable(false)
                ->width(120)
                ->addClass('text-center'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Packages_' . date('YmdHis');
    }
}
