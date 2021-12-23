<?php

namespace App\DataTables;

use App\Models\TopikForum;
use App\Models\Forum\Kategori;
use Hexters\Ladmin\Datatables\Datatables;
use Hexters\Ladmin\Contracts\DataTablesInterface;
use Illuminate\Support\Facades\DB;

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
    // $kategori = DB::table('kategori_forum')->where('id', $id)->get()->first();

    return [
      'title' => 'Topik Forum',
      'title_page' => 'Topik Forum',
      'buttons' => view('vendor.ladmin.topik-forum._partials._topButton'), // e.g : view('user.actions.create')
      'fields' => [__('#'), __('Judul'), __('Kategori Forum'), __('Action')], // Table header
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
          ['data' => 'judul'],
          ['data' => 'id_kf'],
          ['data' => 'action', 'class' => 'text-center', 'orderable' => false]
        ]
      ]
    ];
  }
}