<?php

namespace App\DataTables;

use App\Models\UserModel;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class mUserDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {

        return (new EloquentDataTable($query))
    ->addColumn('action', function ($m_user) {
        return '<div class="btn-group" role="group">' .
            '<div class="btn-group" role="group" aria-label="Basic example">' .
            '<a class="btn btn-info btn-sm rounded" href="' . route('m_user.show', $m_user->user_id) . '">Show</a>' .
            '<a class="btn btn-primary btn-sm rounded" href="' . route('m_user.edit', $m_user->user_id) . '">Edit</a>' .
            '<form action="' . route('m_user.destroy', $m_user->user_id) . '" method="POST">' .
            csrf_field() .
            method_field('DELETE') .
            '<button type="submit" class="btn btn-danger btn-sm rounded" onclick="return confirm(\'Apakah anda yakin ingin menghapus data ini?\')">Delete</button>' .
            '</form>' .
            '</div>' .
            '</div>';
    })
    ->setRowId('user_id');

    

        // return (new EloquentDataTable($query))
        //     ->addColumn('action', function ($m_user) {
        //         return '<div class="btn-group" role="group">' .
        //         '<a href="' . route('m_user.show', ['m_user' => $m_user->user_id]) . 
        //             '" class="btn btn-info btn-sm">Show</a>' .
        //         '<a href="' . route('m_user.edit', ['m_user' => $m_user->user_id]) . 
        //             '" class="btn btn-primary btn-sm">Edit</a>' .
        //         '<form action="' . route('m_user.destroy', ['m_user' => $m_user->user_id]) . 
        //         '" method="POST" onsubmit="return confirm(\'Apakah anda yakin ingin menghapus data ini?\')">' .
        //             '@csrf' .
        //             '@method("DELETE")' .
        //             '<button type="submit" class="btn btn-danger btn-sm rounded">Delete</button>' .
        //         '</form>' .
        //         '</div>';
        //     })
        //     ->setRowId('id');

    //     return (new EloquentDataTable($query))
    // ->addColumn('action', function ($m_user) {
    //     return '<div class="btn-group" role="group">' .
    //         '<a href="' . route('m_user.show', ['m_user' => $m_user->user_id]) . 
    //         '" class="btn btn-info btn-sm border">Show</a>' .
    //         '<a href="' . route('m_user.edit', ['m_user' => $m_user->user_id]) . 
    //         '" class="btn btn-primary btn-sm">Edit</a>' .
    //         '<form action="' . route('m_user.destroy', ['m_user' => $m_user->user_id]) . '" method="POST" onsubmit="return confirm(\'Apakah anda yakin ingin menghapus data ini?\')">' .
    //         '@csrf' .
    //         '@method("DELETE")' .
    //         '<button type="submit" class="btn btn-danger btn-sm rounded">Delete</button>' .
    //         '</form>' .
    //         '</div>';
    // })
    // ->setRowId('user_id'); // Sesuaikan dengan nama kolom primary key

    }


    /**
     * Get the query source of dataTable.
     */
    public function query(UserModel $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('m_user-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            //->dom('Bfrtip')
            ->orderBy(1)
            ->selectStyleSingle()
            ->buttons([
                Button::make('excel'),
                Button::make('csv'),
                Button::make('pdf'),
                Button::make('print'),
                Button::make('reset'),
                Button::make('reload')
            ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::make('user_id'),
            Column::make('level_id'),
            Column::make('username'),
            Column::make('nama'),
            Column::make('password'),
            // Column::make('created_at'),
            // Column::make('updated_at'),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->addClass('text-center'),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'User_' . date('YmdHis');
    }
}