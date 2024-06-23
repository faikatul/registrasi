<?php

namespace App\Http\Controllers;

use App\Models\DataSantri;
use Illuminate\Http\Request;
use PDF;

class DataSantriController extends Controller
{
    public function index(Request $REQUEST){
        if ($REQUEST->has('search')){
            $data = DataSantri::where('Nama_Lengkap', 'LIKE', '%' .$REQUEST->search. '%')->paginate(10); 
        }else{
            $data = DataSantri::paginate(10); //membuat page (hlmn)
        }

        $data = DataSantri::paginate(10); //membuat page (hlmn)
        return view('DataSantri', compact('data'));
    }

    public function tambahsantri(){
        return view('tambahdata');
    }

    public function insertdata(Request $REQUEST){
        //dd($REQUEST->all());

        DataSantri::create($REQUEST->all());
        return redirect()->route('registrasi')->with('berhasil', 'Data Berhasil Ditambahkan');
    } 
    //mengirim data k database

    public function tampilkandata ($id){

        $data = DataSantri::find($id);
        //dd($data);

        return view('tampildata', compact('data'));
        //hanya menampilkan data yg akan diedit
    }

    public function updatedata(request $REQUEST, $id){

        $data = DataSantri::find($id);
        $data->update($REQUEST->all());
        return redirect()->route('registrasi')->with('berhasil', 'Data Berhasil di Update');
    }

    public function delete($id){

        $data = DataSantri::find($id);
        $data->delete();
        return redirect()->route('registrasi')->with('berhasil', 'Data Berhasil di hapus');
    }

    public function exportpdf(){
        $data = DataSantri::all();

        view()->share('data', $data);
        $pdf = PDF::loadview('DataSantri-pdf');
        return $pdf->download('data.pdf');
    }

}
