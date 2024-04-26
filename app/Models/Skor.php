<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skor extends Model
{
    use HasFactory;

    protected $table = 'Skor';

    public $timestamps = false;

    public function ksulan()
    {
        return $this->belongsTo(Usulan::class,'kegiatan_id');

    }

    public function kriteria()
    {
        return $this->belongsTo(Kriteria::class,'kegiatan_id');

    }

    public function penilaian()
    {
        return $this->belongsTo(Penilaian::class,'kegiatan_id');

    }
}
