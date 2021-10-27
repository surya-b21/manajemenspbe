<?php

  namespace App\DataTables;

  use App\Models\Dokumen;
  use Hexters\Ladmin\Datatables\Datatables;
  use Hexters\Ladmin\Contracts\DataTablesInterface;

  class DokumenDataTables extends Datatables implements DataTablesInterface {

    /**
     * Datatables function
     */
    public function render() {

      /**
       * Data from controller
       */
      $data = self::$data;

      return $this->eloquent(Dokumen::query())
      ->addIndexColumn()
      ->addColumn('action', function($item) {
            return view('ladmin::table.action', [
            'show' => [
                'gate' => 'administrator.kelola.dokumen.show',
                'url' => route('administrator.kelola.dokumen.show', [$item->id, 'back' => request()->fullUrl()])
            ],
            'edit' => [
                'gate' => 'administrator.kelola.dokumen.update',
                'url' => route('administrator.kelola.dokumen.edit', [$item->id, 'back' => request()->fullUrl()])
            ],
            'destroy' => [
                'gate' => 'administrator.kelola.dokumen.destroy',
                'url' => route('administrator.kelola.dokumen.destroy', [$item->id, 'back' => request()->fullUrl()]),
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
        'title' => 'Dokumen',
        'buttons' => view('vendor.ladmin.dokumen._partials._topButton'), // e.g : view('user.actions.create')
        'fields' => [ __('#'),__('Judul'),__('Action') ], // Table header
        'foos' => [ // Custom data array. You can call in your blade with variable $foos
          'bar' => 'baz',
          'baz' => 'bar',
        ],
        /**
         * DataTables Options
         */
        'options' => [
          'processing' => true,
          'serverSide' => true,
          'ajax' => request()->fullurl(),
          'columns' => [
              ['data' => 'DT_RowIndex', 'class' => 'text-center', 'orderable' => false],
              ['data' => 'judul'],
              ['data' => 'action', 'class' => 'text-center', 'orderable' => false]
          ]
        ]
      ];

    }

  }
