<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('data_santris', function (Blueprint $table) {
            $table->id();
            $table->integer('NIS');
            $table->bigInteger('NIK');
            $table->string('Nama_Lengkap');
            $table->string('Nama_Panggilan');
            $table->date('Tempat_Tgl_Lahir');            
            $table->string('Anak_Ke');
            $table->string('Jumlah_Saudara');
            $table->enum('Jenis_Kelamin', ['Laki-laki', 'Perempuan']);
            $table->text('Alamat_Lengkap');
            $table->enum('Pendidikan_Formal', ['TK/PAUD', 'SD/MIA_kelas_1', 'SD/MIA_kelas_2', 'SD/MIA_kelas_3', 'SD/MIA_kelas_4', 'SD/MIA_kelas_5', 'SD/MIA_kelas_6']);
            $table->text('Pindahan');
            $table->text('Alasan_Pindah');


            $table->string('Nama_Ayah');
            $table->date('Tempat_Tgl_Lahir_Ayah');   
            $table->string('Pekerjaan_Ayah');
            $table->enum('Pendidikan_Terakhir_Ayah', ['SD_Sederajat', 'SMP_Sederajat', 'SMA_Sederajat', 'Diploma_I/II', 'Diploma_III', 'Strata_I', 'Strata_II', 'Strata_III']);
            $table->bigInteger('Nomor_Telepon_Ayah');

            $table->string('Nama_Ibu');
            $table->date('Tempat_Tgl_Lahir_Ibu');   
            $table->string('Pekerjaan_Ibu');
            $table->enum('Pendidikan_Terakhir_Ibu', ['SD_Sederajat', 'SMP_Sederajat', 'SMA_Sederajat', 'Diploma_I/II', 'Diploma_III', 'Strata_I', 'Strata_II', 'Strata_III']);
            $table->bigInteger('Nomor_Telepon_Ibu');

            $table->text('Alamat_Orang_Tua_Sekarang');


         



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_santris');
    }
};
