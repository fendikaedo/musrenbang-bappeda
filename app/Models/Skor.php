<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skor extends Model
{
    use HasFactory;

    protected $table = 'Skor';

    public $timestamps = false;

    public function usulan()
    {
        return $this->belongsTo(Usulan::class,'usulan_id');

    }

    public function kriteria()
    {
        return $this->belongsTo(Kriteria::class,'kriteria_id');

    }

    public function penilaian()
    {
        return $this->belongsTo(Penilaian::class,'penilaian_id');

    }
}
