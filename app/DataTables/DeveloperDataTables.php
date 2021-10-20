<?php

  namespace App\DataTables;

  use App\Models\Developer;
  use Hexters\Ladmin\Datatables\Datatables;
  use Hexters\Ladmin\Contracts\DataTablesInterface;

  class DeveloperDataTables extends Datatables implements DataTablesInterface {

    /**
     * Datatables function
     */
    public function render() {

      /**
       * Data from controller
       */
      $data = self::$data;

      return $this->eloquent(Developer::query())
        ->addIndexColumn()
        ->addColumn('action', function($item) {
            return view('ladmin::table.action', [
            'show' => [
                'gate' => 'administrator.kelola.developer.show',
                'url' => route('administrator.kelola.developer.show', [$item->id, 'back' => request()->fullUrl()])
            ],
            'edit' => [
                'gate' => 'administrator.kelola.developer.update',
                'url' => route('administrator.kelola.developer.edit', [$item->id, 'back' => request()->fullUrl()])
            ],
            'destroy' => [
                'gate' => 'administrator.kelola.developer.destroy',
                'url' => route('administrator.kelola.developer.destroy', [$item->id, 'back' => request()->fullUrl()]),
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
        'title' => 'Developer',
        'buttons' => view('vendor.ladmin.developer._partials._topButton'), // e.g : view('user.actions.create')
        'fields' => [ __('ID'),__('#'),__('Nama'),__('Alamat'),__('NPWP'),__('No. Telepon'),__('Action') ], // Table header
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
              ['data' => 'id', 'class' => 'text-center', 'visible' => false],
              ['data' => 'DT_RowIndex', 'class' => 'text-center','orderable' => false],
              ['data' => 'nama_dev'],
              ['data' => 'alamat_dev'],
              ['data' => 'NPWP_dev'],
              ['data' => 'telepon_dev'],
              ['data' => 'action', 'class' => 'text-center', 'orderable' => false],

          ]
        ]
      ];

    }

  }
