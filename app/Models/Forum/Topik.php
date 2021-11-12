<?php

namespace App\Models\Forum;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Komentar;

class Topik extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    public $keyType = 'string';
    protected $table = 'topik_forum';
    protected $guarded = [];
    protected $with = ['kategori'];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kf');
    }

    public function komentar()
    {
        return $this->hasMany(Komentar::class, 'id_topik', 'id');
    }

    public function topiks()
    {
        return $this->hasMany(Topik::class);
    }

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('judul', 'like', '%' . $search . '%')
                ->orWhere('isi', 'like', '%' . $search . '%');
        });

        $query->when(
            $filters['kategori_forum'] ?? false,
            fn ($query, $kategori) =>
            $query->whereHas(
                'kategori_forum',
                fn ($query) => $query->where('kategori_forum', $kategori)
            )
        );
    }
}