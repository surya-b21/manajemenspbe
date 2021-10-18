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
            'show' => null,
            'edit' => [
                'gate' => 'administrator.konten.kategori-umum.update',
                'url' => route('administrator.konten.kategori-umum.edit', [$item->id, 'back' => request()->fullUrl()])
            ],
            'destroy' => [
                'gate' => 'administrator.konten.kategori-umum.destroy',
                'url' => route('administrator.konten.kategori-umum.destroy', [$item->id, 'back' => request()->fullUrl()]),
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
        'fields' => [ __('ID'),__('Kategori'),__('Action') ], // Table header
        /**
         * DataTables Options
         */
        'options' => [
          'processing' => true,
          'serverSide' => true,
          'ajax' => request()->fullurl(),
          'columns' => [
              ['data' => 'id', 'class' => 'text-center'],
              ['data' => 'kategori'],
              ['data' => 'action', 'class' => 'text-center', 'orderable' => false]
          ]
        ]
      ];

    }

  }
