<?php

namespace App\Imports;

use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Opd;
use App\Models\Usulan;
use Encore\Admin\Form\Field\Id;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToModel;

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
        $tanggal_usul = date('Y-m-d', $date);

        // USULAN
        $usulan = substr($row[5], 0, 255);
        // MASALAH
        $masalah = substr($row[6], 0, 255);

        //KABUPATEN
        $kabupaten = Kabupaten::where('nama', $row[8])->first();
        $kabupatenId = $kabupaten ? $kabupaten->id : null;

        //KECAMATAN
        $kecamatan = Kecamatan::where('nama', $row[9])->first();
        $kecamatanId = $kecamatan ? $kecamatan->id : null;

        //KECAMATAN
        $kelurahan = Kelurahan::where('nama', $row[10])->first();
        $kelurahanId = $kelurahan ? $kelurahan->id : null;

         //LATITUDE & LONGITUDE
         $alamat = $row[7];
         $latitude = $this->extractLatitude($alamat);
         $longitude = $this->extractLongitude($alamat);

          // KONVERSI DARI STRING KE TIPE DATA DOUBLE
        $latitude = $latitude ? (double)number_format((float)$latitude, 17, '.', '') : null;
        $longitude = $longitude ? (double)number_format((float)$longitude, 17, '.', '') : null;

        //OPD TUJUAN AWAL
        $opd_awal = Opd::where('nama', $row[12])->first();
        $opd_awal_id = $opd_awal ? $opd_awal->id : null;

        //OPD TUJUAN AKHIR
        $opd_akhir = Opd::where('nama', $row[13])->first();
        $opd_akhir_id = $opd_akhir ? $opd_akhir->id : null;

        // VOLUME
        $volumeString = $row[21];
        $floatVolume = floatval($volumeString);

        //CONFIG TAHUN
        $tahun = $row[2];
        $date = strtotime($tahun);

        $tahunFormat = date('Y', $date);
        $tahunInteger = (int)$tahunFormat;

        return new Usulan([
            'id_usulan' => (int)$row[1],
            'tanggal_usul' => $tanggal_usul ?? NULL,
            'pengusul' => $row[3],
            'profil' => $row[4],
            'usulan' => $usulan,
            'masalah' => $masalah,
            'alamat' => $row[7],
            'kabupaten_id' => $kabupatenId,
            'kecamatan_id' => $kecamatanId,
            'kelurahan_id' => $kelurahanId,
            'latitude' => $latitude,
            'longitude' => $longitude,
            'usulan_ke' => $row[11],
            'opd_id_awal' => $opd_awal_id,
            'opd_id_akhir' => $opd_akhir_id,
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
            'pilihan' => $row[26] = 0,
            'tahun' => $row[27] = $tahunInteger,

        ]);
    }
    private function extractLatitude($alamat)
    {
        if (preg_match('/-?8\.\d+,/', $alamat, $matches)) {
            return rtrim($matches[0], ',');
        }
        if (preg_match('/-?7\.\d+,/', $alamat, $matches)) {
            return rtrim($matches[0], ',');
        }
        return null;
    }

    private function extractLongitude($alamat)
    {
        if (preg_match('/1[1-2]\d\.\d+,/', $alamat, $matches)) {
            return rtrim($matches[0], ',');
        }
        return null;
    }
}
