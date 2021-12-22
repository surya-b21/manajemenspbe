<?php

namespace App\Models\Forum;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Topik;
use Illuminate\Support\Facades\DB;


class Komentar extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    public $keyType = 'string';
    protected $table = 'komentar_forum';
    protected $guarded = [];

    public function topik()
    {
        return $this->belongsTo('App\Models\topik', 'id_topik', 'id');
    }
    public function users()
    {
        return $this->belongsTo('App\Models\User', 'id_user', 'id');
    }

    public function joinUser()
    {
        $joinUser = DB::table('komentar_forum')
            ->leftjoin('users', 'komentar_forum.id_user', '=', 'users.id')
            ->select('*', 'users.*')
            ->get('*');
        return $joinUser;
    }
}
