<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opd extends Model
{
    use HasFactory;

    protected $table = "opd";

    public $timestamps = false;

    public function bidang()
    {
        return $this->belongsTo(Bidang::class,'bidang_id');
    }

}
