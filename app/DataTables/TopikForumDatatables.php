<?php

namespace App\DataTables;

use App\Models\TopikForum;
use Hexters\Ladmin\Datatables\Datatables;
use Hexters\Ladmin\Contracts\DataTablesInterface;

class TopikForumDatatables extends Datatables implements DataTablesInterface
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

    return $this->eloquent(TopikForum::query())
      ->addIndexColumn()
      ->addColumn('action', function ($item) {
        return view('ladmin::table.action', [
          'show' => [
            'gate' => 'administrator.kelola.topik-forum.show',
            'url' => route('administrator.kelola.topik-forum.show', [$item->id, 'back' => request()->fullUrl()])
          ],
          'edit' => [
            'gate' => 'administrator.kelola.topik-forum.update',
            'url' => route('administrator.kelola.topik-forum.edit', [$item->id, 'back' => request()->fullUrl()])
          ],
          'destroy' => [
            'gate' => 'administrator.kelola.topik-forum.destroy',
            'url' => route('administrator.kelola.topik-forum.destroy', [$item->id, 'back' => request()->fullUrl()]),
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
      'title' => 'List Of TopikForum',
      'title_page' => 'Topik Forum',
      'buttons' => view('vendor.ladmin.topik-forum._partials._topButton'), // e.g : view('user.actions.create')
      'fields' => [__('#'), __('Nama'), __('Kategori Forum'), __('Action')], // Table header
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
          ['data' => 'DT_RowIndex', 'class' => 'text-center', 'orderable' => 'false'],
          ['data' => 'nama'],
          ['data' => 'layanan_spbe'],
          ['data' => 'action', 'class' => 'text-center', 'orderable' => false]
        ]
      ]
    ];
  }
}