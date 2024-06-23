<!DOCTYPE html>
<html>
<head>
<style>


#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}





</style>
</head>
<body>

<h1 class="text-center mb-4">Data Santri</h1>

<table id="customers">
  <tr>
    <th>NO</th>
    <th>NIS</th>
    <th>NIK</th>
    <th>Nama Lengkap</th>
    <th>Nama Panggilan</th>
    <th>Tempat/Tgl lahir</th>
    <th>Anak Ke</th>
    <th>Jumlah Saudara</th>
    <th>Jenis Kelamin</th>
    <th>Alamat Lengkap</th>
    <th>Tgl_Daftar</th>
    <th>Pendidikan Formal</th>
    <th>Pindahan</th>
    <th>Alasan Pindah</th>


    <th>Nama Ayah</th>
    <th>Tempat/Tgl lahir Ayah</th>
    <th>Pekerjaan Ayah</th>
    <th>Pendidikan Terakhir Ayah</th>
    <th>Nomor Telepon Ayah</th>

    <th>Nama Ibu</th>
    <th>Tempat/Tgl lahir Ibu</th>
    <th>Pekerjaan Ibu</th>
    <th>Pendidikan Terakhir Ibu</th>
    <th>Nomor Telepon Ibu</th>

    <th>Alamat Orang Tua Sekarang</th>






    
  </tr>

    @php
        $no=1;
    @endphp

    @foreach ($data as $row)
  <tr>
    <td>{{ $no++ }}</td>
    <td>{{ $row->NIS}}</td>
    <td>{{ $row->NIK}}</td>
    <td>{{ $row->Nama_Lengkap}}</td>
    <td>{{ $row->Nama_Panggilan}}</td>
    <td>{{ $row->Tempat_Tgl_Lahir}}</td>
    <td>{{ $row->Anak_Ke}}</td>
    <td>{{ $row->Jumlah_Saudara}}</td>
    <td>{{ $row->Jenis_Kelamin}}</td>
    <td>{{ $row->Alamat_Lengkap}}</td>
    <td>{{ $row->created_at->format('D M Y') }}</td>
    <td>{{ $row->Pendidikan_Formal}}</td>
    <td>{{ $row->Pindahan}}</td>
    <td>{{ $row->Alasan_Pindah}}</td>



    <td>{{ $row->Nama_Ayah}}</td>
    <td>{{ $row->Tempat_Tgl_Lahir_Ayah}}</td>
    <td>{{ $row->Pekerjaan_Ayah}}</td>
    <td>{{ $row->Pendidikan_Terakhir_Ayah}}</td>
    <td>{{ $row->Nomor_Telepon_Ayah}}</td>

    <td>{{ $row->Nama_Ibu}}</td>
    <td>{{ $row->Tempat_Tgl_Lahir_Ibu}}</td>
    <td>{{ $row->Pekerjaan_Ibu}}</td>
    <td>{{ $row->Pendidikan_Terakhir_Ibu}}</td>
    <td>{{ $row->Nomor_Telepon_Ibu}}</td>

    <td>{{ $row->Alamat_Orang_Tua_Sekarang}}</td>





  </tr>
    @endforeach


</table>

</body>
</html>
