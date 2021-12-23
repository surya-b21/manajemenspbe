<?php

namespace App\Http\Controllers\Administrator;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Developer;
use App\Models\Dokumen;
use App\Models\ElemenSmart;
use App\Models\Inovasi;
use App\Models\KategoriUmum;
use App\Models\Opd;
use App\Models\User;
use App\Models\Versi;
use App\Models\TopikForum;
use App\Models\KategoriForum;

class DashboardController extends Controller
{

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {

    $data['user'] = User::all()->count();
    $data['opd'] = Opd::all()->count();
    $data['inovasi'] = Inovasi::all()->count();
    $data['dokumen'] = Dokumen::all()->count();
    $data['ku'] = KategoriUmum::all()->count();
    $data['esmart'] = ElemenSmart::all()->count();
    $data['developer'] = Developer::all()->count();
    $data['versi'] = Versi::all()->count();
    $data['kf'] = KategoriForum::all()->count();
    $data['topik'] = TopikForum::all()->count();

    return view('vendor.ladmin.dashboard.index', $data);
  }
}