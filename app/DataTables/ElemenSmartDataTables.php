<?php

  namespace App\DataTables;

  use App\Models\ElemenSmart;
  use Hexters\Ladmin\Datatables\Datatables;
  use Hexters\Ladmin\Contracts\DataTablesInterface;

  class ElemenSmartDataTables extends Datatables implements DataTablesInterface {

    /**
     * Datatables function
     */
    public function render() {

      /**
       * Data from controller
       */
      $data = self::$data;

      return $this->eloquent(ElemenSmart::query())
        ->addIndexColumn()
        ->addColumn('action', function($item) {
            return view('ladmin::table.action', [
            'show' => null,
            'edit' => [
                'gate' => 'administrator.kelola.elemen-smart.update',
                'url' => route('administrator.kelola.elemen-smart.edit', [$item->id, 'back' => request()->fullUrl()])
            ],
            'destroy' => [
                'gate' => 'administrator.kelola.elemen-smart.destroy',
                'url' => route('administrator.kelola.elemen-smart.destroy', [$item->id, 'back' => request()->fullUrl()]),
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
        'title' => 'Elemen Smart',
        'buttons' => view('vendor.ladmin.elemen-smart._partials._topButton'), // e.g : view('user.actions.create')
        'fields' => [__('#'), __('Elemen Smart'),__('Deskripsi'),__('Action')], // Table header
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
              ['data' => 'element', 'class' => 'text-left'],
              ['data' => 'deskripsi', 'class' => 'text-justify'],
              ['data' => 'action', 'class' => 'text-center', 'orderable' => false]
          ]
        ]
      ];

    }

  }
