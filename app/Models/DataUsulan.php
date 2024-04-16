<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataUsulan extends Model
{
    use HasFactory;

    protected $table = 'data_usulan';

    public $timestamps = false;

    public function opd()
    {
        return $this->belongsTo(Opd::class,'opd_id');
    }
}
