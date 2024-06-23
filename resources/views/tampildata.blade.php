<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center mb-4">Edit Data Santri</h1>

    <div class="container">

        <div class="row justify-content-center">
           <div class="col-10">
           <form action="/updatedata/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                @csrf 
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">NIS</label>
                    <input type="text" name="NIS" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
                    value= "{{ $data->NIS }}">

                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">NIK</label>
                    <input type="text" name="NIK" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    value= "{{ $data->NIK }}">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                    <input type="text" name="Nama_Lengkap" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    value= "{{ $data->Nama_Lengkap }}">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Panggilan</label>
                    <input type="text" name="Nama_Panggilan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    value= "{{ $data->Nama_Panggilan }}">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tempat Tgl Lahir</label>
                    <input type="text" name="Tempat_Tgl_Lahir" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    value= "{{ $data->Tempat_Tgl_Lahir }}">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Anak Ke</label>
                    <input type="text" name="Anak_Ke" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    value= "{{ $data->Anak_Ke }}">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Jumlah Saudara</label>
                    <input type="text" name="Jumlah_Saudara" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    value= "{{ $data->Jumlah_Saudara }}">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                    <select class="form-select" name="Jenis_Kelamin" aria-label="Default select example">
                        <option selected>{{ $data->Jenis_Kelamin }}</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="forss-label">Alamat Lengkap</label>
                    <input type="text" name="Alamat_Lengkap" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    value= "{{ $data->Alamat_Lengkap}}">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Pendidikan Formal</label>
                    <select class="form-select" name="Pendidikan_Formal" aria-label="Default select example">
                        <option value="TK/PAUD">TK/PAUD</option>
                        <option value="SD/MIA_kelas_1">SD/MIA kelas 1</option>
                        <option value="SD/MIA_kelas_2">SD/MIA kelas 2</option>
                        <option value="SD/MIA_kelas_3">SD/MIA kelas 3</option>
                        <option value="SD/MIA_kelas_4">SD/MIA kelas 4</option>
                        <option value="SD/MIA_kelas_5">SD/MIA kelas 5</option>
                        <option value="SD/MIA_kelas_6">SD/MIA kelas 6</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="forss-label">Pindahan</label>
                    <input type="text" name="Pindahan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    value= "{{ $data->Pindahan}}">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="forss-label">Alasan Pindah</label>
                    <input type="text" name="Alasan_Pindah" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    value= "{{ $data->Alasan_Pindah}}">
                </div>



                <div class="mb-3">
                    <label for="exampleInputEmail1" class="forss-label">Nama Ayah</label>
                    <input type="text" name="Nama_Ayah" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    value= "{{ $data->Nama_Ayah }}">
                </div>


                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tempat Tgl Lahir Ayah</label>
                    <input type="text" name="Tempat_Tgl_Lahir_Ayah" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    value= "{{ $data->Tempat_Tgl_Lahir_Ayah }}">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Pekerjaan Ayah</label>
                    <input type="text" name="Pekerjaan_Ayah" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    value= "{{ $data->Pekerjaan_Ayah }}">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Pendidikan Terakhir Ayah</label>
                    <select class="form-select" name="Pendidikan_Terakhir_Ayah" aria-label="Default select example">
                        <option value="SD_Sederajat">SD Sederajat</option>
                        <option value="SMP_Sederajat">SMP Sederajat</option>
                        <option value="SMA_Sederajat">SMA Sederajat</option>
                        <option value="Diploma_I/II">Diploma I/II</option>
                        <option value="Diploma_III">Diploma III</option>
                        <option value="Strata_I">Strata I</option>
                        <option value="Strata_II">Strata II</option>
                        <option value="Strata_III">Strata III</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nomor Telepon Ayah</label>
                    <input type="text" name="Nomor_Telepon_Ayah" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    value= "{{ $data->Nomor_Telepon_Ayah}}">
                </div>


                <div class="mb-3">
                    <label for="exampleInputEmail1" class="forss-label">Nama Ibu</label>
                    <input type="text" name="Nama_Ibu" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    value= "{{ $data->Nama_Ibu }}">
                </div>


                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tempat Tgl Lahir Ibu</label>
                    <input type="text" name="Tempat_Tgl_Lahir_Ibu" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    value= "{{ $data->Tempat_Tgl_Lahir_Ibu }}">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Pekerjaan Ibu</label>
                    <input type="text" name="Pekerjaan_Ibu" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    value= "{{ $data->Pekerjaan_Ibu}}">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Pendidikan Terakhir Ibu</label>
                    <select class="form-select" name="Pendidikan_Terakhir_Ibu" aria-label="Default select example">
                        <option value="SD_Sederajat">SD Sederajat</option>
                        <option value="SMP_Sederajat">SMP Sederajat</option>
                        <option value="SMA_Sederajat">SMA Sederajat</option>
                        <option value="Diploma_I/II">Diploma I/II</option>
                        <option value="Diploma_III">Diploma III</option>
                        <option value="Strata_I">Strata I</option>
                        <option value="Strata_II">Strata II</option>
                        <option value="Strata_III">Strata III</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nomor Telepon Ibu</label>
                    <input type="text" name="Nomor_Telepon_Ibu" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    value= "{{ $data->Nomor_Telepon_Ibu }}">
                </div>


                <div class="mb-3">
                    <label for="exampleInputEmail1" class="forss-label">Alamat Orang Tua Sekarang</label>
                    <input type="text" name="Alamat_Orang_Tua_Sekarang class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    value= "{{ $data->Alamat_Orang_Tua_Sekarang}}">
                </div>





                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
           </div>

        </div>
    </div>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>