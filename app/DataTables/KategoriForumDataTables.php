<?php

namespace App\DataTables;

use App\Models\KategoriForum;
use Hexters\Ladmin\Datatables\Datatables;
use Hexters\Ladmin\Contracts\DataTablesInterface;

class KategoriForumDataTables extends Datatables implements DataTablesInterface
{

    /**
     * Datatables function
     */
    public function render()
    {

        /**
         * Data from controller
         */
        $data = self::$data;

        return $this->eloquent(KategoriForum::query())
            ->addIndexColumn()
            ->addColumn('action', function ($item) {
                return view('ladmin::table.action', [
                    'show' => [
                        'gate' => 'administrator.kelola.kategori-forum.show',
                        'url' => route('administrator.kelola.kategori-forum.show', [$item->id, 'back' => request()->fullUrl()])
                    ],
                    'edit' => [
                        'gate' => 'administrator.kelola.kategori-forum.update',
                        'url' => route('administrator.kelola.kategori-forum.edit', [$item->id, 'back' => request()->fullUrl()])
                    ],
                    'destroy' => [
                        'gate' => 'administrator.kelola.kategori-forum.destroy',
                        'url' => route('administrator.kelola.kategori-forum.destroy', [$item->id, 'back' => request()->fullUrl()]),
                    ]
                ]);
            })
            ->escapeColumns([])
            ->make(true);
    }

    /**
     * Datatables Option
     */
    public function options()
    {

        /**
         * Data from controller
         */
        $data = self::$data;

        return [
            'title' => 'Kategori Forum',
            'buttons' => view('vendor.ladmin.kategori-forum._partials._topButton'),
            'fields' => [__('#'), __('Kategori'), __('Parent'), __('Level'), __('Action')], // Table header
            /**
             * DataTables Options
             */
            'options' => [
                'processing' => true,
                'serverSide' => true,
                'ajax' => request()->fullurl(),
                'columns' => [
                    ['data' => 'DT_RowIndex', 'class' => 'text-center', 'orderable' => false],
                    ['data' => 'kategori'],
                    ['data' => 'parent'],
                    ['data' => 'level'],
                    ['data' => 'action', 'class' => 'text-center', 'orderable' => false]
                ]
            ]
        ];
    }
}