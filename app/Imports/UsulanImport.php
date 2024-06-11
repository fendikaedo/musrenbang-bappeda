<?php

namespace App\Imports;

use App\Models\Usulan;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UsulanImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    public function model(array $row)
    {
        // TANGGAL USUL
        $dateString = $row[2];
        $date = strtotime($dateString);
        $dateFormat = date('Y-m-d', $date);

        // USULAN
        $usulan = substr($row[5],0,255);
        // MASALAH
        $masalah = substr($row[6],0,255);

        // VOLUME
        $volumeString = $row[21];
        $floatVolume = floatval($volumeString);

        return new Usulan([
            'id_usulan' => (int)$row[1],
            'tanggal_usul' => $dateFormat,
            'pengusul' => $row[3],
            'profil' => $row[4],
            'usulan' => $usulan,
            'masalah' => $masalah,
            'alamat' => $row[7],
            // 'kabupaten_id' =>
            // 'kecamatan_id' =>
            // 'kelurahan_id' =>
            // 'latitude' =>
            // 'longitude' =>
            'usulan_ke' => $row[11],
            // 'opd_id_awal' =>
            // 'opd_id_akhir' =>
            'status' => $row[14],
            'catatan' => $row[15],
            'rekomendasi_mitra' => $row[16],
            'rekomendasi_kelurahan' => $row[17],
            'rekomendasi_kecamatan' => $row[18],
            'rekomendasi_skpd' => $row[19],
            'rekomendasi_tapd' => $row[20],
            'volume' => $floatVolume,
            'satuan' => $row[22],
            'anggaran' => $row[23],
            'jenis_belanja' => $row[24],
            'sub_kegiatan' => $row[25],
            // 'pilihan' => $row[26],
            // 'tahun' => config('tahun')->$row[27],
            // 'skor_bidang' => $row[28],
            // 'gambar' => $row[29],

        ]);
    }
}
