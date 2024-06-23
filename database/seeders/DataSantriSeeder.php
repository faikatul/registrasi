<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataSantriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('data_santris')->insert([
            'NIS' => '1223',
            'NIK' => '1223141325645',
            'Nama_Lengkap' => 'Dewi Alfiah',
            'Nama_Panggilan' => 'Fia',
            'Tempat_Tgl_Lahir' => '2005-02-08',
            'Anak_Ke' => '1',
            'Jumlah_Saudara' => '3',
            'Jenis_Kelamin' => 'Perempuan',
            'Alamat_Lengkap' => 'Tanjung Kidul',
            'Pendidakan_Formal' => 'SD/MIA_kelas_5',
            'Pindahan' => 'Diniyah',
            'Alasan_Pindah' => 'Pindah_Rumah',

            'Nama_Ayah' => 'lutfi',
            'Tempat_Tgl_Lahir_Ayah' => '1980-02-08',
            'Pekerjaan_Ayah' => 'Dokter',
            'Pendidikan_Terakhir_Ayah' => 'Sma_Sederajat',
            'Nomor_Telepon_Ayah' => '0875635241527',

            'Nama_Ibu' => 'Wiwin',
            'Tempat_Tgl_Lahir_Ibu' => '1980-02-08',
            'Pekerjaan_Ibu' => 'Dokter',
            'Pendidikan_Terakhir_Ibu' => 'Sma_Sederajat',
            'Nomor_Telepon_Ibu' => '0875635241527',

            'Alamat_Orang_Tua_Sekarang' => 'Tanjung',

            






        ]);
    }
}
