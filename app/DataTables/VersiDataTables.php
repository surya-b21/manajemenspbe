<?php

  namespace App\DataTables;

  use App\Models\versi;
  use Hexters\Ladmin\Datatables\Datatables;
  use Hexters\Ladmin\Contracts\DataTablesInterface;

  class VersiDataTables extends Datatables implements DataTablesInterface {

    /**
     * Datatables function
     */
    public function render() {

      /**
       * Data from controller
       */
      $data = self::$data;

      return $this->eloquent(versi::query())
        ->addIndexColumn()
        ->addColumn('action', function($item) {
            return view('ladmin::table.action', [
            'show' => [
                'gate' => 'administrator.kelola.versi.show',
                'url' => route('administrator.kelola.versi.show', [$item->id, 'back' => request()->fullUrl()])
              ],
            'edit' => [
                'gate' => 'administrator.kelola.versi.update',
                'url' => route('administrator.kelola.versi.edit', [$item->id, 'back' => request()->fullUrl()])
            ],
            'destroy' => [
                'gate' => 'administrator.kelola.versi.destroy',
                'url' => route('administrator.kelola.versi.destroy', [$item->id, 'back' => request()->fullUrl()]),
            ]
            ]);
        })
        ->escapeColumns([])
        ->make(true);
    }

    /**
     * Datatables Option
     */
    public function options() {

      /**
       * Data from controller
       */
      $data = self::$data;

      return [
        'title_page' => 'Versi',
        'title' => 'Kelola Versi',
        'buttons' => view('vendor.ladmin.versi._partials._topButton'), // e.g : view('user.actions.create')
        'fields' => [ __('#'),__('Nama'),__('Action') ], // Table header
        /**
         * DataTables Options
         */
        'options' => [
          'processing' => true,
          'serverSide' => true,
          'ajax' => request()->fullurl(),
          'columns' => [
              ['data' => 'DT_RowIndex', 'class' => 'text-center', 'orderable' => false],
              ['data' => 'nama'],
              ['data' => 'action', 'class' => 'text-center']
          ]
        ]
      ];

    }

  }
