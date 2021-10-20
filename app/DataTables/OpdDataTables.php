<?php

  namespace App\DataTables;

  use App\Models\Opd;
  use Hexters\Ladmin\Datatables\Datatables;
  use Hexters\Ladmin\Contracts\DataTablesInterface;

  class OpdDataTables extends Datatables implements DataTablesInterface {

    /**
     * Datatables function
     */
    public function render() {

      /**
       * Data from controller
       */
      $data = self::$data;

      return $this->eloquent(Opd::query())
        ->addColumn('action', function($item) {
            return view('ladmin::table.action', [
            'show' => null,
            'edit' => [
                'gate' => 'administrator.account.opd.update',
                'url' => route('administrator.account.opd.edit', [$item->id, 'back' => request()->fullUrl()])
            ],
            'destroy' => [
                'gate' => 'administrator.account.opd.destroy',
                'url' => route('administrator.account.opd.destroy', [$item->id, 'back' => request()->fullUrl()]),
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
        'title' => 'Data OPD',
        'buttons' => view('vendor.ladmin.opd._partials._topButton'), // e.g : view('user.actions.create')
        'fields' => [ __('ID'),__('Nama OPD'),__('Email'),__('Telepon'),__('Alamat'),__('Action') ], // Table header
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
              ['data' => 'id', 'class' => 'text-center'],
              ['data' => 'nama_opd'],
              ['data' => 'email'],
              ['data' => 'telepon'],
              ['data' => 'alamat'],
              ['data' => 'action', 'class' => 'text-center', 'orderable' => false]
          ]
        ]
      ];

    }

  }
