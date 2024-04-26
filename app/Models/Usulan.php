<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usulan extends Model
{
    use HasFactory;

    protected $table = 'usulan';

    public $timestamps = false;

    public function kabupaten()
    {
        return $this->belongsTo(Kabupaten::class,'kabupaten_id');
    }

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class,'kabupaten_id');
    }

    public function opd()
    {
        return $this->join('opd', 'usulan.opd_id_akhir', '=', 'opd.nama')
                    ->select('usulan.*', 'opd.nama  ');
    }

}
