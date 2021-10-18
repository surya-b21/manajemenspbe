<?php

namespace App\Http\Controllers\Administrator;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;
use App\Repositories\RoleRepository;
use Hexters\Ladmin\Exceptions\LadminException;
use App\DataTables\RoleDatatables;

class InovasiController extends Controller
{
    protected $repository;

    public function __construct(UserRepository $repository) {
        $this->repository = $repository;
    }
}
