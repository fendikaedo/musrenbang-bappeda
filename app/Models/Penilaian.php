<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penilaian extends Model
{
    use HasFactory;

    protected $table = 'penilaian';

    public $timestamps = false;

    public function kegiatan()
    {
        return $this->belongsTo(Kegiatan::class,'kegiatan_id');
    }
}
