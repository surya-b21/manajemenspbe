<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Hexters\Ladmin\LadminLogable;
use Illuminate\Database\Eloquent\Model;

class TopikForum extends Model
{
    use Notifiable, HasFactory, LadminLogable;

    protected $table = 'topik_forum';

    protected $guarded = [];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function komentar()
    {
        return $this->hasMany(Komentar::class);
    }

    public function topiks()
    {
        return $this->hasMany(Topik::class);
    }
}