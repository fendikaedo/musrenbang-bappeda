<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usulan extends Model
{
    use HasFactory;

    protected $table = 'usulan';

    protected $fillable = [
        'id_usulan',
        'tanggal_usul',
        'pengusul',
        'profil',
        'usulan',
        'masalah',
        'alamat',
        'kabupaten_id',
        'kecamatan_id',
        'kelurahan_id',
        'latitude',
        'longitude',
        'usulan_ke',
        'opd_id_awal',
        'opd_id_akhir',
        'status',
        'catatan',
        'rekomendasi_mitra',
        'rekomendasi_kelurahan_desa',
        'rekomendasi_kecamatan',
        'rekomendasi_skpd',
        'rekomendasi_tapd',
        'volume',
        'satuan',
        'anggaran',
        'jenis_belanja',
        'sub_kegiatan',
        'pilihan',
        'tahun',
    ];


    public $timestamps = false;

    public function kabupaten()
    {
        return $this->belongsTo(Kabupaten::class, 'kabupaten_id');
    }

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class, 'kecamatan_id');
    }

    public function kelurahan()
    {
        return $this->belongsTo(Kelurahan::class, 'kelurahan_id');
    }
    public function opd()
    {
        return $this->belongsTo(Opd::class, 'opd_id_akhir');
    }
    public function skor()
    {
        return $this->belongsTo(Skor::class, 'usulan_id');
    }
}
