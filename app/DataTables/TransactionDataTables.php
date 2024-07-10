<?php

namespace App\DataTables;

use App\Models\TransactionDataTable;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;
use App\Models\Transaction;

class TransactionDataTables extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return (new EloquentDataTable($query))
            ->editColumn('action', function(Transaction $data){
                return '';
            })->rawColumns(['action']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\TransactionDataTable $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Transaction $model)
    {

        return $model->where(function($query){
            if($this->mesin_id){
                $q = $query->where('mesin_id',$this->mesin_id);
            }

            if($this->code){
                $q = $query->where('code',$this->code);
            }

            if($this->month){
                $q = $query->whereMonth('submited_date',$this->month);
            }

            return $query;
        })->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('transactiondatatables-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax();
                    // ->dom('Bfrtip');
                    // ->orderBy(1)
                    // ->buttons(
                    //     Button::make('create'),
                    //     Button::make('export'),
                    //     Button::make('print'),
                    //     Button::make('reset'),
                    //     Button::make('reload')
                    // );
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::make('id')->title('No')->render(function() {
                return 'function(data,type,fullData,meta){
                    return meta.settings._iDisplayStart+meta.row+1;}';
            })->width(10),
            Column::make('submited_by'),
            Column::make('submited_date'),
            Column::make('code'),
            Column::make('activity'),
            Column::make('UOM'),
            Column::make('block'),
            Column::make('task'),
            Column::make('start'),
            Column::make('end'),
            Column::make('mesin_id'),
            Column::make('fuel'),
            Column::computed('action')->exportable(false)->printable(false)->title('Actions')->width(50),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'TransactionDataTables_' . date('YmdHis');
    }
}
