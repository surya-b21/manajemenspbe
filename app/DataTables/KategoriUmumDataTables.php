<?php

  namespace App\DataTables;

  use App\Models\KategoriUmum;
  use Hexters\Ladmin\Datatables\Datatables;
  use Hexters\Ladmin\Contracts\DataTablesInterface;

  class KategoriUmumDataTables extends Datatables implements DataTablesInterface {

    /**
     * Datatables function
     */
    public function render() {

      /**
       * Data from controller
       */
      $data = self::$data;

      return $this->eloquent(KategoriUmum::query())
        ->addIndexColumn()
        ->addColumn('action', function($item) {
            return view('ladmin::table.action', [
            'edit' => [
                'gate' => 'administrator.kelola.kategori-umum.update',
                'url' => route('administrator.kelola.kategori-umum.edit', [$item->id, 'back' => request()->fullUrl()])
            ],
            'destroy' => [
                'gate' => 'administrator.kelola.kategori-umum.destroy',
                'url' => route('administrator.kelola.kategori-umum.destroy', [$item->id, 'back' => request()->fullUrl()]),
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
        'title' => 'Kategori Umum',
        'buttons' => view('vendor.ladmin.kategori-umum._partials._topButton'),
        'fields' => [ __('#'),__('Kategori'),__('Jenis Urusan'),__('Action') ], // Table header
        /**
         * DataTables Options
         */
        'options' => [
          'processing' => true,
          'serverSide' => true,
          'ajax' => request()->fullurl(),
          'columns' => [
              ['data' => 'DT_RowIndex', 'class' => 'text-center', 'orderable' => false],
              ['data' => 'kategori', 'class' => 'text-center'],
              ['data' => 'jenis_urusan'],
              ['data' => 'action', 'class' => 'text-center', 'orderable' => false]
          ]
        ]
      ];

    }

  }
