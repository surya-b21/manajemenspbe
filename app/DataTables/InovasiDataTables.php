<?php

  namespace App\DataTables;

  use App\Models\Inovasi;
  use Hexters\Ladmin\Datatables\Datatables;
  use Hexters\Ladmin\Contracts\DataTablesInterface;

  class InovasiDataTables extends Datatables implements DataTablesInterface {

    /**
     * Datatables function
     */
    public function render() {

      /**
       * Data from controller
       */
      $data = self::$data;

      return $this->eloquent(Inovasi::query())
        ->addIndexColumn()
        ->addColumn('action', function($item) {
            return view('ladmin::table.action', [
              'show' => [
                'gate' => 'administrator.kelola.inovasi.show',
                'url' => route('administrator.kelola.inovasi.show', [$item->id, 'back' => request()->fullUrl()])
              ],
              'edit' => [
                'gate' => 'administrator.kelola.inovasi.update',
                'url' => route('administrator.kelola.inovasi.edit', [$item->id, 'back' => request()->fullUrl()])
              ],
              'destroy' => [
                'gate' => 'administrator.kelola.inovasi.destroy',
                'url' => route('administrator.kelola.inovasi.destroy', [$item->id, 'back' => request()->fullUrl()]),
              ]
            ]);
          })
        ->addColumn('dokumen', function ($dokumen) {
            return '<a href="'.route('administrator.kelola.inovasi.dokumen.index', $dokumen->id).'">Lihat Dokumen</a>';
        })
        ->addColumn('versi', function($versi) {
            return '<a href="'.route('administrator.kelola.inovasi.versi.index', $versi->id).'">Kelola Versi</a>';
        })
        ->rawColumns(['dokumen','versi'])
        ->escapeColumns()
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
        'title' => 'Inovasi',
        'title_page' => 'Inovasi',
        'buttons' => view('vendor.ladmin.inovasi._partials._topButton'), // e.g : view('user.actions.create')
        'fields' => [ __('#'),__('Nama'),__('Layanan SPBE'),__('Action'),__('Dokumen'),__('Versi')], // Table header
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
              ['data' => 'layanan_spbe'],
              ['data' => 'action', 'class' => 'text-center', 'orderable' => false],
              ['data' => 'dokumen', 'class' => 'text-center', 'orderable' => false],
              ['data' => 'versi', 'class' => 'text-center', 'orderable' => false]
          ]
        ],
      ];

    }

  }
