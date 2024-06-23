<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center mb-4">Data Santri</h1>

    <div class="container">
    <a href="/tambahsantri" class="btn btn-success">Tambah</a>

          <div class="row g-3 align-items-center mt-2"> 
        <div class="col-auto">
          <form action="/registrasi" method="GET">
          <input type="search" id="inputPassword6" name="search" class="form-control" aria-describedby="passwordHelpInline">
        </form>
        </div>

        <div class="col-auto">
        <a href="/exportpdf" class="btn btn-info">Export PDF</a>
        </div>

        </div>
        <div class="row">
          @if ($message = Session::get('berhasil'))
          <div class="alert alert-success" role="alert">
            {{ $message}}
          </div>
          @endif

        <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">NIS</th>
            <th scope="col">NIK</th>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">Nama Panggilan</th>
            <th scope="col">Tempat/Tgl lahir</th>
            <th scope="col">Anak Ke</th>
            <th scope="col">Jumlah Saudara</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Alamat Lengkap</th>
            <th scope="col">Tgl_Daftar</th>
            <th scope="col">Pendidikan Formal</th>
            <th scope="col">Pindahan</th>
            <th scope="col">Alasan Pindah</th>




            <th scope="col">Nama Ayah</th>
            <th scope="col">Tempat/Tgl lahir Ayah</th>
            <th scope="col">Pekerjaan Ayah</th>
            <th scope="col">Pendidikan Terakhir Ayah</th>
            <th scope="col">Nomor Telepon Ayah</th>

            <th scope="col">Nama Ibu</th>
            <th scope="col">Tempat/Tgl lahir Ibu</th>
            <th scope="col">Pekerjaan Ibu</th>
            <th scope="col">Pendidikan Terakhir Ibu</th>
            <th scope="col">Nomor Telepon Ibu</th>

            <th scope="col">Alamat Orang Tua Sekarang</th>








            

          </tr>
        </thead>
        <tbody>

          @php
          $no = 1;
          @endphp

          @foreach ($data as $index => $row)
          <tr>
                <th scope="row">{{ $index + $data->firstItem() }}</th>
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






                

                
                <td>
                <a href="/tampilkandata/{{ $row->id }}" class="btn btn-info">Edit</a>
                <a href="#" class="btn btn-danger delete" data-id="{{ $row->id}}" data-nama="{{ $row->nama}}" >Delete</a>
                </td>

              </tr>

          @endforeach
        </tbody>
        </table>
              {{ $data->links() }}
                </div>
            </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.7.1.slim.js" integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  </body>
  <script>

    $('.delete').click( function(){
      var registrasiid = $(this).attr('data-id');
      var nama = $(this).attr('data-nama');

      swal({
          title: "Yakin?",
          text: "Anda akan menghapus data santri ini"+nama+" ",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            window.location = "/delete/"+registrasiid+""
            swal("Data berhasil dihapus", {
              icon: "success",
            });
          } else {
            swal("Data tidak jadi dihapus");
          }
        });
    });

  </script>

</html>